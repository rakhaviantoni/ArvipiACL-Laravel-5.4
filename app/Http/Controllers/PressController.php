<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Carbon\Carbon;

use App\User;
use App\Press;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;

class PressController extends Controller
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

  public function welcome() {
    $press = Press::all();
      return view('welcome', ['press' => $press]);
  }

  public function index() {
      return view('press');
  }
  /**
   * Process dataTable ajax response.
   *
   * @param \Yajra\Datatables\Datatables $datatables
   * @return \Illuminate\Http\JsonResponse
   */
  public function data(Datatables $datatables)
  {
    $press = Press::select(['id', 'title', 'category', 'description']);

    return $datatables->eloquent(Press::with('user')->select('press.*'))
                      ->addColumn('action', function($press){
                        return view('table.action', [
                          'edit_url' => $press->id,
                          'delete_url' => url('/home/press/delete', $press->id),
                          'title' => $press->title,
                          'category' => $press->category,
                          'description' => $press->description,
                        ]);
                        })->make(true);
  }

  public function show($id)
    {
        $press = Press::find($id);
        return view('press')->with('press', $press);
    }

  public function store(Request $request) {
    $this->validate($request, [
          'title' => 'required',
          'category' => 'required',
          'description' => 'required',
          'userid' => 'required',
    ]);

         $press = new Press();
         $press->title = $request['title'];
         $press->slug = Str::slug($request['title']);
         $press->category = $request['category'];
         $press->description = $request['description'];
         $press->userid = $request['userid'];
         $press->save();

    return redirect()->to('/home/press');
  }

  public function update(Request $request, $id) {
    $this->validate($request, [
          'title' => 'required',
          'category' => 'required',
          'description' => 'required',
          'userid' => 'required',
    ]);

         $pressupdate = Press::where('id', $id)->first();
         $pressupdate->title = $request['title'];
         $pressupdate->slug = Str::slug($request['title']);
         $pressupdate->category = $request['category'];
         $pressupdate->description = $request['description'];
         $pressupdate->userid = $request['userid'];
         $pressupdate->update();

    return redirect()->to('/home/press');
  }

  public function destroy($id)
    {
        $pressdelete = Press::find($id);
        $pressdelete->delete();

        return redirect()->to('/home/press');
    }
}
