<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helpful;
use Auth;
use App\Review;

class HelpfulController extends Controller {
  // public function store(Request $request, $BookId) {
  //   Helpful::create(
  //     array(
  //       'user_id' => Auth::id(),
  //       'book_id' => $BookId,
  //     )
  //   );
  //
  //   $book = Review::findOrFail($BookId);
  //   return redirect()->action('ReviewController@show', $book->id);
  // }
  //
  // public function destroy($reviewId, $helpfulId) {
  //   $book = Review::findOrFail($BookId);
  //   $book->like_by()->findOrFail($helpfulId)->delete();
  //   return redirect()->action('HelpfulController@show', $book->id);
  // }

}
