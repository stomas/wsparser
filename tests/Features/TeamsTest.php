<?php
/**
 * Created by PhpStorm.
 * User: stomas
 * Date: 17/09/17
 * Time: 13:01
 */

namespace Tests\Features;


use Illuminate\Support\Facades\App;
use Orchestra\Testbench\TestCase;

class TeamsTest extends TestCase {

    protected function setUp()
    {
        parent::setUp();

    }

    protected function getPackageProviders($app)
    {
        return ['Stomas\WSParser\WSParserServiceProvider'];
    }


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
        $app['config']->set('app.key', 'base64:U5v6AHrlq+SX6nJNVMOvhV86G+C4G+mRCZ6n8bHlcUE=');
        $app['config']->set('app.env', 'local');
        $app['config']->set('app.debug', true);
    }

    /** @test */
    public function it_add_team_to_database(){

        $team = [
            'gamesCount' => 5,
            'shotsPerGame' => 15,
            'yellowCards' => 2,
            'redCards' => 0,
            'averagePossesions' =>  12.3,
            'passSuccess' => 15.2,
            'aerialsWon' => 12.3,
            'rating' => 8.2,
        ];

        $response = $this->post('/wsparser/teams/store', $team);

        $response->assertStatus(200);

        $this->assertDatabaseHas('ws_teams',$team);

    }
}
 