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

.logo img {
  max-width: 150px; /* Adjust as needed */
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

.hero a {
}

.hero-logo img {
  max-width: 150px;
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
    background-color: #f0f0f0;
    padding: 40px 0;
}

.benefit-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.benefit-logo img {
    max-width: 150px;
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


footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}
  </style>

  <body>
    <header>
      <div class="container">
        <div class="header-content">
          <div class="logo">
            <img
              src="{{ asset('images/schoolpedia-logo.png') }}"
              alt="SchoolPedia Logo"
            />
          </div>
          <div class="nav-links">
            <nav>
              <ul>
                <li><a href="#">Cari Sekolah</a></li>
                <li><a href="#">Lihat Lokasi</a></li>
                <li><a href="#">Peringkat Sekolah</a></li>
              </ul>
            </nav>
          </div>
          <div class="search">
            <input type="text" placeholder="Cari Sekolah..." />
            <button>Cari</button>
          </div>
        </div>
      </div>
    </header>

    <!-- ... -->
    <main>
      <section class="hero">
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
                <a href="#" class="btn">Cari Sekolah</a>
                <a href="#" class="btn">Lihat Lokasi</a>
                <a href="#" class="btn">Peringkat Sekolah</a>
              </div>
            </div>
            <div class="hero-logo">
              <img
                src="{{ asset('images/schoolpedia-logo.png') }}"
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
            <button class="btn-large">Cari</button>
          </div>
        </div>
      </section>

      <section class="benefit">
        <div class="container">
          <div class="benefit-content">
            <div class="benefit-logo">
              <img
                src="{{ asset('images/schoolpedia-logo.png') }}"
                alt="SchoolPedia Logo"
              />
            </div>
            <div class="benefit-text">
              <h2>Benefit website</h2>
              <img
                src="{{ asset('images/benefit-image-1.jpg') }}"
                alt="Benefit Image 1"
                class="benefit-image"
              />
              <p>
                Informasi Sekolah Terpadu: SchoolPedia memberikan akses mudah ke
                informasi lengkap tentang berbagai sekolah, membantu pengguna
                dalam memilih sekolah yang sesuai dengan kebutuhan mereka.
              </p>
              <img
                src="{{ asset('images/benefit-image-2.jpg') }}"
                alt="Benefit Image 2"
                class="benefit-image"
              />
              <p>
                Transparansi Pendidikan: Pengguna dapat dengan cepat memeriksa
                prestasi sekolah, fasilitas, dan informasi penting lainnya,
                meningkatkan transparansi dalam dunia pendidikan.
              </p>
              <img
                src="{{ asset('images/benefit-image-3.jpg') }}"
                alt="Benefit Image 3"
                class="benefit-image"
              />
              <p>
                Kemudahan Pengambilan Keputusan: Informasi yang disajikan
                membantu pengguna membuat keputusan pendidikan yang
                terinformasi, memungkinkan mereka untuk merencanakan masa depan
                pendidikan dengan lebih baik.
              </p>
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
                src="{{ asset('images/team-member-1.jpg') }}"
                alt="John Doe"
              />
              <h3>Martvelino Tri Wijanarko</h3>
              <p>Web Developer</p>
              <p>
                John is a skilled web developer with a passion for creating
                interactive and user-friendly websites.
              </p>
            </div>
            <div class="team-member">
              <img
                src="{{ asset('images/team-member-2.jpg') }}"
                alt="Jane Smith"
              />
              <h3>Muhammad Adzinul Hakim</h3>
              <p>UX/UI Designer</p>
              <p>
                Jane is a talented UX/UI designer with a keen eye for creating
                visually appealing and intuitive designs.
              </p>
            </div>
            <div class="team-member">
              <img
                src="{{ asset('images/team-member-3.jpg') }}"
                alt="Bob Johnson"
              />
              <h3>Ahmad Dare Maftuhim</h3>
              <p>Software Engineer</p>
              <p>
                Bob is a dedicated software engineer who loves solving complex
                problems and building scalable applications.
              </p>
            </div>
            <!-- Tambahkan anggota tim lainnya sesuai kebutuhan -->
          </div>
        </div>
      </section>
    </main>
    <!-- ... -->

    <footer>
      <div class="container">
        <p>&copy; 2023 SchoolPedia. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
