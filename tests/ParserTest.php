<?php

namespace Tests;

use Orchestra\Testbench\TestCase;
use Stomas\WSParser\Team;
use Stomas\WSParser\TeamParser;

class ParserTest extends TestCase {
    /** @test */
    public function it_gets_info_from_team_results(){

        $url = 'https://www.whoscored.com/Teams/32/Show/England-Manchester-United';

        $teamParser = new TeamParser($url);

        $team = Team::create($teamParser->parse());

        assertTrue($team->gamesCount > 0);
        assertTrue($team->goalsCount > 0);
        assertTrue($team->shotsPerGame > 0);
        assertTrue($team->yellowCards > 0);
        assertTrue($team->redCards > 0);
        assertTrue($team->averagePossesions > 0);
        assertTrue($team->passSuccess > 0);
        assertTrue($team->arialsWon > 0);
        assertTrue($team->rating > 0);

    }
}
 