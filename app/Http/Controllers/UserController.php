<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Toast;

use Illuminate\Support\Str;

use App\User;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('usermanage')->with('users', $users);
  }

  public function changerole()
  {
    $id = Input::get('id');
    $newposition = Input::get('newposition');
    if ($newposition == 'Hrd') $newposition = Str::upper($newposition);
    $newrole = Str::lower($newposition);
    $roles = User::where('id', $id)->first();
    $roles->change($newrole, $newposition);
    Toast::success('Change Role Success!');

    return redirect()->to('/home/users');
  }
}
