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

    // public function helpful() {
    //   return $this->belongsTo('App\Helpful');
    // }
    //
    //
    // public function like_by() {
    //   return Helpful::where('user_id', Auth::id())->first();
    // }


}
