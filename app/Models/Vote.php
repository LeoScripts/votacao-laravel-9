<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['id_question','id_answer'];

    public function answer()
    {
        return $this->belongsTo(Answer::class, 'id_answer', 'id');
    }
}
