@extends('forntend.layouts.index')


@section('content')
<div class="flex flex-col px-8 w-full h-100">
    <a href="{{url('customRate')}}" class="flex mt-10 items-center w-min"><svg
            class="w-6 h-6 text-white bg-purple-500 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        <h1 class="text-purple-500 nexa_bold text-2xl ml-1">Back</h1>
    </a>
    <!-- main content-->
    <div class="flex w-full justify-between mb-6">
        <div class="w-2/3 flex flex-col px-8 mt-10">
            <h1 class="playfair-bold text-4xl text-purple-600">Basic Package Includes = <b
                    class="text-black roboto-bold">80</b><span class="text-black text-sm roboto-bold">USD/Month</span>
            </h1>
            <span class="flex items-center mt-4">
                <h3 class="roboto-bold font_text text-2xl">(for homes under 4000 Sq. Ft)</h3>
                <i class="fa fa-question-circle" aria-hidden="true"></i>

            </span>



            <div class="mt-6 ml-2">

                <ol class="list-decimal	ml-1 roboto-regular text-lg">
                    <li>Guests contact us during the stay for upto 3 emergency services (plumbing, heating/cooling,
                        flooding , or any major issue). We offer an emergency number for guests to reach us at and you
                        don't receive any calls.</li>
                    <li class="mt-4">
                        <h1>Upto 3 house cleaning services and preparing the house to standards for our next guest.</h1>
                        <h2 class="font_text mt-4">Customer initiated service/month. We provide digital copy of the
                            service managed by us and
                            you pay for the invoice for the work performed. Example Replacing a HVAC your bill is 6000
                            USD.Our fees for managing this service is 0 USD while you select this package.</h2>
                    </li>
                    <li class="mt-4">Upto 1 filter/HVAC change as part of our periodic/preventative maintenance if
                        required </li>
                    <li class="mt-4">Upto 1 Exterior preventative maintain ace(includes lawn care, pool/hot tub, roof,
                        pressure wash,
                        gutter cleaning) -customer will initiate this service.</li>
                </ol>

            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a class="button_hover homebtn"
                        href="{{ url('BuildCustomevactionalPackage') }}">Your
                  
                        custom package</a>
                    <h1 class="mx-3">or</h1>
                    <a class="bt_white homebtnwhite  shadow-lg" style="font-size:18px !important" href="{{ url('hellosign') }}">Continue with
                        basic</a>
                </div>
                <div class="flex flex-col shadow-2xl rounded-3xl px-3 py-4 w-48 bg-purple-600">
                    <h1 class="text-white text-sm roboto-bold p-2 flex text-center">If Homes are
                        over<br>
                        4000 Sq. Ft<br>
                        Call us to get a special Rate.</h1>

                    <a class="hover:bg-black hover:text-white bg-white rounded-lg flex items-center justify-center my-2 py-3 shadow-lg"
                        href="https://koalendar.com/e/meet-with-momen-khan-1">schedule a call</a>
                </div>
            </div>
        </div>


        <div style="width:32%" class="flex justify-end px-10">
            <div class="p-y w-auto border-2 border-purple-600 h-auto rounded-3xl flex flex-col shadow-lg">
                <h1 class="nexa_bold text-purple-600 text-xl p-6 text-center">Basic Package</h1>
                <div class="bg-purple-600 flex justify-center p-4">
                    <ul class="flex flex-col w-full roboto-regular text-md text-white">
                        <li class="flex justify-between"><span>Lease term selected:</span> <span>Month-to-Month</span>
                        </li>
                        <li class="flex justify-between mt-2"><span>Property Santa Basic Fees:</span>
                            <span class="flex items-end">80<p class="text-xs">USD/Month</p></span>
                        </li>
                        <li class="flex justify-between mt-2 roboto-bold"><span>Total Santa Fees:</span> <span
                                class="flex items-end">80
                                <p class="text-xs">
                                    USD/Month</p>
                            </span></li>
                    </ul>
                </div>
                <div class="leftcell">
                    <ul class="mt-4 px-4 nexa_light text-lg">
                        <li class="px-4 py-2 ">3 emergency services</li>
                        <li class="px-4 py-2 ">3 house cleaning and guest services.</li>
                        <li class="px-4 py-2 ">Monthly HVAC periodic/preventative maintenance.</li>
                        <li class="px-4 py-2 ">Exterior preventative maintenances.</li>
                        
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!--main content end-->
</div>
@stop