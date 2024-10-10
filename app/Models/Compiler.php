<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compiler extends Model
{
    use HasFactory;

    protected $table = 'questions';

    public function questions()
    {
        return $this->hasMany(Question::class);
    } 

    public function answers()
    {
        return $this->hasMany(Answer::class);
    } 
}
