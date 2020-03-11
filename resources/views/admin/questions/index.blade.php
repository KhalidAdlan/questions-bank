@extends('layouts.admin')

@section('content')
  <div class="container">
  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All {{$chapter->name}} Questions     <a href="{{route('questions.create', ['id' => $chapter->id])}}" class="btn btn-xs btn-default pull-right float-right">Add +</a></div>
                <div class="panel panel-body">
                <table class="table table-striped">
                  <thead>
                      <th></th>
                      <th>Question</th>
                      <th>Answer</th>
                      <th>Option A</th>
                      <th>Option B</th>
                      <th>Option C</th>

                      <th>Created At</th>
                      <th></th>
                      <th></th>
                  </thead>

                  @foreach($chapter->questions as $question)
                    <tr>
                        <td></td>
                        <td>{{$question->question}}</td>
                        <td>{{$question->answer}}</td>
                        <td>{{$question->option_a}}</td>
                        <td>{{$question->option_b}}</td>
                        <td>{{$question->option_c}}</td>

                        <td>{{$question->created_at->diffForHumans()}}</td>
                        <td><a href="{{route('questions.update', ['id' => $question->id])}}" class="btn btn-xs btn-default">Edit</a></td>

                        <td><a href="{{route('questions.destroy', ['id' => $question->id])}}" class="btn btn-xs btn-danger">Delete</a></td>


                    </tr>
                  @endforeach
                </table>
            </div>
            </div>
            
        </div>
  </div>
  </div>


  @endsection

