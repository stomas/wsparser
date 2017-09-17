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

    public function parse(){
        $this->goutteClient->setHeader('User-Agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36');
        $crawler = $this->goutteClient->request('GET', $this->url);

        return [];
    }
} 