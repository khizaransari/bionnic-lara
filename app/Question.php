<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // Mass assignment
    protected $fillable = [
        'title',
        'body'
    ] ;
    
    public function FunctionName()
    {
        return $this->belongTo(User::class);
    }
}
