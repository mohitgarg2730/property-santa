@extends('forntend.layouts.index')


@section('content')




 
            <!-- main content-->
            @php 
            $sr = 1;
            @endphp
              @foreach ($questions as $question)
              <div class="flex flex-col px-8 w-full h-100 mt-10 step-{{ $question->id }}@if($question->id != 1) hide @endif">
      
              @if($question->id == 1)
              <a  class="flex mt-10 items-center button-back-package w-min cursor-pointer" href="{{url('customRate')}}"><svg
                        class="w-6 h-6 text-white bg-purple-500 rounded-full" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <h1 class="text-purple-500 nexa_bold text-2xl ml-1"  >Back</h1>
             </a>
      
      
      
              @endif
              @if($question->id != 1)
              <button  class="flex mt-10 items-center button-back-package w-min"  data-id={{ $question->id }}><svg
                        class="w-6 h-6 text-white bg-purple-500 rounded-full" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <h1 class="text-purple-500 nexa_bold text-2xl ml-1"  >Back</h1>
                </button>

                @endif

                






              <input type="hidden" value="{{$question->tittle}}" class="inputTittle-{{ $question->id }}" >
                    <div class="flex w-full justify-between mb-6">
                        <div class="w-1/2 flex flex-col px-8 mt-10">
                            <h1 class="playfair-bold text-5xl text-purple-600">Build Your Custom Package:</h1>
                            <p class="roboto-medium text-3xl  text-black mt-12">
                              {{ $question->questions }}
                            </p>
                            <p class="roboto-light text-lg text-gray-700 mt-2">
                              {{ $question->description }}
                            </p>

                       
                            <p class="roboto-light text-lg text-gray-700">(for an additional <span class="text-green-600 roboto-bold">{{ $question->rate }}</span>USD/Month)</p>
                          <div class="flex justify-start items-center mt-6">
                                <button class="button-back-package backtip w-min"  data-id={{ $question->id }}> <svg class="w-6 h-6 text-white bg-purple-500 rounded-full" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg> <span class="backtiptext">Back</span></button> 
                                <button data-id={{ $question->id }} data-questionrate={{ $question->rate  }}
                                    class="button-yes-package unqiue-class-yes-{{$question->id }}  mx-4  bg-purple-600 text-white nexa_bold text-sm shadow-lg  py-4 w-64	 rounded-md flex items-center justify-center"><svg
                                        class="w-6 h-6 mr-1 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z">
                                        </path>
                                    </svg>Yes</button>
                                 
                                 
                                 
                                  <button style="background-color:#E30340" data-id={{ $question->id }} data-questionrate={{ $question->rate  }}
                                    class="button-no-package unqiue-class-no-{{$question->id }}  mx-4  bg-purple-600 text-white nexa_bold text-sm shadow-lg  py-4 w-64	 rounded-md flex items-center justify-center"><svg
                                        class="w-6 h-6 mr-1 mb-1" fill="none"   stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z">
                                        </path>
                                    </svg>NO</button>
                                </span> 
                                <button    data-id={{ $question->id }} class="button-next-package fronttip">
  
                                    <svg class="w-6 h-6 text-white bg-purple-500 rounded-full " fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                        </path>
                                    </svg> <span class="fronttiptext">Skip This Question.</span> </button>  
                            </div>
                        
                        </div>
                        <div style="width:32%" class="flex justify-end px-10 ">
                            <div class="p-y w-auto border-2 border-purple-600 h-auto rounded-3xl flex flex-col shadow-lg">
                                <h1 class="nexa_bold text-purple-600 text-xl p-6 text-center">Custom Package</h1>
                                <div class="bg-purple-600 flex  w-100 py-4 px-6">
                                    <!-- <h1 class="nexa_light text-base	text-white">Only</h1> -->
                                   
                                        <!-- <h1 class="roboto-bold text-white text-4xl" class="mobile-price">  
                                            
                                         
                                        </h1>  
                                        <p class="roboto-bold text-xs text-white">/ month for {{ $inquiryee->step_3}} </p> -->

                                        <ul class="flex flex-col w-full mobile-screen2 total-fees-mobilescreen">
                                          <li class="roboto-regular  text-white flex justify-between"><span>Lease Term Selected:</span>   <span>Month To Month</span>    </li>
                                           <li class="roboto-regular  text-white flex justify-between"><span>Property Santa Basic Fees:</span>
                                            <span class="roboto-bold">80<span class="roboto-regular text-xs">USD/Month</span></span>    </li>    
                                          <li class="roboto-bold  text-white flex justify-between"><span>Total Sanat Fees :</span>
                                            <span class="roboto-bold">80<span class="roboto-regular text-xs">USD/Month</span></span></li>
                                  
                                        </li>
                                      </ul>
                                      
                                    
                                </div>
                                <div class="leftcell">
                                    <ul class="mt-4 px-4 roboto-regular text-lg mobile-screen">
                                    </ul>

                                        <ul class="mt-4 px-4 roboto-regular text-lg">
                                            <li class="px-4 py-2 ">3 emergency services.</li>
                                            <li class="px-4 py-2 ">3 house cleaning and guest services.</li>
                                            <li class="px-4 py-2 ">Monthly HVAC periodic/preventative maintenance.</li>
                                            <li class="px-4 py-2 ">Exterior preventative maintenances. </li>
                                       
                                        
                                        </ul>
                                </div>
            
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        
                    @endforeach
                    <div class="flex flex-col px-8 w-full h-100 mt-24 step-8 hide">
   
                <button  class="flex mt-10 items-center button-back-package w-min"  data-id="8"><svg
                        class="w-6 h-6 text-white bg-purple-500 rounded-full" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <h1 class="text-purple-500 nexa_bold text-2xl ml-1"  >Back</h1>
                </button>    
            <div class="flex justify-center">
                <a
                class="lockbtn buttonanimation  button_hover nexa_bold text-md shadow-lg text-black py-4 w-64 rounded-md text-center" href="{{url('vactionaloffer')}}">Next</a>
            </div>
            <!-- main content-->

            <div class="flex w-full justify-between mb-6">
                <div style="width:32%" class="flex justify-end px-10 items-start">
                    <div class="p-y w-auto border-2 border-purple-600 h-auto rounded-3xl flex flex-col shadow-lg">
                        <h1 class="nexa_bold text-purple-600 text-xl p-6 text-center">Basic Package</h1>
                        <div class="bg-purple-600 flex w-100 px-6 py-4">
                            <!-- <h1 class="nexa_light text-base	text-white">Only</h1> -->
                           
                        <ul class="flex flex-col w-full roboto-regular text-md text-white">
                            <li class="flex justify-between">
                                <span>Lease term selected:</span>
                                <span>Month-to-Month</span>
                            </li>
                            <li class="flex justify-between mt-2">
                                <span>Property Santa Basic Fees:</span>
                                <span class="flex items-end">80<p class="text-xs">USD/Month</p></span>
                            </li>
                            <li class="flex justify-between mt-2 roboto-bold">
                                <span>Total Santa Fees:</span>
                                <span class="flex items-end">80<p class="text-xs">USD/Month</p></span>
                            </li>
                        </ul>
                                
                        </div>
                        <div class="">
                            <ul class="mt-4 px-4 roboto-regular text-lg">
                                <li class="px-4 py-2 ">3 emergency services</li>
                                <li class="px-4 py-2 ">3 house cleaning and guest services.</li>
                                <li class="px-4 py-2 ">Monthly HVAC periodic/preventative maintenance.</li>
                                <li class="px-4 py-2 ">Exterior preventative maintenances.</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="w-5/12 flex flex-col items-center  step-8 hide ">
                    <div class="mt-28 flex">
                        <div class="flex items-center"><svg
                                class="w-10 h-10 bg-purple-600 rounded-md text-white nexa_bold" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg></div>
                        <div class="mx-4 p-4 rounded-2xl shadow-lg bg-purple-600">
                            <h1 class="text-white nexa_bold text-lg text-center">Additional Services</h1>
                            <span class="linebottomlock"></span>
                            <div class="nexa_bold flex flex-col mt-4 text-white text-md mobile-screen-services">
                                <!-- <h3>1) Professional Photography</h3>
                                <h3>2) Unlimited Visits</h3>
                                <h3>3) Unlimited emergency services</h3>
                                <h3>4) Moving in cleanup</h3>
                                <h3>5) Eviction Protection</h3> -->
                            </div>
                        </div>
                        <div class="flex items-center"><svg
                                class="w-10 h-10 bg-purple-600 rounded-md text-white nexa_bold" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 8h16M4 16h16"></path>
                            </svg></div>
                    </div>
                    <div class="flex flex-col justify-center items-center mt-20">
                        <h1 class="nexa_bold text-lg text-gray-600">If you are not satisfied with our<br>
                            rates then schedule a call now.</h1>
                        <a class="button_hover nexa_bold text-md shadow-lg bg-black text-white py-4 w-64 rounded-md text-center" href="https://koalendar.com/e/meet-with-momen-khan-1">Schedule a call</a>
                    </div>

                    
                </div>
                <div style="width:29%" class="flex justify-end px-10 ">
                            <div class="p-y w-auto border-2 border-purple-600 h-auto rounded-3xl flex flex-col shadow-lg">
                                <h1 class="nexa_bold text-purple-600 text-xl p-6 text-center">Custom Package</h1>
                                <div class="bg-purple-600 flex w-100 px-6 py-4">
                                    <!-- <h1 class="nexa_light text-base	text-white">Only</h1> -->
                                   
                                    <ul class="flex flex-col w-full mobile-screen2 total-fees-mobilescreen">
                                          <li class="roboto-bold  text-white flex justify-between"><span>Lease Term Selected:</span>   <span>Month To Month</span>    </li>    
                                          <!-- <li class="roboto-bold  text-white flex justify-between"><span>Total Sanat Fees :</span>   <span>80</span>USD/Month</li>     -->
                                    
                                      </ul>
                                      <br>
                                </div>

                                <div class="leftcell">
                                    <ul class="mt-4 px-4 roboto-regular text-lg mobile-screen">
                                    </ul>
                                    <ul class="mt-4 px-4 roboto-regular text-lg">
                                        <li class="px-4 py-2 ">Marketing/ Advertising<br>
                                            <p class="text-sm">
                                                (30days or more to rent out)</p>
                                        </li>
                                        <li class="px-4 py-2 ">3 schedule maintenance in total
                                            period of time</li>
                                        <li class="px-4 py-2 ">Basic Digital report on every
                                            house visit</li>
                                        <li class="px-4 py-2 ">Tenant violation handling </li>
                                        <li class="px-4 py-2 ">3 emergency services<br>
                                            <p class="text-sm">
                                                (Charges are different)</p>
                                        </li>
                                        <li class="px-4 py-2 ">Upload your house pictures by
                                            your own self</li>
                                        
                                    </ul>
                                </div>
            
                            </div>
                        </div>
            </div>
            <!--main content end-->
        </div>



<input type="hidden" class="input-amount" value='80'>
<script>







$( document ).ready(function() {
    $('.button-no-package').hide();
//     $('#timerModel').modal('toggle');
// $('#timerModel').modal('show');
// $('#timerModel').modal('hide');
});




var   sr = (parseInt(1));

    $(".button-yes-package").click(function() {
      
 
    var  classNamee = '.step-'+$(this).attr("data-id");
    var  mobileInsidePrice = '.mobile-inside-price-'+$(this).attr("data-id");
    var  unqiueClassNo = '.unqiue-class-no-'+$(this).attr("data-id");
    var  classNameeInputTittle = '.inputTittle-'+$(this).attr("data-id");
 
    var  addprecentage = '.add-precentage-'+$(this).attr("data-id");
    var  addTotal = '.add-total-'+$(this).attr("data-id");


     $(classNamee).hide();
     $(this).hide();
     $(unqiueClassNo).show();
        console.log(classNamee);
        console.log(unqiueClassNo);
   
   
     var number = (parseInt($(this).attr("data-id"))+parseInt(1));  
     var number2 = (parseInt($(this).attr("data-id"))-parseInt(1));  
     var  classNamee2 = '.step-'+number;
     var  pervousamountclass = '.amount-id-'+number2;
    
     $(classNamee2).removeClass('hide');
     $(classNamee2).show();

     var  questionRate = $(this).attr("data-questionrate");
     var  questionRate = $(this).attr("data-questionrate");
     var  questionRate2 = 0;
    //  if(number2 == 0)
    //  {

        
    //     var  perviousstepRate =0;

    //  }
    //  else
    //  {
   

    //  }

        
     var  perviousstepRate = $(pervousamountclass).text();
        perviousstepRate = parseInt(perviousstepRate);



     $('.mobile-screen').append('<li class="px-4 py-2 text-purple-600 list-id-'+$(this).attr("data-id")+'">'+$(classNameeInputTittle).val()+'</li>');
     $('.mobile-screen2').append(' <li class="flex justify-between mt-2  list-id-'+$(this).attr("data-id")+' text-white roboto-bold"><span>'+$(classNameeInputTittle).val()+'</span> <span class="flex items-end  amount-id-'+$(this).attr("data-id")+'">'+questionRate+'<p class="text-xs"> &nbsp;USD/Month</p></span></li>');
     $('.total-fees-li').remove();
     

     var perviousRate = $('.input-amount').val();

        console.log(perviousRate);
        console.log(questionRate);
     questionRate = parseInt(questionRate)+ parseInt(perviousRate);
     console.log(questionRate);



     $('.input-amount').val(questionRate);


     $('.total-fees-mobilescreen').append('<li class="flex total-fees-li text-white  justify-between mt-2 roboto-bold"><span>Total Santa Fees:</span> <span class="flex items-end amountss">'+questionRate+' <p class="text-xs"> USD/Month</p> </span></li>');
     $('.mobile-screen-services').append('<h3 class="list-id-'+$(this).attr("data-id")+'">'+sr+' )'+$(classNameeInputTittle).val()+'</43>');
     sr = (parseInt(1)+sr);
    //  price caluclation    

    var mobileInsidePrices =parseInt($(mobileInsidePrice).val());
    console.log(mobileInsidePrices);
 
            if(number == 9)
            {
                window.location.replace("{{ url('hellosign');}}");

            }







    });
    $(".button-next-package").click(function() {
        if($(this).attr("data-id") != '9')
{
        var  classNamee = '.step-'+$(this).attr("data-id");
      
        $(classNamee).hide();
        
     var number = (parseInt($(this).attr("data-id"))+parseInt(1));  
     var  classNamee2 = '.step-'+number;
     $(classNamee2).show();

     $(classNamee2).removeClass('hide');
}   
    });

    $(".button-back-package").click(function() {
            if($(this).attr("data-id") != '1')
            {
                var  classNamee = '.step-'+$(this).attr("data-id");
                $(classNamee).hide();
            
            
            
                var number = (parseInt($(this).attr("data-id"))-parseInt(1));  
                var  classNamee2 = '.step-'+number;
                $(classNamee2).css('display','block');
                console.log(classNamee);
                console.log(classNamee2);

            }
    });
  
    $(".button-pervious-package").click(function() {

    });








    $(".button-no-package").click(function() {
        
    var  classNamee = '.step-'+$(this).attr("data-id");
    var  liNamee = '.list-id-'+$(this).attr("data-id");
    var  mobileInsidePrice = '.mobile-inside-price-'+$(this).attr("data-id");
    var  unqiueClassNo = '.unqiue-class-yes-'+$(this).attr("data-id");
    var  classNameeInputTittle = '.inputTittle-'+$(this).attr("data-id");
 
    var  addprecentage = '.add-precentage-'+$(this).attr("data-id");
    var  addTotal = '.add-total-'+$(this).attr("data-id");
        $(this).hide();
       $(unqiueClassNo).show();
       var number = (parseInt($(this).attr("data-id"))+parseInt(1));  

       var finaleRate = 0;
       var  questionRate = $(this).attr("data-questionrate");
         questionRate = parseInt(questionRate);
       var mobileInsidePrices =parseInt($(mobileInsidePrice).val());

     finaleRate = (mobileInsidePrices * questionRate ) /100;  
     var ratee = finaleRate;
      finaleRate = (mobileInsidePrices + finaleRate );  
        // console.log(finaleRate);
        // console.log(mobileInsidePrices);
        // console.log(ratee); 

    //   $('.mobile-inside-price-'+number).val( finaleRate);
    //     $('.mobile-inside-price-'+number).text( finaleRate +'$');
      $('.price').val( finaleRate);
        $('.price').text( finaleRate +'$');

        var precnetage = parseInt($(addprecentage).val());
        var total = parseInt($(addTotal).val());

            precnetage = precnetage  - questionRate;
            total = total  - ratee;
            console.log(precnetage);
            console.log(total);
            // $('.add-precentage-'+number).val(precnetage)
            // $('.add-precentage-'+number).text(precnetage +'%')
        

            // $('.add-total-'+number).val(total)
            // $('.add-total-'+number).text('$'+total)
            $('.add-precentage').val(precnetage)
            $('.add-precentage').text(precnetage +'%')
            $('.add-total').val(total)
            $('.add-total').text('$'+total)
            $(liNamee).remove()




    });
</script>





    @stop