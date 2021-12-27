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
        $remark = $request->remark;
        DB::table('todos')->insert(['title'=>$title,'content'=>$content,'remark'=>$remark]);
        return view('pages.create');
    }
    public function delete(Request $request)
    {
        $id = $request->get('id');
        DB::table('todos')
            ->where('id',$id)
            ->delete();
        return redirect()->route('index');
    }
    public function edit(Request $request)
    {
        $id = $request->get('id');
        $data = DB::table('todos')
            ->where('id',$id)
            ->first();
        return view('pages.edit',compact('data',$data));
    }
    public function store_edit(Request $request)
    {
        dd($request);
        $id=$request->get('id');
        $title = $request->get('title');
        $content = $request->get('content');
        $remark = $request->get('remark');
        DB::table('todos')->where('id',$id)
            ->update([
                'title'=>$title,'content'=>$content,'remark'=>$remark,
            ]);
        return redirect()->route('index');
    }
}
