<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['id_question','id_answer'];

    public function answer()
    {
        return $this->belongsToMany();
    }
}
