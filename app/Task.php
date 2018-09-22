<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //this is called a query selector
    // public static function incomplete()
    // {
    //     return static::where('compleated', 0)->get();
    // }

    //but we can't chain them further
    //query scopes are better for that

    public function scopeIncomplete($query) // Task::incomplete
    //since we prefixed it with a scope laravel know to treat this
    //like a query scope
    {
        return $query->where('compleated', 0);
    }
    //this returns an instance of the eloquent which we can use to chain further
}
