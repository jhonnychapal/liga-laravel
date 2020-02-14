<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    protected $fillable = ['nomJugador', 'apeJugador', 'club', 'posicion', 'pais', 'foto'];
}
