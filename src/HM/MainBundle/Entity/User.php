<?php

namespace HM\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="hm_user")
 */
class User extends BaseUser {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\ManyToMany(targetEntity="Summoner", cascade={"persist"})
     */
    protected $summoners;

    public function __construct() {
        parent::__construct();
        $this->summoners = new ArrayCollection();
    }

    /**
     * Add summoner
     *
     * @param \HM\MainBundle\Entity\Summoner $summoner
     *
     * @return User
     */
    public function addSummoner(\HM\MainBundle\Entity\Summoner $summoner) {
        $this->summoners[] = $summoner;

        return $this;
    }
    /**
     * Remove summoner
     *
     * @param \HM\MainBundle\Entity\Summoner $summoner
     */
    public function removeSummoner(\HM\MainBundle\Entity\Summoner $summoner) {
        $this->summoners->removeElement($summoner);
    }
    /**
     * Get summoners
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSummoners() {
        return $this->summoners;
    }
}
