<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebas Pustaka-Wisuda & Ijazah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    </style>
</head>
<body>
    <nav class="border-gray-50 bg-gradient-to-b from-blue-600 to-white dark:border-gray-500">
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
        
        <div class="ring-offset-2 ring-2 ring-offset-slate-50 dark:ring-offset-slate-900 rounded-lg bg-amber-600 shadow-inner grid justify-center mx-10 p-2">
            <p class="text-center ml-5 mb-5 text-base font-semibold text-black dark:text-black">Validasi Penyerahan Buku Sumbangan</p>
            <p class="text-justify ml-5 text-base font-normal text-black dark:text-black">LENGKAPI PERSYARATAN BEBAS PUSTAKA</p>
            <p class="text-justify ml-5 text-base font-normal text-black dark:text-black">DENGAN MELAKUKAN SUMBANGAN BUKU di</p>
            <p class="text-justify ml-5 text-base font-normal text-black dark:text-black">Link : </Link><a href="#" class="font-medium text-black dark:text-black hover:underline">Sumbangan Buku</a></p>
        </div>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <form>
            <div class="grid gap-6 p-5 md:grid-cols-1">
                <div>
                    <label for="judul_buku" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Judul Buku yang Disumbangkan</label>
                    <input type="text" id="judul_buku" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="(Hubungi petugas di No.WA 0855-1707-676 untuk mengetahui judul buku yang dapat disumbangkan)" required>
                </div>
                <div>
                    <label for="pengarang" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Pengarang</label>
                    <input type="text" id="pengarang" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="tahun_terbit" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tahun Terbit</label>
                    <input type="text" id="tahun_terbit" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div> 
                <div>
                    <label for="bukti" class="mb-2 text-sm font-medium text-gray-900 dark:text-black">Bukti Tanda Terima Buku Sumbangan</label>
                </div>
            </div>
            <div class="flex items-center justify-center ml-5 mr-5 mb-5 w-auto">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-800 border-dashed rounded-lg cursor-pointer bg-gray-400 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-600 dark:border-gray-400 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-black dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>
            <div class="flex px-5">
                <!-- Previous Button -->
                <a href="#" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-amber-400 rounded-lg w-full sm:w-auto py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">
                  Previous
                </a>
              
                <!-- Next Button -->
                <a href="#" class="flex items-center justify-center px-4 h-10 ml-3 text-base font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-amber-400 w-full sm:w-auto py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">
                  Next
                </a>
            </div>
        </form>
        <footer class="bg-white shadow mt-5 dark:bg-blue-950">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-white">© 2023 <a>Layanan Perpustakaan Univeristas Widyatama</a>. All Rights Reserved.</span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
            </div>
        </footer>
</body>
</html>