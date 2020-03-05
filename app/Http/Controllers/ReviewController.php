<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller {
   public function index() {
     return view('review.home');
   }


   public function create_add() {
     return view('review.create');
   }

   public function create() {
     $this->validate($request, Book::$reles);
     $this->validate($request, Reviews::$reles);
     

     return redirect('review/confirm');
   }

   public function confirm_add() {
     return view('review.confirm');
   }


}
