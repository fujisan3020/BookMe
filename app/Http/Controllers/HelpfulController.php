<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Helpful;
use Auth;
use App\Review;

class HelpfulController extends Controller {
  public function create(Request $request) {
    $helpful = new Helpful;
    $helpful->user_id = Auth::id();
    $helpful->review_id = $request->id;
    $helpful->save();
    dump($helpful);
    $helpful = Helpful::where('user_id', Auth::id())->where('review_id', $request->id)->first();
    return redirect('/content')->with('helpful', $helpful);
  }

  public function delete(Request $request) {
    $helpful = Helpful::where('user_id', Auth::id())->where('review_id', $request->id)->first();
    $helpful->delete();
    return redirect('/content');
  }

}
