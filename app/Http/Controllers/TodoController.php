<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $data = DB::table('todos')->get();
        //dd($data);
        return view('pages.index',compact('data',$data));

    }
    public function create()
    {
        return view('pages.create');
    }
    public function store(Request $request)
    {
        $title = $request->title;
        $content = $request->content;
        $remake = $request->remake;
        DB::table('todos')->insert(['title'=>$title,'content'=>$content,'remake'=>$remake]);
        return view('pages.create');
    }
}
