<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = ['titulo', 'descricao', 'foto', 'latitude', 'longitude', 'user_id'];
}
//
