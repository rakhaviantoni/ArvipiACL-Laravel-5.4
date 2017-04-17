<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Toast;

use Illuminate\Support\Str;

use App\User;
use App\Position;

class UserController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $users = User::all();
    // $position = Position::all();
    return view('usermanage')->with('users', $users);
  }

  public function changerole()
  {
    $id = Input::get('id');
    $newposition = Input::get('newposition');
    $roles = User::where('id', $id)->first();
    $roles->change($newposition);
    Toast::success('Change Role Success!');

    return redirect()->to('/home/users');
  }
}
