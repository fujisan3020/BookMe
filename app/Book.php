<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    protected $guarded = array('id');

    public static $rules = array([
      'title' => ['required', 'string', 'max:255'],
      'genre' => ['required', 'string'],
      'author' => ['required', 'string' 'max:255'],
      'publisher' => ['required', 'string', 'max:255'],
      'image_path' => ['file', 'image'],
    ]);
}
