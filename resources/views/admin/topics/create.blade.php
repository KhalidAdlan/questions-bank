@extends('layouts.admin')

@section('content')
  <div class="container">
  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Topic</div>
                <div class="panel-body">
                    <form method="POST" action="{{route('topics.store')}}">
                      {{ @csrf_field() }}

                        <label for="name">Topic Name</label>
                        <input class="form-control" type="text" required name="name" id="name">
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

