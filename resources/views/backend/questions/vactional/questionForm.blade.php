@extends('backend.layouts.index')


@section('content')
    <div class="container mt-5">
        <form method="POST" action="{{ url('admin/vactionalHomeQuestionUpdate/') }}/{{ $question->id }}">
            @csrf
          <div class="row">

                <div class="mb-6 col-sm-6">
                    <label for="exampleInputtext1" class="form-label">Questions :  </label>
                    <input type="text" class="form-control" name="question" value="{{ $question->questions }}"  id="exampleInputtext1" aria-describedby="textHelp">
                </div>
                <div class=" col-sm-6 mb-6">
                    <label for="exampleInputtext1" class="form-label">Rate </label>
                    <input type="text"  name="rate" class="form-control" value="{{ $question->rate }}"  id="exampleInputtext1">
                </div>
                <div class=" col-sm-6 mb-6">
                    <label for="exampleInputtext1" class="form-label">Tittle </label>
                    <input type="text"  name="tittle" class="form-control" value="{{ $question->tittle }}"  id="exampleInputtext1">
                </div>
                <div class=" col-sm-6 mb-6">
              
                    <div class="form-group">
                        <label for="comment">Description:</label>
                         <textarea class="form-control" rows="5" name="des">{{ $question->description }}</textarea>
                    </div>
                </div>
            </div>
  
      
            <input type="submit" value="submit">
              </form>  


    </div>
@stop
