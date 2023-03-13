<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pemesanan | Rentalaku</title>
  <link rel="shortcutcut icon" href="../../../src/img/rentalaku-logo-orange.png">
  <link rel="stylesheet" href="../../../css/output.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="icon" href="./favicon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <!-- Header Start -->
  <header>
    <nav class="bg-white border-gray-200 px-4 md:px-16 py-2.5 rounded bg-transparent w-full fixed z-40">
      <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
          <img src="../../../src/img/rentalaku-logo-orange.png" class="mr-3 h-6 sm:h-8" alt="Rentalaku Logo">
          <span class="self-center text-base md:text-lg font-semibold whitespace-nowrap">RENTALAKU</span>
        </a>
        <div class="flex items-center md:order-2">
          <div id="profile-button" class="flex items-center cursor-pointer ">
            <!-- <i class="uil uil-angle-down"></i> -->
          </div>
          <!-- Dropdown menu -->
          <div id="profile" class="hidden fixed md:top-12 top-10 right-4 z-30 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow-md" id="user-dropdown">
            <div class="py-3 px-4">
              <span class="block text-sm text-gray-900">Justin Bieber</span>
              <span class="block text-sm font-medium text-gray-500 truncate">justinbieber@gmail.com</span>
            </div>
            <ul class="py-1" aria-labelledby="user-menu-button">
              <li>
                <a href="../history.html" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">History</a>
              </li>
              <li>
                <a href="../../../index.html" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Sign
                  out</a>
              </li>
            </ul>
          </div>
          <button data-collapse-toggle="mobile-menu-2" type="button" id="navbar-button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Navbar Menu -->
        <div id="navbar" class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
          <ul class="flex flex-col p-4 mt-4 md:bg-transparent bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-base md:font-medium md:border-0">
            <li>
              <a href="../home.html" id="home-page" class="block py-2 pr-4 pl-3 text-gray-700 rounded md:rounded-none md:focus:bg-transparent md:hover:bg-transparent md:hover:text-primary-500 md:p-0" aria-current="page">Home</a>
            </li>
            <li>
              <a href="#booking" id="booking-page" class="nav-active block py-2 pr-4 pl-3 text-gray-700 rounded md:rounded-none md:focus:bg-transparent md:hover:bg-transparent md:hover:text-primary-500 md:p-0">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header End -->

  <!-- Form Section Start -->
  <section id="booking" class="bg-white pt-36 pb-32">
    <div class="container xl:px-48 md:px-32 px-4 mx-auto max-w-screen-xl">
      <div class="w-full px-4">
        <div class="mx-auto mb-16 max-w-xl text-center">
          <h4 class="mb-2 text-lg font-semibold text-primary-600">Booking</h4>
          <h2 class="mb-4 md:text-3xl text-2xl font-bold text-dark sm:text-4xl lg:text-5xl">
            Pemesanan Sewa <span class="text-primary-600">Mobil</span>
          </h2>
        </div>
      </div>

      <form action="invoice.php" method="post" class="space-y-8 px-4">
        <div>
          <label for="nama" class="block mb-2 text-base font-medium text-gray-900">Nama lengkap</label>
          <input type="text" id="nama" name="nama" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Masukkan nama sesuai KTP" required>
        </div>
        <div>
          <label for="email" class="block mb-2 text-base font-medium text-gray-900">Alamat email</label>
          <input type="text" id="email" name="email" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Cth: nama@company.com" required>
        </div>
        <div>
          <label for="ktp" class="block mb-2 text-base font-medium text-gray-900">KTP & SIM A</label>
          <input type="file" id="ktp" name="ktp" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="">
        </div>
        <div>
          <label for="tipemobil" class="block mb-2 text-base font-medium text-gray-900">Tipe mobil</label>
          <select type="text" id="tipemobil" name="tipemobil" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Let us know how we can help you" required>
            <option value="Avanza">Avanza</option>
            <option value="Ertiga">Ertiga</option>
            <option value="Mobilio">Mobilio</option>
            <option value="Expander">Expander</option>
            <option value="Innova">Innova</option>
            <option value="Fortuner">Fortuner</option>
            <option value="Voxy">Voxy</option>
            <option value="Alphard">Alphard</option>
            <option value="Hiace">Hiace</option>
          </select>
        </div>
        <div>
          <label for="layanan" class="block mb-2 text-base font-medium text-gray-900">Pilih layanan</label>
          <div class="flex items-center mb-4">
            <input checked="" id="layanan-1" type="radio" value="Dengan sopir" name="layanan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
            <label for="layanan-1" class="ml-2 text-sm font-medium text-gray-900">Dengan sopir</label>
          </div>
          <div class="flex items-center">
            <input id="layanan-2" type="radio" value="Lepas kunci" name="layanan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
            <label for="layanan-2" class="ml-2 text-sm font-medium text-gray-900">Lepas kunci</label>
          </div>
        </div>
        <div>
          <label for="jangka" class="block mb-2 text-base font-medium text-gray-900">Lama sewa</label>
          <div class="flex">
            <div class="flex items-center mr-4">
              <input checked="" id="harian" type="radio" value="Sewa harian" name="lamasewa" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
              <label for="harian" class="ml-2 text-sm font-medium text-gray-900">Sewa harian</label>
            </div>
            <div class="flex items-center mr-4">
              <input id="bulanan" type="radio" value="Sewa bulanan" name="lamasewa" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
              <label for="bulanan" class="ml-2 text-sm font-medium text-gray-900">Sewa bulanan</label>
            </div>
          </div>
        </div>
        <div>
          <label for="sewaharian" class="block mb-2 text-base font-medium text-gray-900">Sewa Harian</label>
          <input type="number" id="sewaharian" name="jumlahhari" class="p-2 w-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Cth: 3"><span class="ml-2">Hari</span>
        </div>
        <div>
          <label for="sewabulanan" class="block mb-2 text-base font-medium text-gray-900">Sewa Bulanan</label>
          <input type="number" id="sewabulanan" name="jumlahbulan" class="p-2 w-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Cth: 3"><span class="ml-2">Bulan</span>
        </div>
        <div>
          <label for="tanggal" class="block mb-2 text-base font-medium text-gray-900">Tanggal mobil disewa</label>
          <input type="date" id="tanggal" name="tanggal" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Let us know how we can help you" required>
        </div>
        <div>
          <label for="pembayaran" class="block mb-2 text-base font-medium text-gray-900">Metode pembayaran</label>
          <select type="text" id="pembayaran" name="pembayaran" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Let us know how we can help you" required>
            <option value="ShopeePay">ShopeePay</option>
            <option value="LinkAja">LinkAja</option>
            <option value="DANA">DANA</option>
            <option value="GoPay">GoPay</option>
            <option value="OVO">OVO</option>
            <option value="Alfamart">Alfamart</option>
            <option value="Indomaret">Indomaret</option>
            <option value="BCA">BCA</option>
            <option value="BNI">BNI</option>
            <option value="Mandiri">Mandiri</option>
          </select>
        </div>
        <div class="w-full">
          <button type="submit" class="w-full rounded-full bg-primary-600 py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">
            Proses Pembayaran
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- From Section End -->

  <!-- Footer Section Start -->
  <footer class="pt-12 pb-10 bg-primary-600 ">
    <div class="container">
      <div class="w-full px-4 grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
        <div class="sm:col-span-2">
          <a href="#" aria-label="Car rental" class="inline-flex items-center">
            <img src="../../../src/img/rentalaku-logo-orange.png" alt="Rental Logo" class="w-8">
            <span class="ml-2 text-xl font-bold tracking-wide text-white uppercase">Rentalaku</span>
          </a>
          <div class="mt-6 lg:max-w-sm">
            <p class="text-sm text-white">
              Semua logo, merek dagang, dan hak cipta yang terkandung di situs web
              ini adalah dan tetap menjadi milik dari pemiliknya masing-masing.
              Penggunaan materi-materi ini tidak menyiratkan pengesahan oleh
              perusahaan-perusahaan ini.
            </p>
            <p class="mt-4 text-sm text-white">
              Tidak ada lisensi atau hak lain dalam
              atau atas logo dan/atau merek dagang tersebut yang diberikan.
            </p>
          </div>
        </div>
        <div class="space-y-2 text-sm">
          <p class="text-base font-bold tracking-wide text-white">Contacts</p>
          <div class="flex">
            <p class="mr-1 text-white">Phone:</p>
            <a href="tel:0818-0399-0470" aria-label="Our phone" title="Our phone" class="transition-colors duration-300 text-white hover:text-deep-purple-800">0818 0399 0470</a>
          </div>
          <div class="flex">
            <p class="mr-1 text-white">Email:</p>
            <a href="mailto:raihanramadhan435@gmail.com" aria-label="Our email" title="Our email" class="transition-colors duration-300 text-white hover:text-deep-purple-800">raihanramadhan435@gmail.com</a>
          </div>
          <div class="flex">
            <p class="mr-1 text-white">Address:</p>
            <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer" aria-label="Our address" title="Our address" class="transition-colors duration-300 text-white hover:text-deep-purple-800">
              Jl. Ciremai Blok A No. 21, Purwakarta
            </a>
          </div>
        </div>
        <div>
          <span class="text-base font-bold tracking-wide text-white">Social</span>
          <div class="flex items-center mt-1 space-x-3">
            <a href="https://twitter.com/Raihanrmdhn_09" target="_blank" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
              <svg viewBox="0 0 24 24" fill="white" class="h-5">
                <path d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                </path>
              </svg>
            </a>
            <a href="https://instagram.com/raihanrmdhn_09" target="_blank" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
              <svg viewBox="0 0 30 30" fill="white" class="h-6">
                <circle cx="15" cy="15" r="4"></circle>
                <path d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                </path>
              </svg>
            </a>
            <a href="https://facebook.com/raihan.ramadhan.09" target="_blank" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
              <svg viewBox="0 0 24 24" fill="white" class="h-5">
                <path d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                </path>
              </svg>
            </a>
          </div>
          <p class="mt-4 text-sm text-white">
            Kunjungi media sosial kami untuk informasi lebih lanjut!
          </p>
        </div>
      </div>
      <div class="w-full px-4 flex flex-col-reverse justify-between pt-5 border-t lg:flex-row">
        <p class="text-sm text-white">
          Dibuat dengan <span class="text-pink-500">❤️</span> oleh <a href="https://instagram.com/raihanrmdhn_09" target="_blank" class="font-bold">Raihan Ramadhan</a>, menggunakan <img src="../../../src/img/icon/Tailwind_CSS_Logo.svg" alt="Tailwind CSS Logo" class="w-5 inline"><a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>.
        </p>
        <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
          <li>
            <a href="../../account/s&k.html" class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">F.A.Q</a>
          </li>
          <li>
            <a href="../../account/s&k.html" class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy
              Policy</a>
          </li>
          <li>
            <a href="../../account/s&k.html" class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">Terms
              &amp; Conditions</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <script src="../../js/script.js"></script>
</body>

</html>