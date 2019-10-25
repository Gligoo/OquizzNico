<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Tag extends Model
{
    /**
     * Get tag quizzes
     */
    public function quizzes()
    {
        return $this->belongsToMany('App\\Quiz', 'quizzes_has_tags', 'tags_id', 'quizzes_id');
    }
}
