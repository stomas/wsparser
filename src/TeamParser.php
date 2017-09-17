<?php

namespace Stomas\WSParser;

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class TeamParser {

    private $url;
    private $goutteClient;

    public function __construct($url){
        $this->url = $url;

        $this->goutteClient = new Client();
        $guzzleClient = new GuzzleClient(array(
            'timeout' => 60,
        ));
        $this->goutteClient->setClient($guzzleClient);
    }
} 