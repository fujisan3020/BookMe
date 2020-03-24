<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller {

    public function show() {
      $user = Auth::user();
      return view('auth.edit', ['user' => $user]);
    }

    public function update(Request $request) {
      $this->validate($request, User::$rules);
      $user = Auth::user();
      $user_form = $request->all();
      $user_form['password'] = Hash::make($user_form['password']);
      unset($user_form['_token']);
      $user->fill($user_form)->save();
      return redirect('/myreview');
    }

    public function delete() {
      Auth::user()->delete();
      return redirect('/login');
    }


    public function logout() {
      Auth::logout();
      return redirect('/login');
    }
}
