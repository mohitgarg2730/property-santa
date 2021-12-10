@extends('forntend.layouts.index')


@section('content')
        <!-- header start -->
       
           <style>
               .login-bg.rounded-bl-3xl
               {
                   height : 500px;
               }
           </style>
        <!-- header ends -->
        <div class="flex w-full h-full justify-center">
            <div class="w-9/12 my-10 flex justify-between shadow-xl rounded-3xl border border-purple-300">

                <div class="login-bg rounded-bl-3xl" style="width:55%">
                </div>
                <div class="flex flex-col py-12 justify-center login-screen hide" style="width:45%">
                    <h1 class="playfair-bold text-3xl text-purple-600 text-center">Login</h1>
                    <div class="mt-8">
                        <form class="flex flex-col items-center" method="POST"
                            action="{{ url('forntendLoginVerify') }}">
                            @csrf
                            <input type="email" name="email" placeholder=""
                                class="border border-purple-700 rounded-lg p-2 w-9/12">
                            <input type="Password" name="password" placeholder=""
                                class="mt-2 border border-purple-700 rounded-lg p-2 w-9/12">
                            <button
                                class="nexa_bold text-base border bg-purple-700 text-white rounded-lg p-2 w-9/12 mt-12 text-center">Continue</button>
                            <h3 class="poppins_mediam text-sm mt-1">Already have an account ? <a href="#"
                                    class="poppins_bold text-purple-700 underline signin-button">Signup</a></h3>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col py-12 justify-center signin-screen" style="width:45%">
                    <h1 class="playfair-bold text-3xl text-purple-600 text-center">Signup</h1>
                    <div class="mt-8">
                        <form class="flex flex-col items-center" method="POST"
                            action="{{ url('forntend/signup') }}">
                            @csrf
                            <input type="email" name="email" placeholder="Email"
                                class="border border-purple-700 rounded-lg p-2 w-9/12">
                            <input type="Password" name="password" id="txtNewPassword" placeholder="Password"
                                class="mt-2 border border-purple-700 rounded-lg p-2 w-9/12">
                            <input type="cpwd" id="txtConfirmPassword" name="password" placeholder="Confirm password"
                                class="mt-2 border border-purple-700 rounded-lg p-2 w-9/12">
                                <div class="registrationFormAlert" style="color:red;" id="CheckPasswordMatch">
</div>
                            <button
                                class="nexa_bold text-base border bg-purple-700 text-white rounded-lg p-2 w-9/12 mt-12 text-center conitnue-button" disabled>Continue</button>
                            <h3 class="poppins_mediam text-sm mt-1">Already have an account ? <a href="#"
                                    class="poppins_bold text-purple-700 underline login-button">Login</a></h3>
                     
                     
                     
                     
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
      function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
        {
            $("#CheckPasswordMatch").html("Passwords does not match!");
            $(".conitnue-button").prop("disabled", true);
            // alert('');
        }
        else
        {
            $("#CheckPasswordMatch").html("<p style='color:green;'>Passwords match.<p>");

           $(".conitnue-button").removeAttr( "disabled" );
        }
    }
    $(document).ready(function () {
       $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });
    $('.login-button').click(function () {

        $('.signin-screen').hide();
        $('.login-screen').removeClass('hide');
        $('.login-screen').show();


    });
    $('.signin-button').click(function () {

        $('.login-screen').hide();
        $('.signin-screen').show();


    });


</script>
@stop