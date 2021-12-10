@extends('forntend.layouts.index')


@section('content')

<style>
	.allset {
    display: block;
    width: 9em;
    margin: 1em auto 0em;
    border-bottom: 2px solid #751fff;
}
    .inp {
    border:none;
    border-bottom: 1px solid #1890ff;
    padding: 5px 10px;
    outline: none;
 }

[placeholder]:focus::-webkit-input-placeholder {
    transition: text-indent 0.4s 0.4s ease; 
    text-indent: -100%;
    opacity: 1;
 }
 ol.d {list-style-type: lower-alpha;}
 ol.e {list-style-type: circle;}
</style>




        <div class="flex flex-col px-8 w-full h-100 mt-24">
            <a href="{{url('packageSelect')}}" class="flex mt-10 items-center w-min"><svg
                    class="w-6 h-6 text-white bg-purple-500 rounded-full" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <h1 class="text-purple-500 nexa_bold text-2xl ml-1">Back</h1>
            </a>
            <!-- main content-->
            <div class="flex w-full flex-col">
                <div class="w-full flex flex-col justify-center items-center">
                    <h1 class="text-purple-600 playfair-bold text-5xl py-3" style="font-size: 31px;">Just sign our initial contract to start marketing your rental below and relax</h1>
                    <span class="allset"></span>

                    <div class="mt-12 flex justify-center items-center">
                        <div><img class="h-20 w-25" src="{{url('public/images/app/Spacing Markers.png')}}" alt=""></div>

                    </div>


                    <a href="https://www.hellosign.com/"
                        class="button_hover nexa_bold text-sm shadow-lg bg-purple-600 text-white py-4 w-64 rounded-md flex items-center justify-center mt-12">Sign
                        your document Here</a>
                        <!-- <a id="editPopup"
                        class="button_hover nexa_bold text-sm shadow-lg bg-purple-600 text-white py-4 w-64 rounded-md flex items-center justify-center mt-12">popup button</a> -->
                    



                </div>
                <div class="flex flex-col justify-start my-10">
                    <h1 class="nexa_bold text-lg text-gray-600">If you are not satisfied with our<br>
                        rates then schedule a call now.</h1>
                        <a class="button_hover nexa_bold text-md shadow-lg bg-black text-white py-4 w-64 rounded-md text-center" href="https://koalendar.com/e/meet-with-momen-khan-1">
                            schedule a call</a>
                        
                </div>
            </div>
            <!--main content end-->
        </div>

	
          
   
@stop
<script type="text/javascript">
	$(document).ready(function() {
        $("#editPopup").click(function() {
            if ($("#poupBox").hasClass("hidden")) {

                // Then add class close to trigger div
                $("#poupBox").removeClass("hidden");
                $("#poupBox").addClass("block");
            } else {
                $("#poupBox").removeClass("hidden");
            }
        });
        $("#closePopup").click(function() {
            if ($("#poupBox").hasClass("block")) {

                // Then remove class close to trigger div
                $("#poupBox").addClass("hidden");
            } else {
                $("#poupBox").removeClass("block");
            }
        });
    });
</script>