<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
    Library Information
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-black text-white">
  <header class="relative">
    <img alt="Library background image" class="w-full h-screen object-cover opacity-50" height="1080" src="https://storage.googleapis.com/a1aa/image/D017aUh2RorbJZcChMwA6VAiLYOKGOciKN2ygysu1l7fD93JA.jpg" width="1920"/>
    <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-between">
      <div class="flex justify-between items-center p-4">
        <div class="flex items-center">
          <img alt="University logo" class="mr-2" height="50" src="https://storage.googleapis.com/a1aa/image/fPuSfBptQXiCVkDbfW6OBfBUVKkAqaH0NqudOgRGyIl5fQf7E.jpg" width="50"/>
          <div>
            <h1 class="text-lg font-bold">
              PERPUSTAKAAN
            </h1>
            <p class="text-sm">
              Evan Library
            </p>
          </div>
        </div>
        <nav class="flex items-center space-x-6 text-purple-500">
         
          <!-- Blade code for login/register -->
          @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
              @auth
                <a
                  href="{{ url('/dashboard') }}"
                  class="rounded-md px-3 py-2 text-purple-500 ring-1 ring-transparent transition hover:text-white focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                  Dashboard
                </a>
              @else
                <a
                  href="{{ route('login') }}"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                  Log in
                </a>

                @if (Route::has('register'))
                  <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                  >
                    Register
                  </a>
                @endif
              @endauth
            </nav>
          @endif
        </nav>
      </div>
      <div class="flex flex-col items-center justify-center flex-grow">
        <h2 class="text-4xl font-bold">
          Informasi Layanan Administrasi Perpustakaan Terkini
        </h2>
        <p class="mt-4 text-lg">
          Project Perpusakaan Yang Dibuat Oleh Evan
        </p>
      </div>

      <!-- Hapus bagian ini untuk menghilangkan lingkaran -->
      <!-- <div class="flex justify-center space-x-2 mb-4">
        <span class="w-3 h-3 bg-white rounded-full">
        </span>
        <span class="w-3 h-3 bg-gray-500 rounded-full">
        </span>
        <span class="w-3 h-3 bg-gray-500 rounded-full">
        </span>
        <span class="w-3 h-3 bg-gray-500 rounded-full">
        </span>
      </div> -->

      <div class="flex justify-end p-4 space-x-4">
        <a class="text-pink-500" href="https://www.instagram.com/ev.ha07?igsh=MXVjb2ViMjllcnIyeg==">
          <i class="fab fa-instagram fa-2x">
          </i>
        </a>
        <a class="text-blue-500" href="#">
          <i class="fab fa-facebook fa-2x">
          </i>
        </a>
      </div>
    </div>
  </header>

  <!-- About Us Section -->
  <section class="bg-gray-800 text-center py-8">
   <h2 class="text-3xl font-bold text-red-600">
    About Us
   </h2>
   <p class="mt-4 text-gray-300">
    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
   </p>
   <div class="mt-6 mx-4 p-4 border-2 border-red-600 rounded-lg">
    <p class="text-gray-300">
     consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
    </p>
    <button class="mt-4 bg-purple-700 text-white px-4 py-2 rounded-full">
     Read More
    </button>
   </div>
   <img alt="Stack of colorful books" class="mt-6 mx-auto" height="200" src="https://storage.googleapis.com/a1aa/image/cmgIcAWR7LrmBBRtrLiIGsf6WUeMwWfqtkCVaWImvpXkUthnA.jpg" width="200"/>
  </section>
  <!-- Our Library Section -->
  <section class="bg-gray-900 text-center py-8">
   <h2 class="text-3xl font-bold">
    <span class="text-red-600">
     Our
    </span>
    Library
   </h2>
   <p class="mt-4 text-gray-300">
    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
   </p>
   <div class="mt-6 mx-4 p-4">
    <img alt="Bookshelf with various books" class="rounded-full mx-auto" height="200" src="https://storage.googleapis.com/a1aa/image/8Kmy7ABncmI0P1iAIelSnfq2fHzNyJ8eFr1ynyBBCXRYpaDPB.jpg" width="200"/>
    <button class="mt-4 bg-purple-700 text-white px-4 py-2 rounded-full">
     Read More
    </button>
   </div>
  </section>
  <!-- Our Books Section -->
  <section class="bg-gray-800 text-center py-8">
   <h2 class="text-3xl font-bold">
    <span class="text-red-600">
     Our
    </span>
    Books
   </h2>
   <p class="mt-4 text-gray-300">
    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
   </p>
   <div class="mt-6 mx-4 p-4">
    <img alt="Open book" class="mx-auto" height="200" src="https://storage.googleapis.com/a1aa/image/WQf5MK6XyzS7WKzsf1YJBgf3N7yqPV77IyN2axNeFK0OpaDPB.jpg" width="200"/>
    <img alt="Open book with pages" class="mt-6 mx-auto" height="200" src="https://storage.googleapis.com/a1aa/image/v4R8lfo8XFwXBC67IxRoNumH8MZGRZgizyHowsD8h1vKVb4JA.jpg" width="200"/>
    <p class="mt-4 text-gray-300">
     magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    </p>
    <button class="mt-4 bg-purple-700 text-white px-4 py-2 rounded-full">
     Read More
    </button>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-gray-800 text-white text-center py-8">
   <div class="flex justify-center space-x-4 mb-4">
    <a class="text-white" href="#">
     <i class="fab fa-facebook-f fa-2x">
     </i>
    </a>
    <a class="text-white" href="#">
     <i class="fab fa-twitter fa-2x">
     </i>
    </a>
    <a class="text-white" href="#">
     <i class="fab fa-linkedin-in fa-2x">
     </i>
    </a>
    <a class="text-white" href="#">
     <i class="fab fa-instagram fa-2x">
     </i>
    </a>
   </div>
   <div class="mb-4">
    <input class="p-2 rounded-l-full bg-gray-700 text-white" placeholder="Enter your email" type="email"/>
    <button class="bg-red-500 px-4 py-2 rounded-r-full">
     Subscribe
    </button>
   </div>
   <p>
    Copyright 2019 All Right Reserved By Free html Templates
   </p>
  </footer>+
</body>
</html>
