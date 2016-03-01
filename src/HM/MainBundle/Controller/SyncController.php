<?php

namespace HM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

class SyncController extends Controller {

    //PRIVATE
    /**
     * Renvoi une instance de la class API
     * @return \LeagueWrap\Api
     */
    private function _getApi() {
        return $this->container->get('hm_main.riotApi')->getApi();
    }

    /**
     * Renvoi le summoner demandé
     * @param integer $id
     * @return Summoner
     */
    private function _getSummoner($id) {
        $rep = $this->getDoctrine()->getRepository('HMMainBundle:Summoner');
        $summoner = $rep->findOneBySummonerID($id);
        if (!isset($summoner))
            $summoner = new \HM\MainBundle\Entity\Summoner;
        return $summoner;
    }

    /**
     * Renvoi le match demandé
     * @param integer $id
     * @return Macth
     */
    private function _getMatch($id) {
        $rep = $this->getDoctrine()->getRepository('HMMainBundle:Match');
        $match = $rep->findOneByMatchID($id);
        if (!isset($match))
            $match = new \HM\MainBundle\Entity\Match;
        return $match;
    }

    /**
     * Renvoi la date de la games
     * @param String $date
     * @return DateTime
     */
    private function _getGameDate($date) {
        $epoch = substr($date,0,10);
        $gameDate = new \DateTime("@$epoch");
        return $gameDate;
    }

    /**
     * Renvoi la longueur de la game
     * @param String $time
     * @return DateTime
     */
    private function _getGamelength($time) {
        $gameLength = new \DateTime();
        $timeRaw = (int) $time;
        $minutes = floor($timeRaw / 60);
        $seconds = $timeRaw % 60;
        $gameLength->setTime(0, $minutes, $seconds);
        return $gameLength;
    }
    
    /**
     * Renvoi la constante de médaille
     * @param  $stats
     * @return int
     */
    private function _getMedal($stats) {
        if($stats->get('doubleKills')) return 2;
        if($stats->get('tripleKills')) return 3;
        if($stats->get('quadraKills')) return 4;
        if($stats->get('pentaKills')) return 5;
        return 0;
    }

    //PUBLIC
    /**
     * Controller de synchronisation des informations d'un summoner (2 requests)
     * @param string $region
     * @param string $id
     * @return Response
     */
    public function syncSummonerAction($region, $id) {
        //Param
        $id = (int) $id;

        //API
        $api = $this->_getApi();
        $api->setRegion($region);

        //GET API
        $s = $api->summoner()->info($id);
        $l = $api->league()->league($id, true)[0];
        $ls = $l->entry($id);

        $summoner = $this->_getSummoner($id);
        //summoner
        $summoner->setSummonerID($s->get('id'));
        $summoner->setUsername($s->get('name'));
        $summoner->setRegion($region);
        $summoner->setLevel($s->get('summonerLevel'));
        $summoner->setIconID($s->get('profileIconId'));
        //league
        $summoner->setTier($l->get('tier'));
        $summoner->setDivision($ls->get('division'));
        $summoner->setLeaguePoints($ls->get('leaguePoints'));
        $summoner->setNbGamesWon($ls->get('wins'));
        $summoner->setNbGamesLost($ls->get('losses'));

        //save
        $em = $this->getDoctrine()->getManager();
        $em->persist($summoner);
        $em->flush();

        return new Response('Summoner ' . $id . ' updated');
    }
    
    /**
     * Synchronise les matchs récents d'un summoner (10 derniers)
     * @param String $region
     * @param String $id
     * @return Response
     */
    public function syncMatchesAction($region, $id) {
        //Param
        $id = (int) $id;

        //API
        $api = $this->_getApi();
        $api->setRegion($region);

        //Summoner
        $summoner = $this->_getSummoner($id);

        //GET API
        $games = $api->game()->recent($id)->games;
        foreach ($games as $game) {
            $match = $this->_getMatch($game->get('gameId'));
            $stats = $game->get('stats');

            //set
            $match->setMatchId($game->get('gameId'));
            $match->setWon($stats->get('win'));
            $match->setQueue($game->get('subType'));
            $match->setChampionID($game->get('championId'));
            $match->setKills($stats->get('championsKilled'));
            $match->setDeaths($stats->get('numDeaths'));
            $match->setAssists($stats->get('assists'));
            $match->setDate($this->_getGameDate($game->get('createDate')));
            $match->setGameLength($this->_getGamelength($stats->get('timePlayed')));
            $match->setMedal($this->_getMedal($stats));
            $match->setSummoner($summoner);

            //save
            $em = $this->getDoctrine()->getManager();
            $em->persist($match);
            $em->flush();
        }


        return new Response('Matches of user ' . $id . ' updated');
    }

}
