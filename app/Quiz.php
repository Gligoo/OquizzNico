<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * Quiz table name
     * @var string
     */
    protected $table = 'quizzes';



    /**
     * get  the authors that writes quizzes
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'app_users_id'); /** nom dans la base de donnée (user) */
                                                            /** il faut lui spécifier la clé étrangère à la main */
    }
};
