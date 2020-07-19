<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    // Mass assignment
    protected $fillable = [
        'title',
        'body',
        // 'views'
    ] ;
    
    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] =  $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
