<?php

namespace App;

use App\Topic;
use Illuminate\Database\Eloquent\Model;

class SubTopic extends Model
{
    protected $fillable = [
        'name',
        'topic_id'
    ];


    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }


    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
