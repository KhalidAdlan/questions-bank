<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\SubTopic;
use App\Topic;

class QuestionController extends Controller
{


  public function index($id)
  {
    $chapter = SubTopic::find($id);
    $topics = Topic::all();

    return view('admin.questions.index', ['topics' => $topics, 'chapter' => $chapter]);
  }


  public function create($id)
  {
    $chapter = SubTopic::find($id);
    $topics = Topic::all();

    return view('admin.questions.create', ['topics' => $topics, 'chapter' => $chapter]);
    
  }

  public function update($id)
  {
    $question = Question::find($id);
    $topics = Topic::all();

    return view('admin.questions.edit', ['topics' => $topics, 'question' => $question]);
    
  }

  public function destroy($id)
  {
    Question::find($id)->delete();
    return redirect()->back();
  }

  public function edit(Request $request, $id)
  {
      Question::find($id)->update([
        'question'        =>  $request['question'],
        'option_a'        =>  $request['option_a'],
        'option_b'        =>  $request['option_b'],
        'option_c'        =>  $request['option_c'],
        'correct_answer'  =>  $request['correct_answer'],
        'sub_topic_id'    =>  $request['sub_topic_id']

      ]);


      $chapter = SubTopic::find($request['sub_topic_id']);
      $topics = Topic::all();

      return view('admin.questions.index', ['topics' => $topics, 'chapter' => $chapter]);

  }


      public function store(Request $request)
      {
          Question::create([
            'question'        =>  $request['question'],
            'option_a'        =>  $request['option_a'],
            'option_b'        =>  $request['option_b'],
            'option_c'        =>  $request['option_c'],
            'correct_answer'  =>  $request['correct_answer'],
            'sub_topic_id'    =>  $request['sub_topic_id']

          ]);


          $chapter = SubTopic::find($request['sub_topic_id']);
          $topics = Topic::all();

          return view('admin.questions.index', ['topics' => $topics, 'chapter' => $chapter]);

      }
}
