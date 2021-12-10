@extends('backend.layouts.index')


@section('content')
<div class="container mt-5 pt-5">
<table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">questions</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
      $sr = 1;
      @endphp
        @foreach ($questions as $question)
        <tr>
            <th scope="row">{{ $sr++ }}</th>
            <td>{{ $question->questions }}</td>
            <td>{{ $question->rate }}</td>
            <td><a href="{{ url('admin/vactionalHomeQuestion/' . $question->id) }}"> Questions Update </a>
            </td>
            
        </tr>
        @endforeach
    

    </tbody>
  </table>
</div>

@stop