<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersAnswers extends Model
{
    use HasFactory;

    protected $table = 'users_answer';

    protected $guarded = [];

    public function answer()
    {
        return $this->belongsTo(Answers::class);
    }

}
