<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class DashboardController extends Controller
{
    public function __construct(Question $question)
    {
        $this->question = $question;
    }
    public function index()
    {
        $data = $this->question->all();
        return view('dashboard', compact('data'));
    }
}
