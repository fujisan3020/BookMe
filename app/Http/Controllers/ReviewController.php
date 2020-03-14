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
     $cond_statement = $request->cond_statement;
     if ($cond_statement != '') {
       $reviews = Review::whereHas('book', function($q) {
         $q->where('title', $cond_statement)->orwhere('author',$cond_statement);
       })->get();
     } else {
       $reviews = Review::all();
     }
     return view('review.home', ['reviews' => $reviews, 'cond_statement' => $cond_statement]);
   }

   //ジャンル別レビュー一覧表示
   public function business_economy() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', 'ビジネス・経済');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function society_politics() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', '社会・政治');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function investment_finance() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', '投資・金融');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function nature_environment() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', '自然・環境');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function history_geography() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', '歴史・地理');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function culture_thought() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', '文化・思想');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function education_selfdevelopment() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', '教育・自己啓発');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function science_technology() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', '科学・テクノロジー');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function travel() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', '旅行・紀行');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function sports_outdoor() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', 'スポーツ・アウトドア');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }

   public function other() {
     $reviews = Review::whereHas('book', function($q) {
       $q->where('genre', 'その他');
     })->get();
     return view('review.home', ['reviews' => $reviews]);
   }


   //レビューー内容の表示
   public function content(Request $request) {
     $review = Review::find($request->id);
     if (empty($review)) {
          abort(404);
     }
    return view('review.content', ['review' => $review]);
   }


  //レビュー作成画面表示
   public function add() {
     return view('review.create');
   }

   //レビュー入力内容確認
   public function confirm(Request $request) {
     $this->validate($request, Book::$rules);
     $this->validate($request, Review::$rules);
     // if (!null == $request->file('image')) {
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
     // if(!null == $request->file('image')) {
     //    $path = $request->file('image')->store('public/image');
     //    $book->image_path = basename($path);
     //  } else {
     //    $book->image_path = null;
     //  }
     unset($form['image']);
     unset($form['_token']);
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
