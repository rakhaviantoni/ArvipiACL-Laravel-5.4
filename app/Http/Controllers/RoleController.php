<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Toast;

use Illuminate\Support\Str;

use App\User;
use App\Position;

class RoleController extends Controller
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
    $roles = Position::all();
    return view('rolemanage', ['users' => $users, 'roles' => $roles]);
  }

  // public function changepermission()
  // {
  //   $id = Input::get('id');
  //   $press = Input::get('press');
  //   $users = Input::get('users');
  //   $news = Input::get('news');
  //   $payroll = Input::get('payroll');
  //   $employees = Input::get('employees');
  //   $recruitment = Input::get('recruitment');
  //   $marketing = Input::get('marketing');
  //   $sales = Input::get('sales');
  //   $roles = Position::findOrFail($id);
  //   $roles->change($press,$users,$news,$payroll,$employees,$recruitment,$marketing,$sales);
  //   Toast::success('Change Role Permission Success!');
  //
  //   return redirect()->to('/home/role');
  // }

  public function changepress(){
    $id = Input::get('id');
    $roles = Position::findOrFail($id);
    $roles->changepress();
    Toast::success('Change Role Permission Success!');
    return redirect()->to('/home/role');
  }

  public function changeusers(){
    $id = Input::get('id');
    $roles = Position::findOrFail($id);
    $roles->changeusers();
    Toast::success('Change Role Permission Success!');
    return redirect()->to('/home/role');
  }

  public function changenews(){
    $id = Input::get('id');
    $roles = Position::findOrFail($id);
    $roles->changenews();
    Toast::success('Change Role Permission Success!');
    return redirect()->to('/home/role');
  }

  public function changepayroll(){
    $id = Input::get('id');
    $roles = Position::findOrFail($id);
    $roles->changepayroll();
    Toast::success('Change Role Permission Success!');
    return redirect()->to('/home/role');
  }

  public function changeemployees(){
    $id = Input::get('id');
    $roles = Position::findOrFail($id);
    $roles->changeemployees();
    Toast::success('Change Role Permission Success!');
    return redirect()->to('/home/role');
  }

  public function changerecruitment(){
    $id = Input::get('id');
    $roles = Position::findOrFail($id);
    $roles->changerecruitment();
    Toast::success('Change Role Permission Success!');
    return redirect()->to('/home/role');
  }

  public function changemarketing(){
    $id = Input::get('id');
    $roles = Position::findOrFail($id);
    $roles->changemarketing();
    Toast::success('Change Role Permission Success!');
    return redirect()->to('/home/role');
  }

  public function changesales(){
    $id = Input::get('id');
    $roles = Position::findOrFail($id);
    $roles->changesales();
    Toast::success('Change Role Permission Success!');
    return redirect()->to('/home/role');
  }

}
