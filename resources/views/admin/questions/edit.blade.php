@extends('layouts.admin')

@section('content')
  <div class="container">
  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit '{{$question->question}}'</div>
                <div class="panel-body">
                    <form method="POST" action="{{route('questions.edit', ['id' => $question->id])}}">
                      {{ @csrf_field() }}
                        <input required hidden name="sub_topic_id" value="{{$question->sub_topic_id}}">
                        <label for="question">Question</label>
                        <input value="{{$question->question}}" required class="form-control" type="text" required name="question" id="question">
                        </input>

                        <label for="correct_answer">Correct Answer</label>
                        <input value="{{$question->correct_answer}}" required class="form-control" type="text" required name="correct_answer"  id="correct_answer" >
                        </input>


                        <label for="option_a">Option A</label>
                        <input value="{{$question->option_a}}" required class="form-control" type="text" required name="option_a" id="option_a">
                        </input>

                        <label for="option_b">Option B</label>
                        <input value="{{$question->option_b}}" class="form-control" type="text" required name="option_b" id="option_b">
                        </input>

                        <label for="option_c">Option C</label>
                        <input value="{{$question->option_c}}" class="form-control" type="text" required name="option_c" id="option_c">
                        </input>
                         <br>
                        <input type="submit" value="Save Changes" class="btn btn-default">
                    </form>
                </div>
            </div>
        </div>
  </div>
  </div>


  @endsection

