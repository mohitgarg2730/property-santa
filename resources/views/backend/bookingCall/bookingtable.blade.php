@extends('backend.layouts.index')


@section('content')
<div class="container mt-5 pt-5">
<table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Call Shedule</th>
      
      </tr>
    </thead>
    <tbody>
      @php 
      $sr = 1;
      @endphp
        @foreach ($bookingCalls as $bookingCall)
        <tr>
            <th scope="row">{{ $sr++ }}</th>
            <td>{{ $bookingCall->date_time }}</td>
 
            
        </tr>
        @endforeach
    

    </tbody>
  </table>
</div>

@stop