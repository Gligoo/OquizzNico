<?php
namespace App\Http\Controllers;
use App\Quiz;
use App\Utils\UserSession;
use Illuminate\Http\Request;
class QuizController extends Controller
{
    /**
     * Quiz page
     *
     * @param int $id Quiz id
     *
     * @return \Illuminate\View\View
     */
    public function quizAction($id)
    {
        $quiz = Quiz::find($id);
        $view = 'quiz.single';
        if (UserSession::isConnected()) {
            $view = 'quiz.single_form';
        }
        return view($view, [
            'quiz' => $quiz
        ]);
    }
    /**
     * Quiz form submit
     */
    public function quizPostAction($id, Request $request)
    {
        if (UserSession::isConnected()) {
            $quiz = Quiz::find($id);
            $score = 0;
            $submittedAnswerIdList = $request->input('answers');
            foreach ($quiz->questions as $question) {
                if (isset($submittedAnswerIdList[$question->id])) {
                    $submittedAnswerId = $submittedAnswerIdList[$question->id];
                    if ($question->isGoodAnswer($submittedAnswerId)) {
                        $score += 1;
                    }
                }
            }
            $response = response(
                view('quiz.score', [
                    'quiz'    => $quiz,
                    'score'   => $score,
                    'submittedAnswerIdList' => $submittedAnswerIdList
                ])
            );
        } else {
            $response = redirect()->route('quiz', [
                'id' => $id
            ]);
        }
        return $response;
    }
}
