<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;

class EmployeesController extends Controller
{
  public function index(Request $request, Builder $htmlBuilder)
  {
    if ($request->ajax()) {
      $employees = User::select(['id', 'name', 'username', 'position', 'role']);
      return Datatables::of($employees)->make(true);
    }
      $html = $htmlBuilder
      ->addColumn(['data' => 'name', 'name'=>'name', 'title'=>'Nama'])
      ->addColumn(['data' => 'username', 'username'=>'username', 'title'=>'Username'])
      ->addColumn(['data' => 'position', 'position'=>'position', 'title'=>'Role']);
      return view('employees')->with(compact('html'));
  }
}
