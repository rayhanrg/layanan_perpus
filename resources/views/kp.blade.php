<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Laporan Kerja Praktek</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="border-gray-200 bg-gray-50 dark:bg-gradient-to-b from-blue-600 to-white dark:border-gray-700">

<!-- Navbar Start -->
    <nav>
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center">
          <img src="/image/logoutama.png" class="h-12 mr-1" alt="Widyatama Logo" />
          <div class="self-baseline mt-2 text-base font-semibold whitespace-nowrap dark:text-black">Widyatama Information</div>
          <div class="self-end -ml-36 text-base font-semibold whitespace-nowrap dark:text-black">Online System</div>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-white dark:text-black dark:hover:bg-amber-500 dark:focus:ring-black" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
  
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-amber-500 md:dark:bg-transparent dark:border-black">
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Bebas Pustaka</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sumbangan Buku</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Validasi LTA</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Penyerahan KP</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

<br>

<h2 class="text-2xl font-extrabold dark:text-gray-900 ml-5 flex items-center">Penyerahan Laporan Kerja Praktek</h2>
<br>

<!-- Input Field -->
<form>
   <div class="grid gap-6 mb-0 p-5 md:grid-cols-2 px-5">
        <div>
           <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Email</label>
           <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@widyatama.ac.id" required>
        </div>
        <div>
           <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Nama Lengkap</label>
           <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
        </div>
        <div>
           <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">NPM</label>
           <input type="tel" id="npm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="06201010**" required>
        </div>
        <div>
            <label for="program_studi" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Program Studi</label>
            <div class="flex">
                <label for="program_studi" class="sr-only">Program Studi</label>
                <select id="program_studi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg border-l-gray-100 dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Program Studi</option>
                    <option value="">D3-Manajemen</option>
                    <option value="">D3-Akuntansi</option>
                    <option value="">D3-Multimedia</option>
                    <option value="">D3-Bahasa Jepang</option>
                    <option value="">D3-Teknik Mesin</option>
                    <option value="">D4-Desain Grafis</option>
                    <option value="">D4-Produksi Film & Televisi</option>
                    <option value="">S1-Manajemen</option>
                    <option value="">S1-Akuntansi</option>
                    <option value="">S1-Multimedia</option>
                    <option value="">S1-Bahasa Jepang</option>
                    <option value="">S1-Teknik Industri</option>
                    <option value="">S1-Teknik Informatika</option>
                    <option value="">S1-Sistem Informasi</option>
                    <option value="">S1-Teknik Elektro</option>
                    <option value="">S1-Teknik Sipil</option>
                    <option value="">S1-Teknik Mesin</option>
                    <option value="">S1-Perpustakaan & Sains Informasi</option>
                    <option value="">S1-Perdagangan Internasional</option>
                    <option value="">S2-Manajemen</option>
                    <option value="">S2-Akuntansi</option>
                    <option value="">Profesi Akuntasi (PPAk)</option>
                </select>
            </div>
        </div>
       <div>
           <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Judul Laporan Kerja Praktek</label>
           <input type="text" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
       </div> 
       <div>
           <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Tanggal Penyerahan</label>
           <input type="date" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="DD/MM/YY" required>
       </div> 
   </div>
</form>
<div class="px-5">
    <label for="petugas" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Petugas yang Menerima</label>                
    <div class="flex">
        <label for="Petugas_yang_menerima" class="sr-only">Petugas yang Menerima</label>
        <select id="Petugas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg border-l-gray-100 dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Petugas yang Menerima</option>
            <option value="HERLAN">HERLAN RUSDIANTO</option>
            <option value="ABIDIN">ABIDIN</option>
            <option value="DENA">DENA NUGRAHA</option>
            <option value="RIZKI">RIZKI ERIZALLY NOOR</option>
            <option value="WISNU">WISNU WIJAYA</option>
        </select>
    </div>
</div>
<br>
<div class="mt-5 px-5">
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">Next</button>
</div>

<!-- Footer -->
<footer class="bg-white shadow mt-5 dark:bg-blue-950">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-white">© 2023 <a>Layanan Perpustakaan Univeristas Widyatama</a>. All Rights Reserved.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
        </div>
</footer>
</body>
</html>