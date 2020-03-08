<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Book;
use App\Review;

class ReviewController extends Controller {
   public function index() {
     return view('review.home');
   }


   public function add() {
     return view('review.create');
   }

   public function confirm(Request $request) {
     $this->validate($request, Book::$rules);
     $this->validate($request, Review::$rules);
     $form = $request->all();
     unset($form['_token']);
     return view('review.confirm', ['form' => $form]);
   }


   public function create(Request $request) {
     $form = $request->all();
     $book = new Book;
     $review = new Review;
     unset($form['image']);
     unset($form['_token']);
     $book->image_path = null;
     $book->title = $form['title'];
     $book->genre = $form['genre'];
     $book->author = $form['author'];
     $book->publisher = $form['publisher'];
     // $book->igame_path = $form['image'];
     $book->save();

     $review->user_id = Auth::id();
     $review->book_id = $book->id;
     $review->review = $form['review'];
     $review->practice = $form['practice'];
     $review->save();
     return redirect('/');
   }
}
