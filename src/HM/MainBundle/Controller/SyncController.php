<?php

namespace HM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SyncController extends Controller {

    //PUBLIC
    /**
     * Controller de synchronisation des informations d'un summoner (2 requests)
     * @param string $region
     * @param string $id
     * @return Response
     */
    public function syncSummonerAction($region, $id) {
        $id = (int) $id;
        $summmoner = $this->get('hm_main.syncData')->syncSummoner($region, $id);
        return new Response('Summoner ' . $summmoner->getUsername() . ' updated');
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
        $matches = $this->get('hm_main.syncData')->syncMatches($region, $id);
        return new Response('<body>Matches of user ' . $id . ' updated</body>');
    }

    /**
     * Synchronise le summoner depuis son nom
     * @param String $region
     * @param String $name
     * @return Response
     */
    public function syncSummonerNameAction($region, $name) {
        $summmoner = $this->get('hm_main.syncData')->syncSummonerName($region, $name);
        return new Response('Summoner ' . $summmoner->getUsername() . ' updated');
    }

}
