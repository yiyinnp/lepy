<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $with = [
        'user', 'compiler'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function compiler()
    {
        return $this->belongsTo(Compiler::class);
    }
    
}
