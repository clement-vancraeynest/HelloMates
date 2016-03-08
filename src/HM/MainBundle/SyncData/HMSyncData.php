<?php

namespace HM\MainBundle\SyncData;

use Symfony\Component\Validator\Constraints\DateTime;

class HMSyncData {
    
    private $api;
    private $em;
    
    /**
     * Constructeur
     * @param \HM\MainBundle\RiotApi\HMRiotApi $riotAPI
     * @param \Doctrine\ORM\EntityManager $doctrine
     */
    public function __construct(\HM\MainBundle\RiotApi\HMRiotApi $riotAPI, \Doctrine\ORM\EntityManager $doctrine) {
        $this->api = $riotAPI;
        $this->em = $doctrine;
    }
    
    //PRIVATE
    /**
     * Renvoi une instance de la class API
     * @return \LeagueWrap\Api
     */
    private function _getApi() {
        return $this->api->getApi();
    }

    /**
     * Renvoi le summoner demandé
     * @param integer $id
     * @return Summoner
     */
    private function _getSummoner($id) {
        $rep = $this->em->getRepository('HMMainBundle:Summoner');
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
    private function _getMatch($summonerID, $id) {
        $rep = $this->em->getRepository('HMMainBundle:Match');
        $match = $rep->getMatchBySummoner($summonerID, $id);
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
        $epoch = substr($date, 0, 10);
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
     * Synchronise le summoner passé en paramètre
     * @param String $region
     * @param \LeagueWrap\Dto\Summoner $s
     */
    private function _syncSummoner($region, $s) {
        $api = $this->_getApi();
        $id = (int) $s->get('id');
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
        $em = $this->em;
        $em->persist($summoner);
        $em->flush();
        
        return $summoner;
    }

    /**
     * Renvoi la constante de médaille
     * @param  $stats
     * @return int
     */
    private function _getMedal($stats) {
        if ($stats->get('doubleKills'))
            return 2;
        if ($stats->get('tripleKills'))
            return 3;
        if ($stats->get('quadraKills'))
            return 4;
        if ($stats->get('pentaKills'))
            return 5;
        return 0;
    }

    /**
     * Renvoi le nombre de champion tués
     * @param integer|null $kills
     * @return int
     */
    private function _getKills($kills) {
        if ($kills == null) {
            return 0;
        } else {
            return $kills;
        }
    }

    /**
     * Renvoi le nombre de morts
     * @param integer|null $deaths
     * @return int
     */
    private function _getDeaths($deaths) {
        if ($deaths == null) {
            return 0;
        } else {
            return $deaths;
        }
    }

    /**
     * Renvoi le nombre d'assists
     * @param integer|null $assists
     * @return int
     */
    private function _getAssists($assists) {
        if ($assists == null) {
            return 0;
        } else {
            return $assists;
        }
    }

    //PUBLIC
    /**
     * Controller de synchronisation des informations d'un summoner (2 requests)
     * @param string $region
     * @param string $id
     * @return Summoner
     */
    public function syncSummoner($region, $id) {
        //API
        $api = $this->_getApi();
        $api->setRegion($region);

        //GET API
        $s = $api->summoner()->info($id);
        $sum = $this->_syncSummoner($region, $s);
        
        return $sum;
    }

    /**
     * Synchronise les matchs récents d'un summoner (10 derniers)
     * @param String $region
     * @param String $id
     * @return Match[]
     */
    public function syncMatches($region, $id) {
        //API
        $api = $this->_getApi();
        $api->setRegion($region);

        //Summoner
        $summoner = $this->_getSummoner($id);

        //GET API
        $games = $api->game()->recent($id)->games;
        $matches = Array();
        foreach ($games as $game) {
            $match = $this->_getMatch($summoner->getSummonerID(), $game->get('gameId'));
            $stats = $game->get('stats');

            //set
            $match->setMatchId($game->get('gameId'));
            $match->setWon($stats->get('win'));
            $match->setQueue($game->get('subType'));
            $match->setChampionID($game->get('championId'));
            $match->setKills($this->_getKills($stats->get('championsKilled')));
            $match->setDeaths($this->_getDeaths($stats->get('numDeaths')));
            $match->setAssists($this->_getAssists($stats->get('assists')));
            $match->setDate($this->_getGameDate($game->get('createDate')));
            $match->setGameLength($this->_getGamelength($stats->get('timePlayed')));
            $match->setMedal($this->_getMedal($stats));
            $match->setSummoner($summoner);

            //save
            $em = $this->em;
            $em->persist($match);
            $em->flush();
            $matches[] = $match;
        }
        
        return $matches;
    }

    /**
     * Synchronise le summoner depuis son nom
     * @param String $region
     * @param String $name
     * @return Summoner
     */
    public function syncSummonerName($region, $name) {
        //API
        $api = $this->_getApi();
        $api->setRegion($region);

        $s = $api->summoner()->info($name);
        $sum = $this->_syncSummoner($region, $s);
        
        return $sum;
    }
}
