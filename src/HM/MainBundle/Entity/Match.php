<?php

namespace HM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="hm_match")
 */
class Match {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="matchID", type="string")
     */
    private $matchID;

    /**
     * @ORM\Column(name="won", type="boolean")
     */
    private $won;

    /**
     * @ORM\Column(name="queue", type="string")
     */
    private $queue;

    /**
     * @ORM\Column(name="championID", type="integer")
     */
    private $championID;

    /**
     * @ORM\Column(name="kills", type="integer")
     */
    private $kills;

    /**
     * @ORM\Column(name="deaths", type="integer")
     */
    private $deaths;

    /**
     * @ORM\Column(name="assists", type="integer")
     */
    private $assists;

    /**
     * @ORM\Column(name="killContribution", type="integer")
     */
    private $killContribution;

    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(name="gameLength", type="float")
     */
    private $gameLength;

    /**
     * @ORM\Column(name="medal", type="string")
     */
    private $medal;

    /**
     * @ORM\ManyToOne(targetEntity="HM\MainBundle\Entity\Summoner")
     */
    private $summoner;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set matchID
     *
     * @param string $matchID
     *
     * @return Match
     */
    public function setMatchID($matchID) {
        $this->matchID = $matchID;

        return $this;
    }

    /**
     * Get matchID
     *
     * @return string
     */
    public function getMatchID() {
        return $this->matchID;
    }

    /**
     * Set won
     *
     * @param boolean $won
     *
     * @return Match
     */
    public function setWon($won) {
        $this->won = $won;

        return $this;
    }

    /**
     * Get won
     *
     * @return boolean
     */
    public function getWon() {
        return $this->won;
    }

    /**
     * Set queue
     *
     * @param string $queue
     *
     * @return Match
     */
    public function setQueue($queue) {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Get queue
     *
     * @return string
     */
    public function getQueue() {
        return $this->queue;
    }

    /**
     * Set championID
     *
     * @param integer $championID
     *
     * @return Match
     */
    public function setChampionID($championID) {
        $this->championID = $championID;

        return $this;
    }

    /**
     * Get championID
     *
     * @return integer
     */
    public function getChampionID() {
        return $this->championID;
    }

    /**
     * Set kills
     *
     * @param integer $kills
     *
     * @return Match
     */
    public function setKills($kills) {
        $this->kills = $kills;

        return $this;
    }

    /**
     * Get kills
     *
     * @return integer
     */
    public function getKills() {
        return $this->kills;
    }

    /**
     * Set deaths
     *
     * @param integer $deaths
     *
     * @return Match
     */
    public function setDeaths($deaths) {
        $this->deaths = $deaths;

        return $this;
    }

    /**
     * Get deaths
     *
     * @return integer
     */
    public function getDeaths() {
        return $this->deaths;
    }

    /**
     * Set assists
     *
     * @param integer $assists
     *
     * @return Match
     */
    public function setAssists($assists) {
        $this->assists = $assists;

        return $this;
    }

    /**
     * Get assists
     *
     * @return integer
     */
    public function getAssists() {
        return $this->assists;
    }

    /**
     * Set killContribution
     *
     * @param integer $killContribution
     *
     * @return Match
     */
    public function setKillContribution($killContribution) {
        $this->killContribution = $killContribution;

        return $this;
    }

    /**
     * Get killContribution
     *
     * @return integer
     */
    public function getKillContribution() {
        return $this->killContribution;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Match
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set gameLength
     *
     * @param float $gameLength
     *
     * @return Match
     */
    public function setGameLength($gameLength) {
        $this->gameLength = $gameLength;

        return $this;
    }

    /**
     * Get gameLength
     *
     * @return float
     */
    public function getGameLength() {
        return $this->gameLength;
    }

    /**
     * Set medal
     *
     * @param string $medal
     *
     * @return Match
     */
    public function setMedal($medal) {
        $this->medal = $medal;

        return $this;
    }

    /**
     * Get medal
     *
     * @return string
     */
    public function getMedal() {
        return $this->medal;
    }

    /**
     * Set summoner
     *
     * @param \HM\MainBundle\Entity\Summoner $summoner
     *
     * @return Match
     */
    public function setSummoner(\HM\MainBundle\Entity\Summoner $summoner = null) {
        $this->summoner = $summoner;

        return $this;
    }

    /**
     * Get summoner
     *
     * @return \HM\MainBundle\Entity\Summoner
     */
    public function getSummoner() {
        return $this->summoner;
    }

}
