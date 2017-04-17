<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\User;
use App\News;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;

class NewsController extends Controller
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
      return view('newsmanage');
  }
  /**
   * Process dataTable ajax response.
   *
   * @param \Yajra\Datatables\Datatables $datatables
   * @return \Illuminate\Http\JsonResponse
   */
  public function data(Datatables $datatables)
  {
    $news = News::select(['id', 'title', 'category', 'description']);

    return $datatables->eloquent(News::with('user')->select('news.*'))
                      ->addColumn('action', function($news){
                        return view('table.action', [
                          'edit_url' => $news->id,
                          'delete_url' => url('/home/news/delete', $news->id),
                          'title' => $news->title,
                          'category' => $news->category,
                          'description' => $news->description,
                        ]);
                        })->make(true);
  }

  public function show($id)
    {
        $news = News::find($id);
        return view('News')->with('News', $news);
    }

  public function store(Request $request) {
    $this->validate($request, [
          'title' => 'required',
          'category' => 'required',
          'description' => 'required',
          'userid' => 'required',
    ]);

         $news = new News();
         $news->title = $request['title'];
         $news->slug = Str::slug($request['title']);
         $news->category = $request['category'];
         $news->description = $request['description'];
         $news->userid = $request['userid'];
         $news->save();

    return redirect()->to('/home/News');
  }

  public function update(Request $request, $id) {
    $this->validate($request, [
          'title' => 'required',
          'category' => 'required',
          'description' => 'required',
          'userid' => 'required',
    ]);

         $newsupdate = News::where('id', $id)->first();
         $newsupdate->title = $request['title'];
         $newsupdate->slug = Str::slug($request['title']);
         $newsupdate->category = $request['category'];
         $newsupdate->description = $request['description'];
         $newsupdate->userid = $request['userid'];
         $newsupdate->update();

    return redirect()->to('/home/News');
  }

  public function destroy($id)
    {
        $newsdelete = News::find($id);
        $newsdelete->delete();

        return redirect()->to('/home/News');
    }
}
