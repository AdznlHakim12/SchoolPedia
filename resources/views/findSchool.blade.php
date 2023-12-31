<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Menetapkan tinggi elemen ke 100% tinggi viewport */
            padding: 20px 0; /* Perpendek jarak bagian atas dan bawah */
        }
        
        .image-row {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 0px; /* Perpendek jarak antara baris */
            gap: 5px; /* Perpendek jarak antara elemen-elemen child */
        }
        
        .image-box {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            text-align: center;
        }
        
        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .image-box .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
        }
        
        .image-box:hover .overlay {
            opacity: 1;
        }
        
        .image-box .overlay-content {
            color: #fff;
            text-align: center;
        }
        
        .image-box .overlay-content a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        
        .image-box .overlay-content a:hover {
            text-decoration: underline;
        }

        .center{
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #C07F00;
        }
    </style>
    <title>Cari Sekolahmu</title>
</head>

<body>
@include('components.header');

<!--body-->
<div class="w-full text-gray-700 md:text-center text-5xl font-semibold pt-20">
    Cari Sekolahmu
</div>
<div class="w-full text-gray-700 md:text-center text-5xl text-base-6 py-4">
    Form untuk mencari sekolah.
</div>

<div class="container w-1/2 mx-auto px-4">
    <form  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label for="nama" class="mb-2 text-sm font-medium text-gray-900 sr-only">Nama Sekolah</label>
                <input type="text" id="nama" name="nama" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
                    placeholder="Nama Sekolah" required>
            </div>

            <div>
                <label for="alamat" class="mb-2 text-sm font-medium text-gray-900 sr-only">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500" 
                    placeholder="Alamat" required>
            </div>

            <div>
                <label for="jenis_kelamin" class="mb-2 text-sm font-medium text-gray-900 sr-only">Kecamatan</label>
                <div class="relative inline-block w-full text-gray-700">
                    <select id="jenis_kelamin" name="jenis_kelamin" class="w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500">
                        <option value="" disabled selected>Kecamatan</option>
                        <option value="Blimbing">Blimbing</option>
                        <option value="Kedungkandang">Kedungkandang</option>
                        <option value="Klojen">Klojen</option>
                        <option value="Lowokwaru">Lowokwaru</option>
                        <option value="Sukun">Sukun</option>
                    </select>
                </div>
            </div>
        </div>

        <a href="/profilSchool"> 
            <button type="submit" class="text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-4 py-2 mt-4">
             Kirim
             </button>
        </a>

       
    </form>

    @if(session('success'))
        @include('article.success-popup')
    @endif
</div>

@include('components.footer')
</body>

</html>