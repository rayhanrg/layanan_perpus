<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbangan Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    </style>
</head>
<body>
    <nav class="border-gray-200 bg-gradient-to-b from-blue-600 to-white dark:border-gray-700">
        <div class="flex flex-auto items-center justify-between m-0 p-6">
          <a href="#" class="flex place-items-center">
              <img src="/image/bg.png" class="Logo h-12 mr-1" alt="Widyatama Logo" />
              <div class="self-baseline mt-2 text-base font-semibold whitespace-nowrap dark:text-black">Widyatama Information</div>
              <div class="self-end -ml-36 text-base font-semibold whitespace-nowrap dark:text-black">Online System</div>
          </a>
        </div>
        <div>
        <h1 class="p-5 text-3xl font-semibold text-gray-900 dark:text-black">Sumbangan Buku</h1>
        </div>
        <form>
            <div class="grid gap-6 mb-6 p-5 md:grid-cols-2">
                <div>
                    <label for="Email" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Email</label>
                    <input type="text" id="Email" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="Nama_Lengkap" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Lengkap</label>
                    <input type="text" id="Nama_Lengkap" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="NPM" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">NPM</label>
                    <input type="text" id="NPM" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>  
                <div>
                    <label for="program_studi" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Program Studi</label>
                    <div class="flex">
                        <label for="program_studi" class="sr-only">Program Studi</label>
                        <select id="program_studi" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                            <option value="">S1-Bahasa Inggris</option>
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
                    <label for="no_wa" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">No Whatsapp</label>
                    <input type="text" id="no_wa" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="periode_wisuda" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Periode Wisuda</label>
                    <input type="text" id="periode_wisuda" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="judul_buku" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Judul Buku yang Disumbangkan</label>
                    <input type="text" id="judul_buku" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="(Hubungi petugas di No.WA 0855-1707-676 untuk mengetahui judul buku yang dapat disumbangkan)" required>
                </div>
                <div>
                    <label for="pengarang" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Pengarang</label>
                    <input type="text" id="pengarang" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="tahun_terbit" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tahun Terbit</label>
                    <input type="text" id="tahun_terbit" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>  
                <div>
                    <label for="tanggal_pesan" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Pemesanan</label>
                    <input type="date" id="tanggal_pesan" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="tanggal_penyerahan" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Penyerahan Buku</label>
                    <input type="date" id="tanggal_penyerahan" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="petugas" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Petugas yang Menerima</label>                
                    <div class="flex">
                        <label for="Petugas_yang_menerima" class="sr-only">Petugas yang Menerima</label>
                        <select id="Petugas" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Petugas yang Menerima</option>
                            <option value="HERLAN">HERLAN RUSDIANTO</option>
                            <option value="ABIDIN">ABIDIN</option>
                            <option value="DENA">DENA NUGRAHA</option>
                            <option value="RIZKI">RIZKI ERIZALLY NOOR</option>
                            <option value="WISNU">WISNU WIJAYA</option>
                    </select>
                </div>
            </div>
            </div>
            </div>
            <div class="flex items-center justify-center ml-5 mr-5 mb-5 w-auto">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-800 border-dashed rounded-lg cursor-pointer bg-gray-400 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-600 dark:border-gray-400 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-black dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-black dark:text-gray-400"><span class="font-semibold">SILAHKAN UPLOAD INVOICE</span> or drag and drop</p>
                        <p class="text-xs text-black dark:text-gray-400">(Jika Pembelian Buku Melalui Agen Penerbit)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>
            <p class="ml-5 mb-5 text-base font-semibold text-black dark:text-black">PEMBELIAN BUKU DENGAN CARA:</p>
            <div class="ml-5 flex items-center">
                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-blue-600 dark:border-gray-600">
                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Mandiri / Membeli Sendiri ke Toko</label>
            </div>
            <div class="ml-5 flex items-center">
                <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-blue-600 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Melalui Agen Penerbit</label>
            </div>
            <button type="submit" class="ml-5 mt-5 text-white bg-blue-700 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-400 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-cyan-400 dark:focus:ring-blue-800">Submit</button>
        </form>
        <footer class="bg-blue-950 shadow mt-5 dark:bg-blue-950">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-white sm:text-center dark:text-white">© 2023 <a>Layanan Perpustakaan Univeristas Widyatama</a>. All Rights Reserved.</span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
            </div>
        </footer>
</body>
</html>