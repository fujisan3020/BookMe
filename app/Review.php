<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {
    protected $guarded = array('id');

    public static $rules = array(
      'review' => ['required', 'string', 'max:255'],
      'practice' => ['required', 'string', 'max:255'],
    );
}
