@extends('backend.layouts.index')


@section('content')



<div class="container mt-5 pt-5">
  {{-- <a href="{{ url('admin/exportInquery') }}"class="btn btn-primary" style="float:right">Export</a> --}}
<table class="table mt-5" id="example1">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Address</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
      $sr = 1;
      @endphp
        @foreach ($inquirys as $inquiry)
        <tr>
            <th scope="row">{{ $sr++ }}</th>
            <td>{{ $inquiry->user_address }}</td>
            <td>{{ $inquiry->user_rate }}</td>
            <td><a href="{{ url('admin/inqueryViewss/' . $inquiry->id) }}" class="btn btn-primary"> Inquiry View </a>
              <a href="{{ url('admin/inqueryDelete/' . $inquiry->id) }}" class="btn btn-primary"> Delete Inquiry</a>
            </td>
              
        </tr>
        @endforeach
    

    </tbody>
  </table>
</div>

@stop