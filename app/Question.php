<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question',
        'sub_topic_id',
        'option_a',
        'option_b',
        'option_c',
        'correct_answer'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
