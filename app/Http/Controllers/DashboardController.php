<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Vote;
use App\Models\Answer;

class DashboardController extends Controller
{
    public function __construct(Question $question, Vote $vote, Answer $answer)
    {
        $this->question = $question;
        $this->vote = $vote;
        $this->answer = $answer;
    }
    public function index()
    {
        $questions = $this->question->all();
        $votes = $this->vote->all();
        return view('dashboard', compact('questions','votes'));
    }
}
