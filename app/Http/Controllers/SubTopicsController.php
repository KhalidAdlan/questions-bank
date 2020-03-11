<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\SubTopic;

class SubTopicsController extends Controller
{
    

    public function index($id)
    {
        $topic = Topic::find($id);
        $topics = Topic::all();

        return view('admin.chapters.index', ['topic' => $topic, 'topics' => $topics]);
    }

    public function create($id)
    {
        $topic = Topic::find($id);
        $topics = Topic::all();

        return view('admin.chapters.create', ['topic' => $topic,  'topics' => $topics]);
    }

    public function edit(Request $request, $id)
    {
    
        $topics = Topic::all();

        SubTopic::find($id)->update([
            'name'     => $request['name'],
        ]);
        
        $topic = Topic::find($request['topic_id']);

        return view('admin.chapters.index', [ 'topic' => $topic, 'topics' => $topics]);
   
    
    }

    public function destroy($id)
  {
    SubTopic::find($id)->delete();
    return redirect()->back();
  }



    public  function update( $id)
    {

        $chapter = SubTopic::find($id);
        $topics = Topic::all();

        return view('admin.chapters.edit', ['chapter' => $chapter,  'topics' => $topics]);
  

        }


    public function store(Request $request)
    {
        $topics = Topic::all();

        SubTopic::create([
            'name'     => $request['name'],
            'topic_id' => $request['topic_id']
        ]);
        
        $topic = Topic::find($request['topic_id']);

        return view('admin.chapters.index', [ 'topic' => $topic, 'topics' => $topics]);

    }



}
