<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss"></style>
</head>
<body>
<nav class="border-gray-200 bg-gray-50 dark:bg-gradient-to-b from-blue-600 to-white dark:border-gray-700">
    <div class="flex flex-auto items-center justify-between m-0 p-6">
        <a href="#" class="flex place-items-center">
            <img src="/image/logoutama.png" class="Logo h-12 mr-1" alt="Widyatama Logo" />
            <div class="self-baseline mt-2 text-base font-semibold whitespace-nowrap dark:text-black">Widyatama Information</div>
            <div class="self-end -ml-36 text-base font-semibold whitespace-nowrap dark:text-black">Online System</div>
        </a>
    </div>
<div>
<h1 class="p-5 text-3xl font-semibold text-gray-900 dark:text-black">Bebas Pustaka</h1>
</div>
<form>
    <div class="grid gap-6 mb-6 p-5 md:grid-cols-2">
        <div>
           <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Email</label>
           <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
        </div>
        <div>
           <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Nama Lengkap</label>
           <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
        </div>
        <div>
           <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">NPM</label>
           <input type="text" id="npm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
        </div>
        <div>
        <label for="program_studi" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Program Studi</label>
        <div class="flex">
            <label for="program_studi" class="sr-only">Program Studi</label>
            <select id="program_studi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg border-l-gray-100 dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
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
    </div>
    <p class="ml-5 text-base font-semibold text-black dark:text-black">PENGAJUAN BEBAS PUSTAKA DENGAN CARA :</p> 
    <div class="ml-5 flex items-center">
        <input id="radio-1" type="radio" value="" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Wisuda dan Pengambilan Ijazah</label>
    </div>
    <div class="ml-5 flex items-center">
        <input id="radio-2" type="radio" value="" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Cuti Akademik</label>
    </div>
    <div class="ml-5 flex items-center">
        <input id="radio-3" type="radio" value="" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="radio-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Mengundurkan Diri</label>
    </div>
</form>
</div>
<div class="flex px-5 my-5">
    <!-- Next Button -->
    <a href="#" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-amber-400 rounded-lg w-full sm:w-auto py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">
      Next
    </a>
</div>
<footer class="bg-white shadow mt-5 dark:bg-blue-950">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-white">© 2023 <a>Layanan Perpustakaan Univeristas Widyatama</a>. All Rights Reserved.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
    </div>
</footer>
</body>
</html>