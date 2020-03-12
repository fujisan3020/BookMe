<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Book;
use App\Review;

class ReviewController extends Controller {
  //投稿レビュー一覧表示
   public function index(Request $request) {
    $reviews = Review::all();
    return view('review.home', ['reviews' => $reviews]);
   }

   //ジャンル別レビュー一覧表示
   public function business_economy() {
     $reviews = Review::all();
     return view('review.search', ['reviews' => $reviews]);
   }

  //レビュー作成画面表示
   public function add() {
     return view('review.create');
   }

   //レビュー入力内容確認
   public function confirm(Request $request) {
     $this->validate($request, Book::$rules);
     $this->validate($request, Review::$rules);
     // if (!null == ($request->input('image'))) {
     //   $this->validate($request, Book::$image_rules);
     // }
     $form = $request->all();
     unset($form['_token']);  //_tokeの削除は必須
     return view('review.confirm', ['form' => $form]);
   }

   //レビュー作成・投稿
   public function create(Request $request) {
     $form = $request->all();
     $book = new Book;
     $review = new Review;
     // if(!null == ($form['image'])) {
     //    $path = $request->file('image')->store('public/image');
     //    $book->image_path = basename($path);
     //  } else {
     //    $book->image_path = null;
     //  }
     unset($form['image']);
     unset($form['_token']);
     $book->image_path = null;
     $book->title = $form['title'];
     $book->genre = $form['genre'];
     $book->author = $form['author'];
     $book->publisher = $form['publisher'];
     $book->save();

     $review->user_id = Auth::id(); //Auth::id():ログイン中のユーザーのID
     $review->book_id = $book->id;
     $review->review = $form['review'];
     $review->practice = $form['practice'];
     $review->save();
     return redirect('/');
   }
}
