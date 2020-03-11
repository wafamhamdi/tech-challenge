<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChallengeCode extends Model
{
    protected $fillable = [
        'code',
        'participant_id',
        'challenge_id',
        'winner'
       ];
}
