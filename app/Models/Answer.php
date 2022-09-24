<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Survey;


class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'answer',
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
