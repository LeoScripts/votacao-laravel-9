<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'initial_date', 'end_date'];

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}
