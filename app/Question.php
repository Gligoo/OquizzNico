<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Question extends Model
{
    public function answers()
    {
        return $this->hasMany('App\\Answer', 'questions_id');
    }
    public function level()
    {
        return $this->belongsTo('App\\Level', 'levels_id');
    }
    public function goodAnswer()
    {
        return $this->belongsTo('App\\Answer', 'answers_id');
    }
    /**
     * Test if the answer is correct
     *
     * @param int $answerId The answer id to test
     *
     * @return bool
     */
    public function isGoodAnswer(?int $answerId)
    {
        return $this->goodAnswer->id === $answerId;
    }
}
