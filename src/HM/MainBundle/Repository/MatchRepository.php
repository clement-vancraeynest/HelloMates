<?php

namespace HM\MainBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MatchRepository extends EntityRepository {
    
    /**
     * Renvoi le match du summoner demandé
     * @param integer $summonerID
     * @param integer $matchID
     * @return Match|null
     */
    public function getMatchBySummoner($summonerID, $matchID){
        $query = $this->_em->createQuery(""
                . "SELECT m "
                . "FROM HMMainBundle:Match m "
                . "INNER JOIN HMMainBundle:Summoner s "
                . "WHERE ((s.summonerID = $summonerID) AND (m.matchID = $matchID) AND (s = m.summoner))");
        $res = $query ->getOneOrNullResult();
        return $res;
    }
}
