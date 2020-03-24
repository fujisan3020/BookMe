<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

class Helpful extends Model {

    use CounterCache;

    // public $CounterCacheOptions = [
    //   'Review' => [
    //     'field' => 'like_count',
    //     'foreignKey' => 'book_id',
    //   ]
    // ];
    //
    // protected $fillable = ['user_id', 'book_id'];
}
