<?php

namespace HM\MainBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SummonerRepository extends EntityRepository {
     
    /**
     * Récupère un Summoner en fonction de sa région et de son ID
     * @param String $region
     * @param integer $summonerID
     * @return Summoner|null
     */
    public function findOneSummonerByRegionAndId($region, $summonerID){
        $qb = $this->createQueryBuilder('s');
        $qb->where('s.summonerID = :summonerID')->andWhere('s.region = :region')
            ->setParameter('summonerID', $summonerID)
            ->setParameter('region', $region);
        $res = $qb->getQuery()->getOneOrNullResult();
        return $res;
    }
}
