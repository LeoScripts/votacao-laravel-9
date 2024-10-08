<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;


class QuestionAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'answer_id', 'user_id'];

    public function answer()
    {
        return $this->belongsToMany(Answer::class);
    }
}
