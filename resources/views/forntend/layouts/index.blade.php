<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ url('/public/css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('/public/style.css') }}">
    <script src="{{ url('public/js/app.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-83Y4RGV3WV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-83Y4RGV3WV');
</script>
</head>

<body>
    <div class="bg-white-100 flex flex-col w-100 h-100 mainbody">
        <!-- header start -->
        <div class="w-full flex justify-between px-20 py-6 bg-white fixed z-50">
            <div class="logo w-2/12 ">
                <a href="#">
                    <img class="h-12 w-25" src="{{url('public/images/app/logo.png')}}" alt="">
                </a>
            </div>
            <div class="w-5/12 flex justify-end">
                <ul class="flex ml-4 text-base Poppins-Medium">
                    <li class="cursor-pointer py-3 px-4 text_hover text-purple-600">   <a href="{{url('/')}}">Home</a></li>
                    <li class="cursor-pointer py-3 px-4 text_hover text-purple-600">   <a href="{{url('customRate')}}"> Custom Package</a></li>
                    {{-- <li class="cursor-pointer py-3 px-4 text_hover text-purple-600">Learn with Us</li> --}}
                    <li class="cursor-pointer py-3 pl-4 text_hover text-purple-600">  <a href="https://docs.google.com/forms/d/e/1FAIpQLSdhMK8F4szmAhwKf37JUWJD6qcTe1Zmvo_qSQlEEcUpaVnWNA/viewform?embedded=true">Career</a></li>
                </ul>
            </div>
            <div class="w-2/5 flex justify-end items-center">
                <ul class="flex text-white  text-sm	poppins_mediam">
                    <a href="{{url('customRate')}}"
                        class="px-2 py-3 bg-purple-600 rounded-md text-white cursor-pointer button_hover tooltip">
                        <li>Property Owners <span class="tooltiptext">Owner</span></li>
                    </a>
                    <a href="{{url('/#leaseourpropertty')}}"
                        class="px-2 py-3 bg-purple-600 rounded-md text-white cursor-pointer ml-3 button_hover tooltip">
                        <li>Lease From Us<span class="tooltiptext">Tenants</span></li>
                    </a>
                    {{-- <a href="#"
                        class="px-2 py-3 bg-purple-600 rounded-md text-white cursor-pointer ml-3 button_hover tooltip">
                      <li>Freelance With Us <span class="tooltiptext">Freelance Opertunity</span></li>
                    </a> --}}
                </ul>
            </div>

            <!-- <div class="flex justify-end  w-1/12">
                <a href="#" class="cursor-pointer">
                    <img class="h-12 w-10" src="{{url('images/app/profile.png')}}" alt="">
                </a>
            </div> -->
        </div>
        <!-- header ends -->


        <div class="container-fluid mt-14">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            
            @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            
            @if ($message = Session::get('info'))
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Check the following errors :(
            </div>
            @endif
            @yield('content')
        </div>


        <div class="footer-bg w-full  flex flex-col">
            <div class="flex px-12 py-8 mt-10 justify-arround">
                <div class="flex flex-col mt-12 w-1/4">
                    <a href="#">
                        <img class="h-14 w-25" src="{{url('public/images/app/logofooer.png')}}" alt="">
                    </a>
                    <p class="text-md text-white mt-6 roboto-light">Property Santa is dedicated to make home
                        ownership faster and simpler with superior
                        support along the way.</p>
                    <ul class="flex mt-6">
                        <li class="py-4 pr-4">
                            <a href="#"><i class="fab fa-facebook-square text-white fa-2x"></i></a>
                        </li>
                        <li class="p-4">
                            <a href="#"><i class="fab fa-linkedin text-white fa-2x"></i></a>
                        </li>
                        <li class="p-4">
                            <a href="#"><i class="fab fa-twitter-square text-white fa-2x"></i></a>
                        </li>
                        <li class="p-4"><a href="#"><i class="fab fa-instagram text-white fa-2x"></i></a></li>
                    </ul>
                </div>
                <div class="mt-16 w-2/5 flex justify-center">
                    <ul class="flex flex-col items-center text-white py-4  ">
                        <li class="pb-4">
                            <a href="{{url('/')}}" class="roboto-bold text-md">Home</a>
                        </li>
                        <li class="pb-3 roboto-light text-base">
                            <a href="{{url('customRate')}}">Custom Package</a>
                        </li>
                        {{-- <li class="pb-3 roboto-light text-base">
                            <a href="#">Learn with Us</a>
                        </li> --}}
                        <li class="roboto-light text-base">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdhMK8F4szmAhwKf37JUWJD6qcTe1Zmvo_qSQlEEcUpaVnWNA/viewform?embedded=true">Career</a>
                        </li>
                    </ul>


                </div>
                <div></div>
            </div>
            <div class="flex justify-center items-center text-white py-4">
                <a href="#">
                    <h1 class="nexa_light text-sm">Copyright © 2021. All Rights Reserved. Deigned With Love my Hello
                        World Group</h1>
                </a>
            </div>
        </div>
    </div>

</div>
</body>
<script>

$(".step_1").click(function() {
    $(".step_1").removeClass('active');
    $(this).addClass('active');

    var myStr = $(this).text();
    var trimStr = $.trim(myStr);
    if(trimStr == 'Vacation Rental')
    {
        $("#step_2").addClass('hide');
        $("#step_3").addClass('hide');
        $("#VactionRental-step_2").removeClass('hide');
        // $(document).scrollTo('#VactionRental-step_2');
        $('html, body').animate({
        scrollTop: $("#VactionRental-step_2").offset().top
    }, 2000);
        $('#forms').hide();
    $('#step_5').hide();
    } 
    else
    {
        $('#forms').show();
    $('#step_5').show();
    $("#VactionRental-step_2").addClass('hide');
    $("#step_2").removeClass('hide');
    $('html, body').animate({
        scrollTop: $("#step_2").offset().top
    }, 2000);
    $(this).addClass('active');
     localStorage.setItem("step_1", $(this).text());
  
    }
    $('#inputStep_1').val($(this).text());
    $('#step-2Heading').html($(this).text());


    // console.log(localStorage.getItem("step_1"));
});
$(".step_2").click(function() {
    $(".step_2").removeClass('active');

    $("#step_3").removeClass('hide');
    
    $(this).addClass('active');
    $('html, body').animate({
        scrollTop: $("#step_3").offset().top
    }, 2000);
    localStorage.setItem("step_2", $(this).text());
    // console.log(localStorage.getItem("step_1"));
    $('#inputStep_2').val($(this).text());

});
$(".step_3").click(function() {
    $(".step_3").removeClass('active');

    $("#step_4").removeClass('hide');
    $('html, body').animate({
        scrollTop: $("#step_4").offset().top
    }, 2000);
    $(this).addClass('active');

    localStorage.setItem("step_3", $(this).text());
    // console.log(localStorage.getItem("step_1"));
    $('.inputStep_3').val($(this).text());

});


 $('.inputt_step_3').keyup(function(){
    $('.inputStepnew_3').val($(this).val());
    $(".step_3").removeClass('active');
    $("#step_4").removeClass('hide');
})
$(".step_4").click(function() {
    $(".step_4").removeClass('active');
    $("#step_5").removeClass('hide');
    $(this).addClass('active');
    localStorage.setItem("step_4", $(this).text());
    // console.log(localStorage.getItem("step_1"));
});
$(document).ready(function() {
    $('#loked_rent').hide();
    var session = "{{ (!empty($inquiry->user_address))? $inquiry->user_address : null }}";
    console.log(session);
    if (session == '') {
        $("#step_2").addClass('hide');
        $("#step_3").addClass('hide');
        $("#step_4").addClass('hide');
        $("#VactionRental-step_2").addClass('hide');
    }
    $("#VactionRental-step_2").addClass('hide');



});
// =================
const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 10;
const ALERT_THRESHOLD = 5;
const COLOR_CODES = {
  info: {
    color: "green"
  },
  warning: {
    color: "orange",
    threshold: WARNING_THRESHOLD
  },
  alert: {
    color: "red",
    threshold: ALERT_THRESHOLD
  }
};

const TIME_LIMIT = 120;
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;

document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;

startTimer();

function onTimesUp() {
  clearInterval(timerInterval);
}

function startTimer() {
  timerInterval = setInterval(() => {
    timePassed = timePassed += 1;
    timeLeft = TIME_LIMIT - timePassed;
    document.getElementById("base-timer-label").innerHTML = formatTime(
      timeLeft
    );
    setCircleDasharray();
    setRemainingPathColor(timeLeft);

    if (timeLeft === 0) {
      onTimesUp();
    }
  }, 1000);
}

function formatTime(time) {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(warning.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(alert.color);
  } else if (timeLeft <= warning.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(info.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(warning.color);
  }
}

function calculateTimeFraction() {
  const rawTimeFraction = timeLeft / TIME_LIMIT;
  return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
  const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
  document
    .getElementById("base-timer-path-remaining")
    .setAttribute("stroke-dasharray", circleDasharray);
}
</script>

    <style>
        .button_hover:hover {
    background-color: rgba(139, 92, 246, 1);
}
.homebtn {
    display: flex;
    width: 240px;
    height: 60px;
    background: #751FFF;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    color: white;
    line-height: 25px;
    font-size: 16px;
    font-family: Poppins-Medium;
}

.bg-img {
    background-repeat: no-repeat;
    object-fit: cover;
    background-image: url("/images/app/bgcp.png");
}

.footer-bg {
    background-repeat: no-repeat;
    object-fit: cover;
    background-image: url("{{url('public/images/app/footer.png') }}");
}


@font-face {
    font-family: Nexa Bold_0;
    src: url("{{url('public/fonts/Nexa Bold_0.otf') }}");
}


@font-face {
    font-family: Nexa Light_0;
    src: url("{{url('public/fonts/Nexa Light_0.otf') }}");

}

@font-face {
    font-family: Poppins-Bold;
    src: url("{{url('public/fonts/Poppins-Bold.ttf') }}");

}

@font-face {
    font-family: Poppins-Light;
    src: url("{{url('public/fonts/Poppins-Light.ttf') }}");

}

@font-face {
    font-family: Poppins-Medium;
    src:url("{{url('public/fonts/Poppins-Medium.ttf') }}");
}

@font-face {
    font-family: Poppins-Regular;
    src:url("{{url('public/fonts/Poppins-Regular.ttf') }}");

}

@font-face {
    font-family: Poppins-SemiBold;
    src:url("{{url('public/fonts/Poppins-SemiBold.ttf') }}");

}

@font-face {
    font-family: Roboto-Bold;
    src: url("{{url('public/fonts/Roboto-Bold.ttf') }}");

}

@font-face {
    font-family: Roboto-Light;
    src: url("{{url('public/fonts/Roboto-Light.ttf') }}");

}

@font-face {
    font-family: Roboto-Medium;
    src: url("{{url('public/fonts/Roboto-Medium.ttf') }}");

}

@font-face {
    font-family: Roboto-Regular;
    src: url("{{url('public/fonts/Roboto-Regular.ttf') }}");

}


@font-face {
    font-family: PlayfairDisplay-Bold;
    src: url("{{url('public/fonts/PlayfairDisplay-Bold.ttf') }}");

}

@font-face {
    font-family: PlayfairDisplay-Medium;
    src: url("{{url('public/fonts/PlayfairDisplay-Medium.ttf') }}");
}

@font-face {
    font-family: PlayfairDisplay-Regular;
    src:url("{{url('public/fonts/PlayfairDisplay-Regular.ttf') }}");

}

@font-face {
    font-family: PlayfairDisplay-SemiBold;
    src: url("{{url('public/fonts/PlayfairDisplay-SemiBold.ttf') }}");

}


@font-face {
    font-family: Nexa Bold_0;
    src: url("{{url('public/fonts/Nexa Bold_0.otf') }}");
}


@font-face {
    font-family: Nexa Light_0;
    src: url("{{url('public/fonts/Nexa Light_0.otf') }}");

}

@font-face {
    font-family: Poppins-Bold;
    src: url("{{url('public/fonts/Poppins-Bold.ttf') }}");

}

@font-face {
    font-family: Poppins-Light;
    src: url("{{url('public/fonts/Poppins-Light.ttf') }}");

}

@font-face {
    font-family: Poppins-Medium;
    src:url("{{url('public/fonts/Poppins-Medium.ttf') }}");
}

@font-face {
    font-family: Poppins-Regular;
    src:url("{{url('public/fonts/Poppins-Regular.ttf') }}");

}

@font-face {
    font-family: Poppins-SemiBold;
    src:url("{{url('public/fonts/Poppins-SemiBold.ttf') }}");

}

@font-face {
    font-family: Roboto-Bold;
    src: url("{{url('public/fonts/Roboto-Bold.ttf') }}");

}

@font-face {
    font-family: Roboto-Light;
    src: url("{{url('public/fonts/Roboto-Light.ttf') }}");

}

@font-face {
    font-family: Roboto-Medium;
    src: url("{{url('public/fonts/Roboto-Medium.ttf') }}");

}

@font-face {
    font-family: Roboto-Regular;
    src: url("{{url('public/fonts/Roboto-Regular.ttff') }}");

}


@font-face {
    font-family: PlayfairDisplay-Bold;
    src: url("{{url('public/fonts/PlayfairDisplay-Bold.ttf') }}");

}

@font-face {
    font-family: PlayfairDisplay-Medium;
    src: url("{{url('public/fonts/PlayfairDisplay-Medium.ttf') }}");
}

@font-face {
    font-family: PlayfairDisplay-Regular;
    src:url("{{url('public/fonts/PlayfairDisplay-Regular.ttf') }}");

}

@font-face {
    font-family: PlayfairDisplay-SemiBold;
    src: url("{{url('public/fonts/PlayfairDisplay-SemiBold.ttf') }}");

}

.playfair-semibold {
    font-family: PlayfairDisplay-SemiBold;
}

.playfair-regular {
    font-family: PlayfairDisplay-Regular;
}

.playfair-medium {
    font-family: PlayfairDisplay-Medium;
}

.playfair-bold {
    font-family: PlayfairDisplay-Bold;
}


.roboto-bold {
    font-family: Roboto-Bold;
}

.roboto-light {
    font-family: Roboto-Light;
}

.roboto-medium {
    font-family: Roboto-Medium;
}

.roboto-regular {
    font-family: Roboto-Regular;
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

.login-bg {
    background-repeat: no-repeat;
    object-fit: cover;
    background-image: url("{{url('public/images/app/Group4.png') }}");
}
.hide
{
    display:none;
}
/* new style start */
.font_text {
    color: #0B9E00;
}

.fa-question-circle {
    color: #751FFF;
}

.linebottomform {
    display: block;
    width: 8em;
    margin: 0em auto 0em;
    border-bottom: 3px solid #751fff;
}

.linebottomlock {
    display: block;
    width: 8em;
    margin: 0em auto 0em;
    border-bottom: 3px solid #ffffff;
}

.lockbtn {
    background: #FFBD09;
}
</style>
</html>
