<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi TA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    </style>
</head>
<body>
    <nav class="border-gray-50 bg-gradient-to-b from-blue-600 to-white dark:border-gray-500">
        <div class="flex flex-auto items-center justify-between m-0 p-6">
          <a href="#" class="flex place-items-center">
              <img src="/image/bg.png" class="Logo h-12 mr-1" alt="Widyatama Logo" />
              <div class="self-baseline mt-2 text-base font-semibold whitespace-nowrap dark:text-black">Widyatama Information</div>
              <div class="self-end -ml-36 text-base font-semibold whitespace-nowrap dark:text-black">Online System</div>
          </a>
        </div>
        <div>
            <h1 class="p-5 text-3xl font-semibold text-gray-900 dark:text-black">Validasi Tugas Akhir</h1>
        </div>
        <form>
            <div class="grid gap-6 mb-6 p-5 md:grid-cols-2">
                <div>
                    <label for="Email" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Email</label>
                    <input type="text" id="Email" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="Nama_Lengkap" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Lengkap</label>
                    <input type="text" id="Nama_Lengkap" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="NPM" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">NPM</label>
                    <input type="text" id="NPM" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>  
                <div>
                    <label for="program_studi" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Program Studi</label>
                    <div class="flex">
                        <label for="program_studi" class="sr-only">Program Studi</label>
                        <select id="program_studi" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                    <label for="judul_penelitian" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Judul Penelitian</label>
                    <input type="text" id="judul_penelitian" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ditulis hanya huruf kapital saja tanpa simbol dan tanda baca !" required>
                </div>
                <div>
                    <label for="pembimbing" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Pembimbing</label>
                    <input type="text" id="pembimbing" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi Nama Pembimbing tanpa Menggunakan Gelar !" required>
                </div>
                <div>
                    <label for="tanggal_sidang" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Sidang</label>
                    <input type="date" id="tanggal_sidang" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>  
                <div>
                    <label for="periode_wisuda" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Periode wisuda yang akan/telah diikuti</label>
                    <input type="date" id="periode_wisuda" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
            </div>
            <div class="flex items-center justify-center ml-5 mr-5 mb-5 w-auto">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-800 border-dashed rounded-lg cursor-pointer bg-gray-400 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-600 dark:border-gray-400 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-black dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-black dark:text-black"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400"></p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>
            <div class="grid gap-6 mb-6 p-5">
                <div>
                    <label for="Email" class="kotak  mb-2 text-sm font-medium text-gray-900 dark:text-black">Verifikasi Link Jurnal</label>
                    <input type="text" id="Email" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Silahkan isi dengan tautan link artikel anda ! " required>
                </div>
            </div>
            </div>
            <div>
                <p class="ml-5 mb-5 text-base font-semibold text-black dark:text-black">Kelengkapan Skripsi Berupa :</p>
                <p class="ml-5 text-base font-normal text-black dark:text-black">1. Soft File TA/Skripsi/Tesis</p>
                <p class="ml-5 text-base font-normal text-black dark:text-black">2. Scan Kartu Bimbingan/Assesment</p>
                <p class="ml-5 mb-5 text-base font-normal text-black dark:text-black">3. SKV (Surat Keterangan Validasi) Abstrak dari Pusat Bahasa</p>
                <p class="ml-5 mb-5 text-base font-semibold text-black dark:text-black">Kelengkapan Jurnal Berupa :</p>
                <p class="ml-5 text-base font-normal text-black dark:text-black">1. LOA (Letter of Acceptance/Acceptence Letter)</p>
                <p class="ml-5 text-base font-normal text-black dark:text-black">2. SKL (Surat Keterangan Lulus)</p>
                <p class="ml-5 text-base font-normal text-black dark:text-black">3. Soft File Laporan Penelitian/LTA</p>
                <p class="ml-5 mb-5 text-base font-normal text-black dark:text-black">4. Scan Kartu Bimbingan/Assessment</p>
                <p class="ml-5 mb-5 text-base font-semibold text-black dark:text-black">Catatan:</p>
                <p class="ml-5 text-base font-normal text-black dark:text-black">- Semua File telah dikonversi ke pdf, digabung dalam 1 folder dan di upload dalam Format RAR.</p>
                <p class="ml-5 text-base font-normal text-black dark:text-black">- Format nama file yang diupload (NAMA, NPM) agar file tidak tertukar.</p>
                <p class="ml-5 text-base font-normal text-black dark:text-black">- Skripsi/Jurnal akan di cek oleh petugas, jika telah sesuai maka akan diberi tanda terima.</p>
                <p class="ml-5 mb-5 text-base font-normal text-black dark:text-black">- Pemberitahuan akan di sampaikan melalui email: <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">sirkulasi@widyatama.ac.id</a></p>
            </div>
            <div class="ml-5 flex items-center">
                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Skripsi/TA</label>
            </div>
            <div class="ml-5 flex items-center">
                <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Tesis</label>
            </div>
            <div class="ml-5 flex items-center">
                <input checked id="default-radio-3" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Jurnal</label>
            </div>
            <button type="submit" class="ml-5 mt-4 text-white bg-blue-700 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-cyan-400 dark:focus:ring-blue-800">Submit</button>
        </form>
        <footer class="bg-blue-950 shadow mt-5 dark:bg-blue-950">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-white sm:text-center dark:text-white">© 2023 <a>Layanan Perpustakaan Univeristas Widyatama</a>. All Rights Reserved.</span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
            </div>
        </footer>
</body>
</html>