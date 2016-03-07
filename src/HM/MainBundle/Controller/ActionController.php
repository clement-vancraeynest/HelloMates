<?php

namespace HM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ActionController extends Controller {

    /**
     * Follow le summoner demandé
     * @param integer $userID
     * @param String $region
     * @param integer $summonerID
     * @return Response
     */
    public function followAction($userID, $region, $summonerID) {
        $em = $this->getDoctrine()->getManager();
        $userRep = $this->getDoctrine()->getRepository('HMMainBundle:User');
        $summonerRep = $this->getDoctrine()->getRepository('HMMainBundle:Summoner');

        //get user with summoners
        $user = $userRep->findOneUserWithSummoners($userID);
        $summoner = $summonerRep->findOneSummonerByRegionAndId($region, $summonerID);

        //get user
        $user->addSummoner($summoner);

        //Save
        $em->persist($user);
        $em->flush();

        return new Response("<body>User : $userID, follow summoner $summonerID </body>");
    }

    /**
     * Unfollow le summoner demandé
     * @param integer $userID
     * @param String $region
     * @param integer $summonerID
     * @return Response
     */
    public function unFollowAction($userID, $region, $summonerID) {
        $em = $this->getDoctrine()->getManager();
        $userRep = $this->getDoctrine()->getRepository('HMMainBundle:User');
        $summonerRep = $this->getDoctrine()->getRepository('HMMainBundle:Summoner');

        //get user with summoners
        $user = $userRep->findOneUserWithSummoners($userID);
        $summoner = $summonerRep->findOneSummonerByRegionAndId($region, $summonerID);

        //get user
        $user->removeSummoner($summoner);

        //Save
        $em->persist($user);
        $em->flush();

        return new Response("<body>User : $userID, unfollow summoner $summonerID </body>");
    }

}
