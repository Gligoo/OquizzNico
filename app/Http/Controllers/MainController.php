<?php

namespace App\Http\Controllers;


use App\Quiz;

class MainController extends Controller
{
    /**
     * HomePage route
     */
    public function homeAction() // les paramètres d'url sont envoyés automatiquement à la méthode de controller si on reprend le mm nom
    {
        $quizList = Quiz::all();  /** je récupère tous les quizzs */

        // foreach ($quizList as $quiz) {
        // dump($quiz->user->firstname);
        // }

        // dump($quizList);
        // exit;

        return view ('home', [
            'quizList' => $quizList
        ]);
    }
}
