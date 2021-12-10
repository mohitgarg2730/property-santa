@extends('forntend.layouts.index')


@section('content')

<div class="flex flex-col px-8 w-full h-100 mt-12">

    <!-- main content-->
    <div class="flex w-full flex-col">
        <div class="w-full flex flex-col justify-center items-center">
            <div class="w-2/12 ">
                <a href="#">
                    <img class="" src="{{url('/public/images/app/lockoffer.png')}}" alt="">
                </a>
            </div>
            <p class="roboto-regular text-xl text-gray-800 w-1/2 mt-10">Congratulations on getting the best take home
                pay for
                your
                vacation home.
                You have made a great choice. For managing your home at a custom rate,
                we have several packages that you can streamline and build. The rates
                fluctuate everyday and every hour. So, we recommend locking your rate
                today and get the peace of mind. You can start to use our services
                after your rate lock within 30 business days.</p>



            <a
                class="button_hover roboto-bold text-sm shadow-lg bg-purple-600 text-white py-4 w-64 rounded-md flex items-center justify-center mt-12" href="{{url('hellosign')}}">Lock
                the current offers</a>




        </div>
        <div class="flex flex-col justify-start my-10">
            <h1 class="nexa_bold text-lg text-gray-600">If you are not satisfied with our<br>
                rates then schedule a call now.</h1>
            <button
                class="button_hover nexa_bold text-md shadow-lg bg-black text-white py-4 w-64 rounded-md text-center">(+1)
                000-000-1215</button>
        </div>
    </div>
    <!--main content end-->
</div>
@stop