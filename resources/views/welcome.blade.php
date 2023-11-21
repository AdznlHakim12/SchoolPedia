<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SchoolPedia</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
        }
        .bg-utama{
         background-image: url('/img/Backgorund.jpg');
         background-size: 100%;
         background-position: center;
         text-align: center;
         height: 100%;
         width: 100%;
         display: table;
         vertical-align: middle;
         }
         h1,p{color: white;}
         .konten-ditengah {
         display: table-cell;
         vertical-align: middle;
         }
         .bg-brown{
            background-color: #775949;
    }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body class="bg-utama">

<div class="h-full flex flex-col justify-between">
    <!--Nav-->
    <div class="w-full container mx-auto"><br>
        <div class="w-full flex items-center justify-between">
            <a class="flex items-center text-white-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
            href="{{ route('dashboard') }}">
                <!-- <x-application-logo class="block h-8 pr-2 w-auto fill-current" /> -->
                <span class="text-white font-semibold text-lg md:text-xl"></span>
            </a>
            <div class="flex w-1/2 justify-end content-center">
                <a href="{{ route('login') }}"
                class="inline-block text-white no-underline bg-blue-500 hover:bg-blue-300 hover:text-white text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out rounded-full">
                    Login Admin <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </a>
            </div>
        </div>
    </div>
    <br><br><br>
    <!--Main-->
    <div class="konten-ditengah text center">
        <div class="">
            <div class="">
                <h1 class="text-white text-4xl animated zoom-in">Selamat Datang di<strong class="text-dark"> SchoolPedia</strong></h1><br>
                <p class="text-white mb-4 animated zoom-in"><br>SchoolPedia merupakan platform website yang didedikasikan <br> untuk memberikan informasi yang sangat berguna tentang berbagai sekolah <br> di seluruh wilayah Kota Malang.</p><br><br>
                <a href="/getIndex" class="btn btn-light text-white rounded-full py-3 px-5 animated zoom-in border border-blue-500">Dashboard</a>
            </div>        
        </div>
    </div>
</div>
</body>
</html>