<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Vote;


class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'answer',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function vote()
    {
        return $this->belongsToMany(Vote::class);
    }
}
