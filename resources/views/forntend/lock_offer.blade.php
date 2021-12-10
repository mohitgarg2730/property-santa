<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('public/css/app.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.bg-img {
    background-repeat: no-repeat;
    object-fit: cover;
    background-image: url("/images/app/bgcp.png");
}

.footer-bg {
    background-repeat: no-repeat;
    object-fit: cover;
    background-image: url("/images/app/footer.png");
}

@font-face {
    font-family: Nexa Bold_0;
    src: url('/fonts/Nexa Bold_0.otf');
}

@font-face {
    font-family: Nexa Light_0;
    src: url('/fonts/Nexa Light_0.otf');
}

@font-face {
    font-family: Poppins-Bold;
    src: url('/fonts/Poppins-Bold.ttf');
}

@font-face {
    font-family: Poppins-Light;
    src: url('/fonts/Poppins-Light.ttf');
}

@font-face {
    font-family: Poppins-Medium;
    src: url('/fonts/Poppins-Medium.ttf');
}

@font-face {
    font-family: Poppins-Regular;
    src: url('/fonts/Poppins-Regular.ttf');
}

@font-face {
    font-family: Poppins-SemiBold;
    src: url('/fonts/Poppins-SemiBold.ttf');
}

.nexa_bold {
    font-family: Nexa Bold_0;
}

.nexa_light {
    font-family: Nexa Light_0;
}

.poppins_bold {
    font-family: Poppins-Bold;
}

.poppins_light {
    font-family: PPoppins-Light;
}

.poppins_mediam {
    font-family: Poppins-Medium;
}

.poppins_regular {
    font-family: Poppins-Regular;
}

.poppins_semibold {
    font-family: Poppins-SemiBold;
}

.linebottomlock {
    display: block;
    width: 8em;
    margin: 0em auto 0em;
    border-bottom: 3px solid white;
}

.sentaSection {
    background-color: #7014f4;
}

.button_hover:hover {
    background-color: rgba(139, 92, 246, 1);
}

.text_hover:hover {
    color: rgba(139, 92, 246, 1);
}

.tooltip {
    position: relative;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 100px;
    background-color: rgba(139, 92, 246, 1);
    ;
    color: #fff;
    text-align: center;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: 110%;
    left: 56%;
    margin-left: -60px;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}

.leftcell ul li::before {
    content: "\2022";
    color: black;
    font-weight: bold;
    display: inline-block;
    margin-left: -1em;
    width: 1em;
}

.leftcell ul .highlighted li::before {
    color: rgba(139, 92, 246, 1) !important;
}

.rightcell ul li::before {
    content: "\2022";
    color: black;
    font-weight: bold;
    display: inline-block;
    margin-left: -1em;
    width: 1em;
}
</style>

<body>
    <div class="bg-white-100 flex flex-col w-100 h-100 mainbody">
        <!-- header start -->

        <div class="w-full flex justify-between px-20 py-6 bg-white fixed">
            <div class="logo w-2/12 ">
                <a href="#">
                    <img class="h-12 w-25" src="{{url('images/app/logo.png')}}" alt="">
                </a>
            </div>
            <div class="w-5/12 flex justify-end">
                <ul class="flex ml-4 text-sm nexa_bold">
                    <li class="cursor-pointer py-3 px-4 text_hover text-purple-600">Home</li>
                    <li class="cursor-pointer py-3 px-4 text_hover text-purple-600">Custom Package</li>
                    <li class="cursor-pointer py-3 px-4 text_hover text-purple-600">Learn with Us</li>
                    <li class="cursor-pointer py-3 pl-4 text_hover text-purple-600">Career</li>
                </ul>
            </div>
            <div class="w-2/5 flex justify-end items-center">
                <ul class="flex text-white  text-xs	 nexa_bold">
                    <a href="#" class="p-2 bg-purple-600 rounded-md text-white cursor-pointer button_hover tooltip">
                        <li>Property Owners <span class="tooltiptext">Owner</span></li>
                    </a>
                    <a href="#"
                        class="p-2 bg-purple-600 rounded-md text-white cursor-pointer ml-2 button_hover tooltip">
                        <li>Lease From Us<span class="tooltiptext">Tenants</span></li>
                    </a>
                    <a href="#"
                        class="p-2 bg-purple-600 rounded-md text-white cursor-pointer ml-2 button_hover tooltip">
                        <li>Freelance With Us <span class="tooltiptext">Freelance Opertunity</span></li>
                    </a>
                </ul>
            </div>

            <!-- <div class="flex justify-end  w-1/12">
                <a href="#" class="cursor-pointer">
                    <img class="h-12 w-10" src="{{url('images/app/profile.png')}}" alt="">
                </a>
            </div> -->
        </div>

        <!-- header end -->


        <div class="flex flex-col px-8 w-full h-100 mt-24">
            <a href="/custom_rate" class="flex mt-10 items-center  w-1/12 justify-start"><svg
                    class="w-6 h-6 text-white bg-purple-500 rounded-full" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <h1 class="text-purple-500 nexa_bold text-2xl ml-1">Back</h1>
            </a>
            <div class="flex justify-center">
                <button
                    class="button_hover nexa_bold text-md shadow-lg bg-purple-600 text-white py-4 w-64 rounded-md text-center">Lock
                    this current offers</button>
            </div>
            <!-- main content-->
            <div class="flex w-full justify-between mb-6">
                <div style="width:29%" class="flex justify-end px-10 items-start">
                    <div class="p-y w-auto border-2 border-purple-600 h-auto rounded-3xl flex flex-col shadow-lg">
                        <h1 class="nexa_bold text-purple-600 text-xl p-6 text-center">Basic Package</h1>
                        <div class="bg-purple-600 flex justify-center p-4">
                            <h1 class="nexa_light text-base	text-white">Only</h1>
                            <div class="flex items-center">
                                <h1 class="nexa_bold text-white text-5xl">20$</h1>
                                <p class="nexa_bold text-sm text-white">/ month for 12 Month</p>
                            </div>
                        </div>
                        <div class="rightcell">
                            <ul class="mt-4 px-4 nexa_light text-xl">
                                <li class="px-4 py-4 ">Marketing/ Advertising<br>
                                    <p class="text-sm">
                                        (30days or more to rent out)</p>
                                </li>
                                <li class="px-4 py-4 ">3 schedule maintenance in total
                                    period of time</li>
                                <li class="px-4 py-4 ">Basic Digital report on every
                                    house visit</li>
                                <li class="px-4 py-4 ">Tenant violation handling </li>
                                <li class="px-4 py-4 ">3 emergency services<br>
                                    <p class="text-sm">
                                        (Charges are different)</p>
                                </li>
                                <li class="px-4 py-4 ">Upload your house pictures by
                                    your own self</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="w-5/12 flex flex-col items-center">
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
                            <div class="nexa_bold flex flex-col mt-4 text-white text-md">
                                <h3>1) Professional Photography</h3>
                                <h3>2) Unlimited Visits</h3>
                                <h3>3) Unlimited emergency services</h3>
                                <h3>4) Moving in cleanup</h3>
                                <h3>5) Eviction Protection</h3>
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
                        <button
                            class="button_hover nexa_bold text-sm shadow-lg bg-purple-600 text-white py-4 w-64 rounded-md flex items-center justify-center">(+1)
                            000-000-1215</button>
                    </div>
                </div>
                <div style="width:29%" class="flex justify-end px-10">
                    <div class="p-y w-auto border-2 border-purple-600 h-auto rounded-3xl flex flex-col shadow-lg">
                        <h1 class="nexa_bold text-purple-600 text-xl p-6 text-center">Custom Package</h1>
                        <div class="bg-purple-600 flex justify-center p-4">
                            <h1 class="nexa_light text-base	text-white">Only</h1>
                            <div class="flex items-center">
                                <h1 class="nexa_bold text-white text-5xl">160$</h1>
                                <p class="nexa_bold text-sm text-white">/ month for 12 Month</p>
                            </div>
                        </div>
                        <div class="leftcell">
                            <ul class="mt-4 px-4 nexa_light text-lg">
                                <li class="px-4">Marketing/ Advertising
                                    <br>
                                    <p class="text-sm">(30days or more to rent out)</p>
                                </li>
                                <li class="px-4 mt-1 ">3 schedule maintenance in total
                                    period of time</li>
                                <li class="px-4 mt-1 ">Basic Digital report on every
                                    house visit</li>
                                <li class="px-4 mt-1 ">Tenant violation handling </li>
                                <li class="px-4 mt-1 ">3 emergency services<br>
                                    <p class="text-sm">(Charges are different)</p>
                                </li>
                                <li class="px-4 mt-1 ">Upload your house pictures by
                                    your own self</li>
                                <span class="highlighted">
                                    <li class="px-4 mt-1 text-purple-600"> Professional Photography</li>
                                    <li class="px-4 mt-1 text-purple-600">Unlimited Visits<br>
                                        <p class="text-sm">(Digital copy of every
                                            visit)</p>
                                    <li class="px-4 mt-1 text-purple-600">Unlimited Emergency Visits<br>
                                        <p class="text-sm">(Include Small
                                            tasks)</p>
                                    <li class="px-4 mt-1 text-purple-600">Move in cleanup.</li>
                                    <li class="px-4 mt-1 text-purple-600">Protection from Eviction</li>
                                    <li class="px-4 mt-1 text-purple-600">Set your Heater, Small appliances, Garage</li>
                                    <li class="px-4 my-1 text-purple-600">Replace larger appliances</li>
                                </span>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--main content end-->
        </div>
    </div>
</body>

</html>