@extends('layouts.admin')

@section('content')
  <div class="container">
  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Topics     <a href="{{route('topics.create')}}" class="btn btn-xs btn-default pull-right float-right">Add +</a></div>
                <div class="panel panel-body">
                <table class="table table-striped">
                  <thead>
                      <th></th>
                      <th>Name</th>
                      <th>Chapters</th>
                      <th>Created At</th>
                      <th></th>
                      <th></th>

                      <th></th>
                  </thead>

                  @foreach($topics as $topic)
                    <tr>
                        <td></td>
                        <td>{{$topic->name}}</td>
                        <td>{{$topic->chapters->count()}}</td>
                        <td>{{$topic->created_at->diffForHumans()}}</td>
                        <td><a href="{{route('topics.destroy', ['id' =>$topic->id])}}" class="btn btn-xs btn-danger">Delete</a></td>
                        <td><a href="{{route('topics.update', ['id' =>$topic->id])}}" class="btn btn-xs btn-default">Edit</a></td>

                        <td><a href="{{route('chapters.create', ['id'=>$topic->id])}}" class="btn btn-xs btn-default">Add Chapter</a></td>


                    </tr>
                  @endforeach
                </table>
                {{$topics->links()}}
            </div>
            </div>
            
        </div>
  </div>
  </div>


  @endsection

