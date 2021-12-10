@extends('forntend.layouts.index')


@section('content')


<div class="bg-white-100 flex flex-col w-100 h-100 mainbody">
    <!-- header start -->

    <!-- header end -->


    <div class="flex flex-col px-8 w-full h-100">
        <a href="{{url('customRate')}}" class="flex mt-10 items-center w-min cursor-pointer"><svg
                class="w-6 h-6 text-white bg-purple-500 rounded-full" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <h1 class="text-purple-500 nexa_bold text-2xl ml-1">Back</h1>
        </a>
        <!-- main content-->

        <div class="flex w-full justify-between mb-6">
            <div class="w-1/2 flex flex-col px-12 mt-10">

                <!-- <h1 class="text-5xl"><span class="playfair-bold text-purple-600">Current Selection:<br>Basic Package - </span> <span>{{$adminPrice}}$</span></h1> -->
                <p class="roboto-regular text-3xl text-black mt-12">Your current selection is our basic package.<br> To add custom property management features and services continue with custom package building 

                    <span class="text-purple-500">custom package
                        building.</span>
                </p>
                <div class="flex justify-start items-center mt-12">
                    <a href={{ url('/BuildCustomePackage') }}
                        class="button_hover nexa_bold text-sm shadow-lg bg-purple-600 text-white py-4 w-64	 rounded-md text-center">Want
                        to
                        built a
                        custom
                        package</a>
                    <span class="mx-4">
                        <p class="nexa_bold text-sm">or</p>
                    </span>
                    <a href={{ url('/forntendlogin') }}
                        class="nexa_bold text-base shadow-lg bg-white text-purple-600 py-4 w-64	 rounded-md text-center">Continue
                        with basic</a>
                </div>

            </div>
            <div style="width:29%" class="flex justify-end px-8">
                <div class="p-y w-auto border-2 border-purple-600 h-auto rounded-3xl flex flex-col shadow-lg">
                    <h1 class="nexa_bold text-purple-600 text-xl p-6 text-center">Basic Package</h1>
                    <div class="bg-purple-600 flex  w-100 py-4 px-6">
                        
                            <!-- <h1 class="roboto-bold text-white text-4xl"> {{ $adminPrice - 20 }}$</h1> -->
                            <!-- <p class="roboto-bold  text-white">Lease Term Selected :  {{$step3}} </p>
                            <br>
                            <p class="roboto-bold text-xs text-white">Lease Term Selected  {{$step3}} </p> -->
                            <ul class="flex flex-col w-full">
                            <li class="roboto-bold  text-white flex justify-between"><span>Lease Term Selected:</span>  <span>{{$step3}}</span>   </li>    
                            <li class="roboto-bold  text-white flex justify-between"><span>Locked Rent:</span>           <span> {{$adminPrice}}$</span> </li>    
                            <li class="roboto-bold  text-white flex justify-between"><span>Santa Package Selected:</span> <span>{{ round($percentage, 0);}}$ (2%) </span>  </li>    
                            <li class="roboto-bold  text-white flex justify-between"><span>Take Home:</span> <span>{{ round($adminPrice,0) - round($percentage,0)}}$</span>   </li>    
                            </ul>
                       
                    </div>
                    <div class="rightcell">
                        <ul class="mt-4 px-4 nexa_light text-md">
                            <li class="px-4 py-2 ">Marketing/ Advertising
                                (30days or more to rent out)</li>
                            <li class="px-4 py-2 ">3 schedule maintenance in total
                                period of time</li>
                            <li class="px-4 py-2 ">Basic Digital report on every
                                house visit</li>
                            <li class="px-4 py-2 ">Tenant violation handling </li>
                            <li class="px-4 py-2 ">3 emergency services
                                (Charges are different)</li>
                            <li class="px-4 py-2 ">Upload your house pictures by
                                your own self</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!--main content end-->
    </div>
</div>
@stop