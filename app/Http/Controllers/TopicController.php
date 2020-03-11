<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    
    public function index()
    {
        $topics = Topic::paginate(10);
        return view('admin.topics.index',['topics' => $topics]);
    }


    public function create()
    {
        $topics = Topic::all();

        return view('admin.topics.create', ['topics' => $topics]);
    }

    public function update($id)
    {
        $topics = Topic::all();
        $topic = Topic::find($id);

        return view('admin.topics.edit', [ 'topic' => $topic, 'topics' => $topics]);
    }


    public function edit(Request $request, $id)
    {
        
        Topic::find($id)->update([
          'name'  =>  $request['name']
        
        ]);

        $topics = Topic::paginate(10);
        return view('admin.topics.index',['topics' => $topics]);    
    }


    public function destroy($id)
  {
    Topic::find($id)->delete();
    return redirect()->back();
  }




    public function store(Request $request)
    {
        Topic::create([
          'name'  =>  $request['name']
        
        ]);

        $topics = Topic::paginate(10);
        return view('admin.topics.index',['topics' => $topics]);    }
}
