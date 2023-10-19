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
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Notifikasi</a>
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
   <div class="grid gap-6 mb-6 md:grid-cols-2 px-5">
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
           <label for="prodi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Program Studi</label>
           <input type="text" id="prodi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Informatika" required>
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

<!-- Radio Button -->
<div class="container mx-auto h-56 grid content-evenly ml-1"> 
    <div>
        <label for="penerima" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900"><strong class="font-bold text-gray-900 dark:text-gray-900 ml-5 flex items-center">Petugas yang Menerima</strong></label>
    </div>       
    <div class="ml-5 flex items-center">
        <input id="radio-1" type="radio" value="" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Rizky Erizally Noor, SIIP.</label>
    </div>
    <div class="ml-5 flex items-center">
        <input id="radio-2" type="radio" value="" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Riswan Agustina, S.Pd.</label>
    </div>
    <div class="ml-5 flex items-center">
        <input id="radio-3" type="radio" value="" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="radio-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Abidin, S.I.Pust.</label>
    </div>
    <div class="ml-5 flex items-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">Next</button>
    </div>
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