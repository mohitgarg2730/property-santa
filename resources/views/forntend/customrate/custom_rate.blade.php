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
        <h1 class="flex justify-center items-center text-black text-2xl roboto-bold">Get your custom rate live in a few seconds and then proceed to list your home.<br> No annoying phone calls or negotiations.
        </h1>
        <h1 class="mt-10 flex text-purple-600 playfair-bold text-2xl" style="margin-left:22%">Where in the
            process are
            you?</h1>
        <h1 class="flex roboto-medium text-2xl text-black mt-6" style="margin-left:25%">I want to lease my :
        </h1>
        <div class="mt-4 roboto-medium text-2xl" style="margin-left:28%">
            <ul class="ul-step-1">
                <li value="Residential Rental"
                    class="flex text-black cursor-pointer clickable step_1 {{ (!empty($inquiry->step_1) && $inquiry->step_1 == 'Residential Rental' )? 'active' : '' }}">
                    Residential Rental </li>
                <li
                    class="flex text-black cursor-pointer clickable py-3 step_1 {{ (!empty($inquiry->step_1) &&$inquiry->step_1 == 'Vacation Home' )? 'active' : '' }}">
                    Vacation Rental </li>
                <li
                    class="flex text-black cursor-pointer clickable step_1 {{ (!empty($inquiry->step_1) && $inquiry->step_1 == 'Furnished rental' )? 'active' : '' }}">
                    Furnished rental </li>
            </ul>
        </div>
    </div>


    <div class="mt-4" id="step_2">
        <h1 class="mt-10 flex text-purple-600 playfair-bold text-2xl" style="margin-left:22%" id="step-2Heading">{{ (!empty($inquiry->step_1) )? $inquiry->step_1 : '' }}

        </h1>


        <h1 class="flex playfair-bold text-2xl text-black mt-6" style="margin-left:25%">Is this a :</h1>
        <div class="mt-4 roboto-medium text-2xl" style="margin-left:28%">
            <ul>
                <li
                    class="flex  text-black cursor-pointer clickTwo step_2 {{ (!empty($inquiry->step_2) && $inquiry->step_2 == 'Single-Family home' )? 'active' : '' }}">
                    Single-Family home</li>
                <li
                    class="flex py-3 text-black cursor-pointer step_2 {{ (!empty($inquiry->step_2) && $inquiry->step_2 == 'Condominium' )? 'active' : '' }}">
                    Condominium</li>
                <li
                    class="flex  text-black cursor-pointer step_2 {{ (!empty($inquiry->step_2) && $inquiry->step_2== 'Townhome' )? 'active' : '' }}">
                    Townhome</li>
            </ul>
        </div>
    </div>
    {{-- ----Vactional REntal ------------- --}}
    <div class="mt-4" id="VactionRental-step_2">
        <h1 class="mt-10 flex text-purple-600 playfair-bold text-2xl" style="margin-left:22%" id="step-2Heading">Vactional Rental

        </h1>

        
        <h1 class="flex playfair-bold text-2xl text-black mt-6" style="margin-left:25%">No Contract (Month To Month)</h1>
        <div class="mt-4 roboto-medium text-2xl" style="margin-left:28%">
          <p> You manage the bookings and marketing and we manage your asset in between the guests and other essentional services ?</p>
<div class="flex mt-4"><a href="{{ url('vactionalsummray') }}" class="bg-purple-600 text-white nexa_bold text-sm shadow-lg  py-4 w-64    rounded-md flex items-center justify-center">Yes</a> 
            <!-- <a style="background-color: rgb(227, 3, 64);" class="mx-4  bg-purple-600 text-white nexa_bold text-sm shadow-lg  py-4 w-64   rounded-md flex items-center justify-center">No</a> -->
         </div>
            
        </div>
    </div>
    {{-- vactional Rental  --}}
        <div class="mt-4" id="step_3">
            <h1 class="flex  playfair-bold text-2xl text-black mt-6" style="margin-left:25%">What is your desired
                lease term?</h1>
            <div class="mt-4 roboto-medium text-2xl" style="margin-left:28%">
                <ul>
                    <li
                        class="flex  text-black cursor-pointer clickThree step_3 {{ (!empty($inquiry->step_3) &&$inquiry->step_3 == '1 Month' )? 'active' : '' }} ">1 Month </li>
                    <li
                        class="flex py-3 text-black cursor-pointer step_3  {{ (!empty($inquiry->step_3) && $inquiry->step_3 == '3 Month' )? 'active' : '' }}">3 Month </li>
                    <li
                        class="flex py-3 text-black cursor-pointer step_3 {{ (!empty($inquiry->step_3) && $inquiry->step_3 == '6 Month' )? 'active' : '' }}">6 Month </li>
                    <li
                        class="flex py-3 text-black cursor-pointer step_3 {{ (!empty($inquiry->step_3) && $inquiry->step_3 == '12 Month' )? 'active' : '' }}">12 Month </li>
                    <li
                        class="flex py-3 text-black cursor-pointer step_3 {{ (!empty($inquiry->step_3) && $inquiry->step_3 == '24 Month' )? 'active' : '' }}">24 Month </li>
                    <li
                        class="flex py-3 text-black cursor-pointer">
                        <input type="text" name="step_3" placeholder="Enter Custom Months" class="inputStep_3 inputt_step_3 p-4 w-8/12 border border-gray-500" value="{{ (!empty($inquiry->step_3) )? $inquiry->step_3 : '' }}">
                    </li>
                </ul>
            </div>
        </div>
   
    <form method="POST" id="forms" action="{{ url('customRateForm') }}">
        @csrf
        <input type="hidden" name="step_1" id="inputStep_1">
        <input type="hidden" name="step_2" id="inputStep_2">
        <input type="hidden" name="step_3" class="inputStep_3 inputStepnew_3">
        <div class="mt-4" id="step_4">
            <h1 class="flex playfair-bold text-2xl text-black mt-6" style="margin-left:25%">What is your desired rent
                for this property?</h1>
            <div class="mt-4 flex items-center roboto-medium text-3xl" style="margin-left:25%">
                <input type="number"  required name="amount"  onkeypress="return onlyNumberKey(event)" value="{{ (!empty($inquiry->user_rate))? $inquiry->user_rate: '' }}"
                    class="p-4 w-2/12 border border-gray-400">
                 
                <h1 class="ml-1 text-black">USD</h1>
                
            </div>
            <span class="error-msg"> </span>
            {{-- user_rate --}}
            <h1 class="flex poppins_semibold text-md text-black mt-6" style="margin-left:25%">Please enter your
                location to get a custom estimate in 30 second and then proceed to select our pricing.</h1>
            <div class="mt-4 flex items-center w-100" style="margin-left:25%">
                <input type="text" name="address"
                    value="{{ (!empty($inquiry->user_address))? $inquiry->user_address: '' }}"
                    class="p-4 w-8/12 border border-gray-500" placeholder="Enter your address here">
                <button class="bg-purple-500 text-white p-4 ml-4 font-bold clickFour"
                    {{ (!empty($inquiry->user_rate))? 'disabled': '' }}>Proceed</button>
            </div>

        </div>
    </form>
    @if (!empty($inquiry->user_rate))
    <div class="mt-4" id="">

    <div class="mt-4" id="step_5">
        <div class="mt-4 flex items-center w-100" style="margin-left:28%">
            <input type="number" class="p-4 w-2/12 border border-gray-400 lock-now-input"
                value="{{ (!empty($inquiry->admin_price))? $inquiry->admin_price: '' }}" id="lockinput">  
               
                
                <!-- <span id=app></span> -->
                    <img src="{{ url('public/images/House%20loading.gif') }}" id="imgss">            

                <a href="{{ url('/packageSelect') }}"
                class="nexa_bold text-base shadow-lg bg-purple-600 text-white py-4 w-64	 rounded-md text-center hide lock-now-button ml-4"
                {{ (!empty($inquiry->admin_price))? '': 'disabled' }}>Lock Rate For 24 hours</a>
        </div>
        </div>

        <h1 class="flex poppins_semibold text-lg text-black mt-6" style="margin-left:25%">Your custom live rates
            are available for the next 24 hours and you can log in with your phone number anytime to lock your
            rate.</h1>
            <div class="flex flex-col justify-start my-10" style="margin-left:25%">
                    <h1 class="nexa_bold text-lg text-gray-600">If you are not satisfied with our<br>
                        rates then schedule a call now.</h1>
                    <a  class="button_hover nexa_bold text-md shadow-lg bg-black text-white py-4 w-64 rounded-md text-center" href="https://koalendar.com/e/meet-with-momen-khan-1">Schedule a call</a>
                </div>
    </div>
    @endif
</div>
<script>
     function onlyNumberKey(evt) {
          
          // Only ASCII character in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            {
                
                $('.error-msg').show();

              $('.error-msg').html('<p style="color: red; position:absolute; left:26%; margin-bottom:10px;">* Input digits (0 - 9)</p>');

            }
            else
            {
                $('.error-msg').html('');

                $('.error-msg').hide();


            }
      }
</script>
@if (!empty($inquiry->user_rate))
<script>
    
setInterval(function() {
    // $('#lockinput').hide();

    $.ajax({
        url: "{{ url('cutomRateGetAdminPrice/' . $inquiry->id) }}",
        success: function(response) {
            if (response != false) {
                $('.lock-now-input').val(response);
                $('.lock-now-button').removeAttr('disabled');
                $('#app').hide();
                $('#imgss').hide();
                $('#lockinput').show();
                $('.lock-now-button').removeClass('hide');
            }
        }
    });
}, 3000);
    
$( document ).ready(function() {
    $('#lockinput').hide();

    $.ajax({
        url: "{{ url('cutomRateGetAdminPrice/' . $inquiry->id) }}",
        success: function(response) {
            if (response != false) {
                $('.lock-now-input').val(response);
                $('.lock-now-button').removeAttr('disabled');
                $('#app').hide();
                $('.lock-now-button').removeClass('hide');
            }
        }
    });
});

</script>

@endif
@stop