<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class challengeComment extends Model
{
    protected $fillable = [
        'challenge_id',
        'participant_id',
        'content',
        'postedDate'
       ];
}
