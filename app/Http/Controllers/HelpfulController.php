<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helpful;
use Auth;
use App\Review;

class HelpfulController extends Controller {
  public function store(Request $request, $reviewId) {
    Helpful::create(
      array(
        'user_id' => Auth::id(),
        'review_id' => $reviewId,
      )
    );

    $review = Review::findOrFail($reviewId);
    return redirect()->action('ReviewController@content', $review->id);
  }

  public function destroy($reviewId, $helpfulId) {
    $review = Review::findOrFail($reviewId);
    $review->like_by()->findOrFail($helpfulId)->delete();
    return redirect()->action('ReviewController@content', $review->id);
  }

}
