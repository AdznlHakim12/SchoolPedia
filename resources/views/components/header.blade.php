<style>
    .search {
    display: flex;
    justify-content: center; /* Menyusun elemen ke tengah-tengah */
    align-items: center;
    margin-top: 20px; /* Menambahkan sedikit jarak di atas elemen pencarian */
}

.search input {
    padding: 10px;
    margin-right: 10px;
}
</style>
<div class="w-full mx-auto bg-blue-500 fixed top-0 z-10">
    <div class="w-full flex items-center justify-between">
        <div class="flex items-center">
            <a class="flex items-center text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl ml-5"
                href=" ">
                <!-- <img src="{{ asset('img/SchoolPedia.png') }}" alt="SchoolPedia Logo"> -->
                <!-- <x-application-logo class="block h-8 pr-2 w-auto fill-current" /> -->
                <span class="font-semibold text-lg md:text-xl">S C H O O L P E D I A</span>
            </a>
        </div>
        <div class="flex items-center space-x-4 px-6">
            <a href="#"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Lihat Lokasi
            </a>

            <a href="/findSchool" class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                <button>Cari Sekolah</button>
            </a>

            <a href="/dashboard"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Login Admin
            </a>
            <div class="relative ml-auto mx-5">
                <div class="relative inline-block">
                    <a href="#"
                        class="inline-block" text-yellow-400 bg-white no-underline text-center h-10 w-10 rounded-full flex items-center justify-center transform hover:scale-105 duration-300 ease-in-out"
                        id="profileButton">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div
                        class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg hidden"
                        id="profileOptions">
                        <a href="/profile/profile_adopter"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Edit Profile</a>
                        <a href="/logout"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Sign Out</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.fa-user').click(function() {
            $('#profileOptions').toggleClass('hidden');
        });
    });
</script>
