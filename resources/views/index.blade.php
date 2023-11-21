<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SchoolPedia</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <style>
/* Reset some default styles */
body,
h1,
h2,
h3,
p,
ul {
  margin: 0;
  padding: 0;
}

body {
  font-family: "Arial", sans-serif;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.header-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.hero-buttons {
    display: flex;
    align-items: center;
}

.hero-buttons a {
    margin-right: 10px;
}

.hero-buttons a.btn {
    background-color: #1d5d9b;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.hero-buttons a.btn {
    background-color: #1d5d9b;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.hero-buttons a.btn:hover {
    background-color: #144173;
}

.logo img {
  max-width: 200px; /* Adjust as needed */
  margin-top: 68px;
}

.nav-links {
  margin-right: auto; /* Push the search to the right */
}

.search {
  display: flex;
  align-items: center;
}

.search input {
  padding: 8px;
  width: 200px;
}

.search button {
  padding: 8px 15px;
  background-color: #fff;
  color: #333;
  border: none;
  border-radius: 5px;
  margin-left: 10px;
  cursor: pointer;
}

.search button:hover{
  color: #0066cc; /* Mengganti warna teks saat dihover */
}

/* header h1 {
  font-size: 1.5em;
} */

nav ul {
  list-style: none;
  display: flex;
}

nav ul li {
  margin-right: 20px;
}

nav a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}

main {
  padding: 40px 0;
}

.hero {
  text-align: left;
  background-color: #1d5d9b;
  padding: 60px 0;
}

.hero-text p {
    max-width: 500px; /* Sesuaikan lebar maksimal sesuai kebutuhan */
    white-space: normal;
    padding: 10px 0; /* Sesuaikan dengan kebutuhan */
}

.hero-text p span {
    display: block;
    white-space: normal;
}

.hero-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.hero h2 {
  font-size: 3em;
  margin-bottom: 20px;
  color: #fff;
}

.hero p {
  color: #fff;
  margin-bottom: 20px;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Jumlah baris yang ingin ditampilkan */
  -webkit-box-orient: vertical;
}


.hero-logo img {
  max-width: 300px;
}

.btn {
    font-family: "Poppins";
    display: inline-block;
    padding: 10px 20px;
    background-color: #fff;
    font-weight: bold
    color: #1d5d9b;
    text-decoration: none;
    border-radius: 5px;
}

.btn:hover {
    color: #0066cc; /* Mengganti warna teks saat dihover */
}

.features {
    background-color: #fff;
    padding: 40px 0;
    text-align: center; /* Menyusun elemen ke tengah-tengah */
}

.features h2 {
    font-size: 2.5em;
    color: #1d5d9b;
    margin-bottom: 20px;
}

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

.btn-large {
    display: inline-block;
    padding: 15px 30px; /* Ukuran tombol yang lebih besar */
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

.btn-large:hover {
    color: #0066cc;
}

.benefit {
    background-color: #DBDBDB;
    padding: 40px 0;
}

.benefit-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.benefit-logo img {
    max-width: 300px;
}

.benefit-text {
    width: 40%; /* Mengubah lebar teks benefit */
}

.benefit-images {
    width: 40%; /* Mengubah lebar gambar benefit */
    display: flex;
    justify-content: space-between;
}

.benefit-image img {
    max-width: 100%;
    height: auto;
}

.benefit h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #0066cc;
}

.benefit p {
    margin-bottom: 15px;
}

/* ... */
.our-team {
    padding: 40px 0;
    text-align: center;
}

.team-heading {
    font-size: 2em;
    color: #333;
    margin-bottom: 20px;
}

.team-members {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.team-member {
    width: 30%;
    text-align: center;
    margin-bottom: 20px;
}

.team-member img {
    max-width: 100%;
    border-radius: 50%;
}

.team-member h3 {
    margin: 10px 0;
    font-size: 1.5em;
    color: #333;
}

.team-member p {
    color: #777;
}
/* ... */


.footer {
    background-color: #1d5d9b;
    padding: 20px 0;
}

.footer-content {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
}

.footer-logo img {
    max-width: 100px;
}

.footer-text p {
    max-width: 300px;
    margin: 10px 0;
}

.footer-social img {
    max-width: 30px;
    margin: 0 10px;
}

.footer-contact span {
    display: block;
    margin: 5px 0;
}

  </style>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <body>
  @include('components.header')
    <!-- <header>
      <div class="container">
        <div class="header-content">
          <div class="logo">
            <img
              src="{{ asset('img/SchoolPedia.png') }}"
              alt="SchoolPedia Logo"
            />
          </div>
          <div class="hero-buttons"> -->
                    <!-- <a href="#" class="btn">Cari Sekolah</a> -->
                    <!-- <a href="#" class="btn">Login Admin</a>
                    <a href="#" class="btn">Lihat Lokasi</a>
                    <a href="#" class="btn">Peringkat Sekolah</a>
                </div>
          <div class="search">
            <input type="text" placeholder="Cari Sekolah..." />
            <button>Cari</button>
          </div>
        </div>
      </div>
    </header> -->

    <!-- ... -->
    <main>
      <section class="hero bg-blue-500">
        <div class="container">
          <div class="hero-content">
            <div class="hero-text">
              <h2>SchoolPedia</h2>
              <p>
                <span
                  >SchoolPedia merupakan platform website yang didedikasikan
                  untuk</span
                >
                <span
                  >memberikan informasi yang sangat berguna tentang
                  berbagai</span
                >
                <span>sekolah di seluruh wilayah Kota Malang.</span>
              </p>
              <div class="hero-buttons">
                <a href="/findSchool" class="btn">Cari Sekolah</a>
                <a href="/findLocation" class="btn">Lihat Lokasi</a>
                <a href="#" class="btn">Peringkat Sekolah</a>
              </div>
            </div>
            <div class="hero-logo">
              <img
                src="{{ asset('img/logo.png') }}"
                alt="SchoolPedia Logo"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="features">
        <div class="container">
          <h2>CARI SEKOLAH</h2>
          <div class="search">
            <input type="text" placeholder="Nama Sekolah" />
            <a href="/findSchool">
            <button class="btn-large">Cari</button>
            </a>
          </div>
        </div>
      </section>

      <section class="benefit">
        <div class="container">
          <div class="benefit-content">
            <div class="benefit-logo">
              <img src="{{ asset('img/logo.png') }}" alt="SchoolPedia Logo" />
            </div>
            <div class="benefit-text">
              <h2>Benefit website</h2>

              <ul>
                <li>
                  <p>Informasi Sekolah Terpadu: SchoolPedia memberikan akses mudah ke informasi lengkap tentang berbagai sekolah, membantu pengguna dalam memilih sekolah yang sesuai dengan kebutuhan mereka.</p>
                </li>
                <li>
                  <p>Transparansi Pendidikan: Pengguna dapat dengan cepat memeriksa prestasi sekolah, fasilitas, dan informasi penting lainnya, meningkatkan transparansi dalam dunia pendidikan.</p>
                </li>
                <li>
                  <p>Kemudahan Pengambilan Keputusan: Informasi yang disajikan membantu pengguna membuat keputusan pendidikan yang terinformasi, memungkinkan mereka untuk merencanakan masa depan pendidikan dengan lebih baik.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>


      <section class="our-team">
        <div class="container">
          <h2 class="team-heading">OUR TEAM</h2>
          <div class="team-members">
            <div class="team-member">
              <img
                src="{{ asset('img/Marvel.jpg') }}"
                alt="Martvelino Tri"
              />
              <h3>Martvelino Tri Wijanarko</h3>
              <p>215150607111006</p>
              <p>
                Lahir pada tanggal 24 Maret 2003, dan bertempat tinggal asli di Kediri, Jawa Timur.
              </p>
            </div>
            <div class="team-member">
              <img
                src="{{ asset('img/Dare.jpeg') }}"
                alt="Ahmad Dare"
              />
              <h3>Ahmad Dare Maftuhim</h3>
              <p>215150601111004</p>
              <p>
                Lahir pada tanggal 8 Julis 2002, dan bertempat tinggal asli di Kab. Kediri, Jawa Timur.
              </p>
            </div>
            <div class="team-member">
              <img
                src="{{ asset('img/Adzin.jpeg') }}"
                alt="Mugammad Adzinul"
              />
              <h3>Muhammad Adzinul Hakim</h3>
              <p>215150601111007</p>
              <p>
                Lahir pada tanggal 13 Agustus 2003, dan bertempat tinggal asli di Kab. Blitar, Jawa Timur.
              </p>
            </div>
            <!-- Tambahkan anggota tim lainnya sesuai kebutuhan -->
          </div>
        </div>
      </section>
    </main>
    <!-- ... -->

    <!-- <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-left">
                <div class="footer-logo">
                    <img
                        src="{{ asset('img/Logo.png') }}"
                        alt="SchoolPedia Logo"
                    />
                </div>
                <p>Jelajah ragam sekolah wilayah Malang Raya melalui website informatif.</p> <br>
                <div class="footer-social">
                    <p>
                        <img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram Logo">
                        <img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook Logo">
                        <img src="{{ asset('images/twitter-icon.png') }}" alt="Twitter Logo">
                    </p>
                </div>
            </div>
            <div class="footer-right">
                <div class="footer-contact">
                  <h3>Hubungi Kami :</h3>
                    <p>
                        <span>Jl. Veteran, Ketawanggede, Lowokwaru, Kota Malang, Jawa Timur.</span>
                        <span>+6281234567890</span>
                        <span>SchoolPedia@gmail.com</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer> -->

@include('components.footer')

  </body>
</html>
