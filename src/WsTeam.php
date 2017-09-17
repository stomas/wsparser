<?php

namespace Stomas\WSParser;

use Illuminate\Database\Eloquent\Model;

class WsTeam extends Model
{
    protected  $fillable = ['gamesCount', 'shotsPerGame', 'yellowCards', 'redCards', 'averagePossesions','passSuccess', 'aerialsWon', 'rating'];
}
