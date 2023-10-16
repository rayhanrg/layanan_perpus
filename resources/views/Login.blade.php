<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>WIOS</title>
</head>
<body>
    <header class="flex justify-center items-center h-16 bg-gray-400">
    <img src="img/bg.png" alt="Logo Widyatama" class="w-88 h-12 mr-2">
        <h1 class="text-black text-sm font-bold text">WIDYATAMA INFORMASI ONLINE SISTEM</h1>
    </header>

    <div class="bg-cover bg-center bg-no-repeat h-screen" style="background-image: url('img/perpustakaan.jpg');">
      <div class="flex justify-center items-center h-full">
          <div class="bg-white bg-opacity-50 rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-semibold mb-6 text-center">Login</h2>
          <form action="#" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Username</label>
                <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4 flex items-center justify-between">
                <label for="remember" class="flex items-center cursor-pointer">
                  <input type="checkbox" id="remember" name="remember" class="form-checkbox text-blue-500">
                  <span class="ml-2 text-gray-600 text-sm">Ingat Saya</span>
                </label>
              <a href="#" class="text-blue-500 text-sm">Lupa Password?</a>
            </div>
              <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Login</button>
          </form>
      </div>
    </div>
  </body>
</body>
</html>