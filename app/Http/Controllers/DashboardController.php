<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class DashboardController extends Controller
{
    public function __construct(Question $question, Answer $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }
    public function index()
    {
        $questions = $this->question->all();
        return view('dashboard', compact('questions'));
    }
}
