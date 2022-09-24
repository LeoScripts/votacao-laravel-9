<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class Survel extends Model
{
    use HasFactory;

    protected $table = 'survey';
    protected $fillable = [
        'name',
        'description',
        'initialTime',
        'endTime'
    ];

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}
