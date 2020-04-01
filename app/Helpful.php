<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

class Helpful extends Model {

    protected $fillable = ['user_id', 'book_id'];

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function review() {
      return $this->belongsTo('App\Review');
    }
}
