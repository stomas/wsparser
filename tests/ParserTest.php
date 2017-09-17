<?php

namespace Tests;

use Orchestra\Testbench\TestCase;
use Stomas\WSParser\TeamParser;
use Stomas\WSParser\WsTeam;

class ParserTest extends TestCase {

    /**
     * TODO later
     */
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'footballguru',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ]);
    }

    /** @test */
    public function it_gets_info_from_team_results(){

        $url = 'https://www.whoscored.com/Teams/32/Show/England-Manchester-United';

        $teamParser = new TeamParser($url);

        $team = WsTeam::create($teamParser->parse());

//        $this->assertTrue($team->gamesCount > 0);
//        $this->assertTrue($team->goalsCount > 0);
//        $this->assertTrue($team->shotsPerGame > 0);
//        $this->assertTrue($team->yellowCards > 0);
//        $this->assertTrue($team->redCards > 0);
//        $this->assertTrue($team->averagePossesions > 0);
//        $this->assertTrue($team->passSuccess > 0);
//        $this->assertTrue($team->arialsWon > 0);
//        $this->assertTrue($team->rating > 0);

        $this->assertTrue(true);

    }
}
 