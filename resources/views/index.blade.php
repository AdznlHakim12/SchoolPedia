<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SchoolPedia</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
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
