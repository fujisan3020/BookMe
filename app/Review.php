<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Helpful;

class Review extends Model {
    protected $guarded = array('id');

    public static $rules = array(
      'review' => ['required', 'string', 'max:255'],
      'practice' => ['required', 'string', 'max:255'],
    );

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function book() {
      return $this->belongsTo('App\Book');
    }

    public function helpfuls() {
      return $this->hasMany('App\Helpful');
    }


    public function helpful_by() {
      return Helpful::where('user_id', Auth::id())->first();
    }


}
