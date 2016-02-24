<?php

namespace HM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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
    private function _getSummoner($id){
        $rep = $this->getDoctrine()->getRepository('HMMainBundle:Summoner');
        $summoner = $rep->findOneBySummonerID($id);
        if(!isset($summoner)) $summoner = new \HM\MainBundle\Entity\Summoner;
        return $summoner;
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

    public function syncMatchesAction($region, $id) {
        //Param
        $id = (int) $id;
        
        //API
        $api = $this->_getApi();
        $api->setRegion($region);
        
        //GET API
        $recent = $api->game()->recent($id);
        
        return new Response('Matches of user ' . $id . ' updated');
    }

}
