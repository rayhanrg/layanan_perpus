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
        <div class=" grid justify-center mx-10 p-2">
            <h2 class="text-center text-2xl font-semibold text-black dark:text-black">Validasi Transaksi</h1>
        </div>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <form>
            <div class="grid gap-6 mb-6 p-5 md:grid-cols-1">
                <div>
                    <label for="petugas" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Petugas yang Menerima</label>                
                    <div class="flex mb-4">
                        <label for="Petugas_yang_menerima" class="sr-only">Petugas yang Menerima</label>
                        <select id="Petugas" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg border-l-gray-100 dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option selected>Petugas yang Menerima</option>
                            <option value="HERLAN">HERLAN RUSDIANTO</option>
                            <option value="ABIDIN">ABIDIN</option>
                            <option value="DENA">DENA NUGRAHA</option>
                            <option value="RIZKI">RIZKI ERIZALLY NOOR</option>
                            <option value="WISNU">WISNU WIJAYA</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="tgl_pengajuan" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Pengajuan Bebas Pustaka</label>
                    <input type="date" id="tahun_terbit" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <button type="submit" class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-amber-400 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-cyan-400 dark:focus:ring-blue-800">Submit</button>           
            </div>
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