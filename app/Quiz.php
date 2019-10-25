<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Quiz extends Model
{
    /**
     * Quiz table name
     *
     * @var string
     */
    protected $table = 'quizzes';
    /**
     * Get the author that writes the quiz.
     */
    public function user()
    {
        // https://laravel.com/docs/5.8/eloquent-relationships#one-to-one
        return $this->belongsTo('App\User', 'app_users_id');
    }
    /**
     * Get quiz's questions
     */
    public function questions()
    {
        return $this->hasMany('App\\Question', 'quizzes_id');
    }
    /**
     * Get quiz's tags
     */
    public function tags()
    {
        return $this->belongsToMany(
            'App\\Tag',
            'quizzes_has_tags',
            'quizzes_id',
            'tags_id'
        );
    }
}
