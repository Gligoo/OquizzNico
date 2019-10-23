<?php

namespace App\Http\Controllers;

use App\Quiz;

class MainController extends Controller
{
    /**
     * HomePage route
     */
    public function homeAction()
    {
        $quizlist = Quiz::all();  /** je récupère tous les quizzs */

        return view ('home', [
            'quizList' => $quizlist
        ]);
    }
}