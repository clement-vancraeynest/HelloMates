<?php

namespace HM\MainBundle\RiotApi;

use LeagueWrap\Api;

/**
 * Service permettant d'accèser a une instance unique de la class Api
 */
class HMRiotApi {
    protected $api;
    
    public function __construct($apiKey) {
        if(isset($this->api)) return $api;
        $this->api = new Api($apiKey);
//        $this->api->limit(10, 10);
//        $this->api->limit(500, 600);
    }
    
    /**
     * Renvoi une instance de la class API
     * @return type
     */
    public function getApi(){
        return $this->api;
    }
}
