<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Masuk SchoolPedia</title>
    <style>
        /* Tambahkan Style Untuk Pusatkan Konten */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            max-width: 1000px; /* Sesuaikan dengan kebutuhan */
            width: 100%;
            display: flex;
            justify-content: space-between;
            background-color: #1D5D9B; /* Sesuaikan dengan warna latar belakang yang diinginkan */
            padding: 20px; /* Sesuaikan dengan kebutuhan */
            border-radius: 10px; /* Sesuaikan dengan kebutuhan */
        }

        .login-form {
            flex: 2;
            margin-right: 5px;
            background-color: #FFFFFF; /* Ganti dengan warna yang diinginkan */
        }

        .login-container img {
            width: 80%; /* Logo akan mengambil lebar penuh */
            max-height: 1000px; /* Sesuaikan dengan kebutuhan */
            margin-bottom: 20px;
        }

    </style>
</head>

<body class="font-poppins">
    <section class="login-container">
        <!-- Box Logo dan Form Login -->
        <div class="login-form">
            <img src="{{ asset('/img/logo.png') }}" alt="Logo" class="w-full max-h-10 mb-3 logo">
            <div class="rounded-lg shadow sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                        Masuk
                    </h1>
                    <form method="POST" class="space-y-4 md:space-y-6" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <x-input-label for="email" class="block mb-2 text-sm font-medium text-gray-900 " :value="__('Email')" />
                            <x-text-input id="email" placeholder="Masukkan Email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="password" class="block mb-2 text-sm font-medium text-gray-900 " :value="__('Kata Sandi')" />
                            <x-text-input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                                    </label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary hover:underline ">{{ __('Lupa Sandi') }}</a>
                            @endif
                        </div>
                        <button type="submit" class="w-full text-white bg-indigo-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{{ __('Masuk') }}</button>
                        <p class="text-sm font-light text-gray-500 text-center">
                            Belum punya akun? <a href="{{ route('register') }}" class="font-medium text-primary hover:underline">Daftar Akun</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <!-- Box Gambar -->
        <div class="flex items-center justify-center">
            <img src="{{ asset('/img/sekolah.jpg') }}" alt="" class="w-full h-auto max-h-screen">
        </div>
    </section>
</body>

</html>
