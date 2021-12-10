<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proparty santa</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="{{ url('/public/style.css') }}">
    <link rel="stylesheet" href="{{ url('/public/forntend/css/style.css') }}">
    <script src="{{ url('public/js/app.js') }}"></script> 
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        crossorigin="anonymous">
</head>
<style>
    body,
    .heading {
        font-family: Roboto;
    }

    .mainCard::before {
        content: '';
        width: 21px;
        height: 100px;
        background-color: transparent;
        position: absolute;
        border-left: 4px solid #7c3aed;
        top: 21%;
        border-bottom: 4px solid #7c3aed;
        border-top: 4px solid #7c3aed;
        left: 5%;
    }

    .mainCard::after {
        content: '';
        width: 21px;
        height: 100px;
        background-color: transparent;
        position: absolute;
        border-right: 4px dashed #7c3aed;
        top: 35%;
        border-bottom: 4px dashed #7c3aed;
        border-top: 4px dashed #7c3aed;
        left: 33.5%;
    }

    @media screen and (max-width: 768px) {
        .mainCard::before {
            left: 12.5%;
        }

        .mainCard::after {
            left: 83.4%;
        }
    }
</style>

<body>
    <div class="xl:container h-full w-full m-auto flex">

        <div class="sidebar w-64 max-h-full h-screen bg-purple-600 rounded-l-3xl pr-9">
            <div class="logo pt-5 px-6">
                <a href="#">
                    <img class="w-full" src="{{ url('public/assets/logo.png') }}" alt="">
                </a>
            </div>
            <div class="links bg-white mt-5 justify-center items-center flex py-2">
                <a class="flex" href="#">
                    <div class="flex pt-1 mr-2">
                        <i class="fa fa-home text-purple-600"></i>
                    </div>
                    <div>
                        <h1 class="font-bold text-small">Relaigh, NC</h1>
                        <p class="text-extraSmall font-thin">Primary residance </br> Single Family </p>
                    </div>
                </a>
            </div>
        </div>
        <div
            class="content w-full h-screen pt-5 px-7 bg-gray-100 rounded-3xl relative -left-9 overflow-y-scroll md:overflow-y-hidden">
            <div class="head-section flex justify-between mb-4">
                <div class="page-heading-section">
                    <h1 class="heading text-medium text-purple-600 font-bold">Dashboard</h1>
                </div>
                <div class="logout-section">
                    <a href="#" class="text-red-500 text-small underline">Logout</a>
                </div>
            </div>
            <div class="under-section">
                <!-- top cards -->
                <div class="base-cards md:flex">
                    <!-- work card -->
                    <div class="card work-card w-full  md:w-2/5 mb-6">
                        <div class="card-heading mb-2">
                            <h1 class="text-headings font-bold">Work Summery</h1>
                        </div>
                        <div class="mainCard bg-white py-4 rounded-xl md:w-11/12 shadow-xl">
                            <!-- <img class="w-11/12" src="../assets/Group 40091.png" alt=""> -->
                            <!-- card1 -->
                            <div
                                class="card1 w-9/12 flex justify-around shadow-lg bg-white  m-auto mb-5 py-2 px-2 rounded-xl">
                                <div class="w-14 text-center">
                                    <div
                                        class="text-extraSmall m-auto bg-purple-600 w-6 h-6 flex justify-center items-center rounded-full text-white">
                                        1
                                    </div>
                                    <div>
                                        <p class="text-extraSmall text-gray-500">Completed</p>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-purple-600 text-midSmall">lorem ipsum</p>
                                    <p class="text-purple-600 text-small">lorem ipsum</p>
                                    <p class="text-gray-400 text-extraSmall">lorem ipsum</p>
                                </div>
                            </div>
                            <!-- card2 -->
                            <div
                                class="card2 w-9/12 flex justify-around shadow-lg bg-white m-auto mb-5 py-2 px-2 rounded-xl ">
                                <div class="w-14 text-center">
                                    <div
                                        class="text-extraSmall text-purple-600 m-auto bg-white border-purple-600 border w-6 h-6 flex justify-center items-center rounded-full">
                                        2
                                    </div>
                                    <div>
                                        <p class="text-extraSmall text-gray-500">Completed</p>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-purple-600 text-midSmall">lorem ipsum</p>
                                    <p class="text-purple-600 text-small">lorem ipsum</p>
                                    <p class="text-gray-400 text-extraSmall">lorem ipsum</p>
                                </div>
                            </div>
                            <!-- card3 -->
                            <div
                                class="card3 w-9/12 flex justify-around shadow-lg bg-white m-auto mb-5 py-2 px-2 rounded-xl ">
                                <div class="w-14 text-center">
                                    <div
                                        class="text-extraSmall m-auto bg-gray-400 w-6 h-6 flex justify-center items-center rounded-full text-gray-500 border border-gray-500">
                                        3
                                    </div>
                                    <div>
                                        <p class="text-extraSmall text-gray-500">Completed</p>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-purple-600 text-midSmall">lorem ipsum</p>
                                    <p class="text-purple-600 text-small">lorem ipsum</p>
                                    <p class="text-gray-400 text-extraSmall">lorem ipsum</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Upcoming Task Card -->
                    <div class="card work-card w-full md:w-3/5">
                        <div class="card-heading mb-2">
                            <h1 class="text-headings font-bold">Upcoming Tasks</h1>
                        </div>
                        <div class="card-body bg-white rounded-t-xl shadow-xl">
                            <table class="table-fixed w-full">
                                <thead class="text-left border-b">
                                    <tr>
                                        <th class="px-2 py-1 text-small">Task Name</th>
                                        <th class="text-small">Process/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="px-4 py-2">
                                            <div class="w-14 text-center">
                                                <div
                                                    class="text-extraSmall m-auto bg-purple-600 w-7 h-7 flex justify-center items-center rounded-full text-white">
                                                    1
                                                </div>
                                                <div>
                                                    <p class="text-extraSmall text-purple-600">Completed</p>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <p class="text-purple-600 text-midSmall">lorem ipsum</p>
                                            <p class="text-purple-600 text-small">lorem ipsum</p>
                                            <p class="text-gray-400 text-extraSmall">lorem ipsum</p>
                                        </td>

                                    </tr>
                                    <tr class="border-b">
                                        <td class="px-4 py-2">
                                            <div class="w-14 text-center">
                                                <div
                                                    class="text-extraSmall m-auto bg-purple-600 w-7 h-7 flex justify-center items-center rounded-full text-white">
                                                    1
                                                </div>
                                                <div>
                                                    <p class="text-extraSmall text-purple-600">Completed</p>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <p class="text-purple-600 text-midSmall">lorem ipsum</p>
                                            <p class="text-purple-600 text-small">lorem ipsum</p>
                                            <p class="text-gray-400 text-extraSmall">lorem ipsum</p>
                                        </td>

                                    </tr>
                                    <tr class="border-b">
                                        <td class="px-4 py-2">
                                            <div class="w-14 text-center">
                                                <div
                                                    class="text-extraSmall m-auto bg-purple-600 w-7 h-7 flex justify-center items-center rounded-full text-white">
                                                    1
                                                </div>
                                                <div>
                                                    <p class="text-extraSmall text-purple-600">Completed</p>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <p class="text-purple-600 text-midSmall">lorem ipsum</p>
                                            <p class="text-purple-600 text-small">lorem ipsum</p>
                                            <p class="text-gray-400 text-extraSmall">lorem ipsum</p>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- bottom card -->
                <!-- completed work summery Card -->
                <div class="bottom-card">
                    <div class="card work-card ">
                        <div class="card-heading mb-2">
                            <h1 class="text-headings font-bold">completed work summery</h1>
                        </div>
                        <div class="card-body bg-white rounded-t-2xl shadow-xl">
                            <table class="table-fixed w-full">
                                <thead class="text-left border-b">
                                    <tr>
                                        <th class="px-2 py-1 text-small w-3/5">Task Name</th>
                                        <th class="text-small">Process/Time</th>
                                        <th class="text-small">Report</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="px-4 py-2">
                                            <div class="w-14 text-center">
                                                <div
                                                    class="text-extraSmall m-auto bg-purple-600 w-7 h-7 flex justify-center items-center rounded-full text-white">
                                                    1
                                                </div>
                                                <div>
                                                    <p class="text-extraSmall text-purple-600">Completed</p>
                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                            <p class="text-purple-600 text-midSmall">lorem ipsum</p>
                                            <p class="text-purple-600 text-small">lorem ipsum</p>
                                            <p class="text-gray-400 text-extraSmall">lorem ipsum</p>

                                        </td>
                                        <td>
                                            <a href="#"> <i class="fas fa-download ml-2"></i></a>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>