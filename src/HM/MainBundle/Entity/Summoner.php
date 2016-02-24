<?php

namespace HM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="hm_summoner")
 */
class Summoner {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(name="summonerID", type="integer")
     */
    private $summonerID;

    /**
     * @ORM\Column(name="username", type="string")
     */
    private $username;

    /**
     * @ORM\Column(name="region", type="string")
     */
    private $region;

    /**
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @ORM\Column(name="iconID", type="integer")
     */
    private $iconID;

    /**
     * @ORM\Column(name="tier", type="string")
     */
    private $tier;

    /**
     * @ORM\Column(name="division", type="string")
     */
    private $division;

    /**
     * @ORM\Column(name="leaguePoints", type="integer")
     */
    private $leaguePoints;

    /**
     * @ORM\Column(name="nbGamesWon", type="integer")
     */
    private $nbGamesWon;

    /**
     * @ORM\Column(name="nbGamesLost", type="integer")
     */
    private $nbGamesLost;
    
    /**
     * Set id
     * @param integer $id
     * @return Summoner
     */
    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * Set summonerID
     *
     * @param integer $summonerID
     *
     * @return Summoner
     */
    public function setSummonerID($summonerID) {
        $this->summonerID = $summonerID;

        return $this;
    }

    /**
     * Get summonerID
     *
     * @return integer
     */
    public function getSummonerID() {
        return $this->summonerID;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Summoner
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Summoner
     */
    public function setRegion($region) {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion() {
        return $this->region;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Summoner
     */
    public function setLevel($level) {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel() {
        return $this->level;
    }

    /**
     * Set iconID
     *
     * @param integer $iconID
     *
     * @return Summoner
     */
    public function setIconID($iconID) {
        $this->iconID = $iconID;

        return $this;
    }

    /**
     * Get iconID
     *
     * @return integer
     */
    public function getIconID() {
        return $this->iconID;
    }

    /**
     * Set tier
     *
     * @param string $tier
     *
     * @return Summoner
     */
    public function setTier($tier) {
        $this->tier = $tier;

        return $this;
    }

    /**
     * Get tier
     *
     * @return string
     */
    public function getTier() {
        return $this->tier;
    }

    /**
     * Set division
     *
     * @param string $division
     *
     * @return Summoner
     */
    public function setDivision($division) {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string
     */
    public function getDivision() {
        return $this->division;
    }

    /**
     * Set leaguePoints
     *
     * @param integer $leaguePoints
     *
     * @return Summoner
     */
    public function setLeaguePoints($leaguePoints) {
        $this->leaguePoints = $leaguePoints;

        return $this;
    }

    /**
     * Get leaguePoints
     *
     * @return integer
     */
    public function getLeaguePoints() {
        return $this->leaguePoints;
    }

    /**
     * Set nbGamesWon
     *
     * @param integer $nbGamesWon
     *
     * @return Summoner
     */
    public function setNbGamesWon($nbGamesWon) {
        $this->nbGamesWon = $nbGamesWon;

        return $this;
    }

    /**
     * Get nbGamesWon
     *
     * @return integer
     */
    public function getNbGamesWon() {
        return $this->nbGamesWon;
    }

    /**
     * Set nbGamesLost
     *
     * @param integer $nbGamesLost
     *
     * @return Summoner
     */
    public function setNbGamesLost($nbGamesLost) {
        $this->nbGamesLost = $nbGamesLost;

        return $this;
    }

    /**
     * Get nbGamesLost
     *
     * @return integer
     */
    public function getNbGamesLost() {
        return $this->nbGamesLost;
    }

}
