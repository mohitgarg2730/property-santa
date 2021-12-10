@extends('forntend.layouts.index')


@section('content')
<div class="flex w-100 mx-16 my-8 mt-20">
    <div class="w-1/2 py-8">
        <h4 class="text-black roboto-medium text-xl">Better Homes</h4>
        <h1 class="text-purple-600 playfair-bold text-5xl py-3">Zero Hassle.</h1>
        <p class="text-black text-base mt-6 roboto-regular">We’ve  Streamlined the Property rental , Furnished rental and Vacation home  process to
            eliminate
            hidden fees, unnecessary steps, and
            time-consuming appointments. Our efficient process not only makes it easier to rent a home, but it
            also provides a transparent rate that is the best in the industry.</p>
        <a class="button_hover homebtn mt-8" href="{{ url('customRate') }}">See
            today's rates
        </a>
    </div>
    <div class="w-1/2 flex justify-center items-center py-8">
        <video autoplay muted loop>
            <source src="{{url('public/video/pngwing.com_1.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<div class="relative -left-4 mt-12">
    <img class="w-20 h-20" src="{{url('public/images/app/circle.png')}}" alt="">
</div>
<div class="flex w-100 sentaSection">
    <div class="px-16 py-28 flex justify-center">
        <div class="w-1/2">
            <h4 class="text-white roboto-medium text-xl">Property Santa</h4>
            <h1 class="text-white playfair-bold text-5xl py-3">Built Your Own Custom Package.</h1>
            <p class="text-white text-base mt-6 roboto-regular">With the latest in technology and with our numbers crunched to make you the winner we are offering a custom Property Management platform with rates suitable for everyone. We are changing the industry and taking accountability with 100% transparency in our services.Try our custom packages with rates as Low as 2%, we sure are here for you should you need to talk with one our specialist during the process.</p>
            <a class="bt_white homebtnwhite mt-8" href="{{url('customRate');}}">Build
                your
                package</a>
        </div>
        <div class="w-1/2 flex justify-center items-center">
            <video autoplay muted loop>
                <source src="{{url('public/video/second section.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
<div class="relative flex justify-end mt-6">
    <img class="w-20 h-20" src="{{url('public/images/app/Group 39919.png')}}" alt="">
</div>
{{-- <div class="flex w-100">
    <div class="px-16 flex justify-center">
        <div class="w-1/2 py-12">
            <h1 class="text-purple-600 playfair-bold text-5xl py-3">Become a Freelance
                Property manager with us.</h1>
            <p class="text-black text-base mt-6 roboto-regular">We are looking for enthusiastic and self-motivated
                property managers
                to work with us. To be eligible to be a property manager with Property Santa,
                please submit your details and we will reach out. If selected, you get to
                travel for an all-expense paid training session for up to a week.
                After training, our system will find you gigs as our Property Manager at
                an attractive starting rate of 25/hr with flexible schedule.</p>
            <a class="button_hover mt-8 homebtn" href="@">Start
                training
            </a>
        </div>
        <div class="w-1/2 flex justify-center items-center">
            <div>
                <img class="h-80 w-80" src="{{url('public/images/app/Conference.png')}}" alt="">
            </div>
        </div>
    </div>
</div> --}}
<div id="leaseourpropertty">
                <div class="mb-4 flex flex-col justify-center items-center mt-16 w-100">

                    <h1 class="text-5xl	mt-16 text-purple-600 playfair-bold py-4">Rent one of our property
                    </h1>
                    <span class="linebottom"></span>

                </div>
                <div class="flex my-12 justify-center items-center w-100">
                    <div class="flex justify-between w-1/2">
                        <a href="#"><img class="h-8 w-22" src="{{url('public/images/app/zillow.png')}}" alt=""></a>
                        <a href="#"><img class="h-8 w-22" src="{{url('public/images/app/airbnb.png')}}" alt=""></a>
                    </div>
                </div>
</div>

<div class="relative -left-4 mt-12">
    <img class="w-20 h-20" src="{{url('public/images/app/circle.png')}}" alt="">
</div>
<div class="join_box">
    <img class="settingsimg" src="{{url('public/images/app/settings.png')}}" alt="">
    <img class="noteimg" src="{{url('public/images/app/note.png')}}" alt="">
    <img class="shakeimg" src="{{url('public/images/app/shake.png')}}" alt="">
    <h1 class="text-white playfair-bold text-4xl mb-12">Want to become a property
        manager with us? </h1>
    <a class="bt_white homebtnwhite" href="#" style="color:#751FFF !important">Join Our Network</a>
</div>

@stop