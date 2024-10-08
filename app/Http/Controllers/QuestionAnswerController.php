<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    public function __construct(QuestionAnswer $questionAnswer)
    {
        $this->model =  $questionAnswer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votes = $this->model->all();
        dd($votes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkUserVote = $this->model->where('user_id', auth()->user()->id)->get();
        // dd($userDb);

        foreach($checkUserVote as $userVotes){
            if($userVotes->question_id  == $request->question_id && $userVotes->user_id == $request->user_id) {
                return  'Voce ja votou nesta enquete';
            }
        }

        $this->model->create($request->only('question_id', 'answer_id', 'user_id'));
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionAnswer  $questionAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionAnswer $questionAnswer)
    {
        //
    }
}
