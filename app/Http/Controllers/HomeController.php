<?php

namespace App\Http\Controllers;

use App\Models\M_book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'book_list' => M_book::getAll()
        ];
        return view('home', $data);
    }

    public function list_book()
    {
        $list_book = M_book::getAll();
        $users = json_decode($list_book);
        return response()->json($users);
    }

    public function add_book(Request $request)
    {
        // dd(request()->all());
        $data = new M_book();
        $data->book_title = $request->get('title_give');
        $data->book_author = $request->get('author_give');
        $data->status = $request->get('status');
        $data->save();
        return response()->json();

        // Book::where('id', $id)->update(array(‘status’ => 1));

        // ---------- //


    }

    public function update_book()
    {
        DB::table('book')
            ->where('id_book', request()->get('num_give'))
            ->update(['status' => request()->get('status')]);
        return response()->json();
    }

    public function delete_book()
    {
        $model = M_book::find(request()->get('num_give'));
        $model->delete();
        return response()->json();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
