@extends('layouts.admin')

@section('content')
  <div class="container">
  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All {{$topic->name}} Chapters     <a href="{{route('chapters.create', ['id' => $topic->id])}}" class="btn btn-xs btn-default pull-right float-right">Add +</a></div>
                <div class="panel panel-body">
                <table class="table table-striped">
                  <thead>
                      <th></th>
                      <th>Name</th>
                      <th>Questions</th>
                      <th>Created At</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                  </thead>

                  @foreach($topic->chapters as $chapter)
                    <tr>
                        <td></td>
                        <td>{{$chapter->name}}</td>
                        <td>{{$chapter->questions->count()}}</td>
                        <td>{{$chapter->created_at->diffForHumans()}}</td>
                        <td><a href="{{route('chapters.destroy', ['id' =>$chapter->id])}}" class="btn btn-xs btn-danger">Delete</a></td>
                        <td><a href="{{route('chapters.update', ['id' =>$chapter->id])}}" class="btn btn-xs btn-default">Edit</a></td>

                        <td><a href="{{route('questions.create', ['id'=>$chapter->id])}}" class="btn btn-xs btn-default">Add Question</a></td>
                        <td><a href="{{route('questions', ['id'=>$chapter->id])}}" class="btn btn-xs btn-default">View Questions</a></td>


                    </tr>
                  @endforeach
                </table>
            </div>
            </div>
            
        </div>
  </div>
  </div>


  @endsection

