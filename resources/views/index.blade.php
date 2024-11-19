<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delicious Bites here in here</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-red-950 font-sans antialiased">

  <!-- Header -->
  <header class="bg-red-950 shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-3xl font-bold text-white">Delicious Bites</h1>
      <nav class="space-x-4">
        <a href="#home" class="text-white font-semibold hover:text-yellow-400">Home</a>
        <a href="#about" class="text-white font-semibold hover:text-yellow-400">About</a>
        <a href="#service" class="text-white font-semibold hover:text-yellow-400">Services</a>
        <a href="#menu" class="text-white font-semibold hover:text-yellow-400">Menu</a>
        <a href="#order" class="text-white font-semibold hover:text-yellow-400">Order</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="home" class="relative h-screen bg-cover bg-center" style="background-image: url('\public\ASSETS\home.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
      <div class="text-center px-4">
        <h2 class="text-5xl font-bold text-maroon-500 mb-4">Selamat Datang di Delicious Bites</h2>
        <p class="text-lg font-bold text-maroon-500 mb-6">Nikmati cita rasa kuliner istimewa yang memanjakan lidah Anda, hanya di Delicious Bites.</p>
        <button class="bg-maroon-500 text-white px-6 py-3 rounded-md font-semibold hover:bg-maroon-700">
          Pesan Sekarang
        </button>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-16 bg-white">
    <div class="container mx-auto text-center">
      <h3 class="text-3xl font-semibold text-maroon-500 mb-4">Tentang Kami</h3>
      <p class="text-gray-700 max-w-2xl mx-auto">
        Delicious Bites menawarkan pengalaman kuliner yang unik dengan berbagai hidangan yang menggugah selera dan menggunakan bahan-bahan segar berkualitas.
      </p>
    </div>
  </section>

  <!-- Services Section -->
  <section id="service" class="py-16 bg-gray-50">
    <div class="container mx-auto text-center">
      <h3 class="text-3xl font-semibold text-maroon-500 mb-4">Layanan Kami</h3>
      <p class="text-gray-700 max-w-2xl mx-auto mb-8">
        Kami menyediakan berbagai layanan mulai dari katering hingga penyediaan makanan untuk acara-acara spesial.
      </p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-6 bg-white rounded-lg shadow-md">
          <h4 class="text-xl font-semibold text-maroon-500 mb-2">Katering</h4>
          <p class="text-gray-600">Layanan katering untuk berbagai acara dengan menu yang dapat disesuaikan.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
          <h4 class="text-xl font-semibold text-maroon-500 mb-2">Pengiriman</h4>
          <p class="text-gray-600">Layanan pengiriman makanan langsung ke lokasi Anda.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
          <h4 class="text-xl font-semibold text-maroon-500 mb-2">Acara Khusus</h4>
          <p class="text-gray-600">Paket makanan spesial untuk berbagai acara khusus seperti ulang tahun dan pernikahan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-red-950 text-white py-8">
    <div class="container mx-auto text-center">
      <p class="text-sm">&copy; 2024 Delicious Bites. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>
