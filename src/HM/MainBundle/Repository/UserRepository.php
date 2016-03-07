<?php

namespace HM\MainBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository {
    
    /**
     * Récupère un utilisateur avec ses summoners
     * @param integer $userID
     * @return User|null
     */
    public function findOneUserWithSummoners($userID){
        $qb = $this->createQueryBuilder('u');
        $qb->leftjoin('u.summoners', 'sums')
            ->addSelect('sums')
            ->where('u.id = :id')
            ->setParameter('id', $userID);
        $res = $qb->getQuery()->getOneOrNullResult();
        return $res;
    }
}