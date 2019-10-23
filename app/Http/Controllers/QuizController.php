<?php

namespace App\Http\Controllers;

use App\Question;
use App\Quiz;

class QuizController extends Controller
{
    /**
     * Quiz page
     * @param int $id Quiz id
     */
    public function quizAction($id)
    {
        $quiz = Quiz::find($id); // ici je cherche un quiz par rapport à son id

        // dump($quiz->user);

        /**
         * $questionList = Question::where('quizzes_id', $id)
         * ->get()
         *  ;
         *  dump($questionList);
         */



    }
}
