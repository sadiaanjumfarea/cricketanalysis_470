<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizQuestion; 

class QuizController extends Controller
{
    public function showQuiz()
    {
        $questions = QuizQuestion::all();
        return view('quiz', compact('questions'));
    }

    public function submitQuiz(Request $request)
    {
        $answers = $request->input('answers');
        $score = 0;

        foreach ($answers as $questionId => $answer) {
            $question = QuizQuestion::find($questionId);
            if ($question && $question->answer === $answer) {
                $score++; // Increment score if answer is correct
            }
        }

        // You can store the score in session or any other storage mechanism if needed
        session()->put('quiz_score', $score);

        return redirect()->route('quiz.result');
    }
}