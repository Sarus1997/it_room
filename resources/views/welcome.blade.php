<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- bootsyrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<style>
    body {
        background-color: #fff;
    }

    .glow-on-hover {
        width: 220px;
        height: 50px;
        border: none;
        outline: none;
        color: #fff;
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
    }

    .glow-on-hover:before {
        content: '';
        background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(10px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing 20s linear infinite;
        opacity: 0;
        transition: opacity .3s ease-in-out;
        border-radius: 10px;
    }

    .glow-on-hover:active {
        color: #000
    }

    .glow-on-hover:active:after {
        background: transparent;
    }

    .glow-on-hover:hover:before {
        opacity: 1;
    }

    .glow-on-hover:after {
        z-index: -1;
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: #111;
        left: 0;
        top: 0;
        border-radius: 10px;
    }

    @keyframes glowing {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .animate-charcter {
        text-transform: uppercase;
        background-image: linear-gradient(-225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #00ffae 100%);
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
        font-size: 35px;
    }

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }
</style>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #111;">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="https://www.pce-th.com/">
                    <img src="https://www.pce-th.com/images/pce.png" alt="pce" height="25" width="35" style="margin-right: 10px;">
                    <span style="color: #FCB040; font-size: 15px;"> Pce-th</span>
                </a>
            </div>
        </nav>


        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="animate-charcter"> Information Technology</h3>
                </div>
            </div>
        </div>
        <div class="container-ms" style="position: relative;">
            <img src="{{ asset('storage/it_room2.jpg') }}" alt="แผนกไอที" height="1920px" width="100%">
            <a href="/team">
                <button class="glow-on-hover btn btn-outline-dark" type="button" style="position: absolute; top: 20%; left: 80%; transform: translate(-50%, -50%);  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);">Organize Chart</button>
            </a>
            <a href="/">
                <button class="glow-on-hover" type="button" style="position: absolute; top: 25%; left: 80%; transform: translate(-50%, -50%); box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);">Project on Hand</button>
            </a>
        </div>


    </div>

    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #111;">
            <span style="color: #FCB040; font-size: 20px;"> © 2020 Copyright : </span>
            <a href="https://www.pce-th.com/">
                <span style="color: #508FD8; font-size: 20px;"> pce-th.com</span>
            </a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
