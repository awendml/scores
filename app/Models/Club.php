<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'city',
        'matches',
        'wins',
        'draws',
        'losses',
        'goals_for',
        'goals_against',
        'points',
    ];

    public function matches()
        {
            return $this->hasMany(Matchs::class, 'club1_id')->orWhere('club2_id', $this->id);
        }


    
}
