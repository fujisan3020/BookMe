<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

class Helpful extends Model {

    use CounterCache;

    public $CounterCacheOptions = [
      'Review' => [
        'field' => 'helpfuls_count',
        'foreignKey' => 'review_id',
      ]
    ];

    protected $fillable = ['user_id', 'book_id'];


    public function user() {
      return $this->belongsTo('App\User');
    }

    public function review() {
      return $this->belongsTo('App\Review');
    }
}
