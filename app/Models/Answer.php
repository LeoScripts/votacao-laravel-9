<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Survel;


class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'answer',
    ];

    public function survey()
    {
        return $this->belongsTo(Survel::class);
    }
}
