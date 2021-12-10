@extends('forntend.layouts.index')


@section('content')

<div class="flex flex-col px-8 pb-28 bg-white">
    <div class="mt-10 w-min"> <a href="{{url('/')}}" class="flex items-center"><svg
                class="w-6 h-6 text-white bg-purple-500 rounded-full" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <h1 class="text-purple-500 nexa_bold text-2xl ml-1">Back</h1>
        </a></div>

    <div class="mt-10">
        
          <form method="POST" action="{{ url('/bookedCall/store') }}">
            @csrf
                        <label>Booked a Call</label>
                       
                        <input type='date' min='<?=date('Y-m-d')?>' max='2022-01-01' name="date" required></input>
                        <input type='time' required name="time" required></input>

                        <input type="submit" value="Book a Call" class="px-2 py-3 bg-purple-600 rounded-md text-white cursor-pointer button_hover tooltip">
        </form>
    </div>




@stop