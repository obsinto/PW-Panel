<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Territories extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pwp_territories';

    protected $fillable = ['id', 'level', 'owner', 'owner_name', 'occupy_time', 'challenger', 'challenger_name', 'deposit', 'cutoff_time', 'battle_time', 'bonus_time', 'color', 'status', 'timeout', 'max_bonus', 'challenge_time', 'challenger_details'];
}
