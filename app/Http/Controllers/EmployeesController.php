<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Position;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;

class EmployeesController extends Controller
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

  public function index() {
      return view('employees');
  }
  /**
   * Process dataTable ajax response.
   *
   * @param \Yajra\Datatables\Datatables $datatables
   * @return \Illuminate\Http\JsonResponse
   */
  public function data(Datatables $datatables)
  {
      return $datatables->eloquent(User::with('position')->select('users.*'))
                        ->addColumn('action', 'table.action')
                        ->make(true);
  }
}
