@extends('layouts.admin')

@section('content')
  <div class="container">
  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{$chapter->name}}</div>
                <div class="panel-body">
                    <form method="POST" action="{{route('chapters.update', ['id' => $chapter->id])}}">
                      {{ @csrf_field() }}
                        <input hidden name="topic_id" value="{{$chapter->topic_id}}">
                        <label for="name">Chapter Name</label>
                        <input value="{{$chapter->name}}" class="form-control" type="text" required name="name" id="name">
                        </input>
                         <br>
                        <input type="submit" value="Save" class="btn btn-default">
                    </form>
                </div>
            </div>
        </div>
  </div>
  </div>


  @endsection

