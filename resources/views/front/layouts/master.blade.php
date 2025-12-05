<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AstroSaar - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('public/assets-front/css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets-front/css/navbar.css') }}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Place this inside the <head> tag of your HTML -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    @stack('page-css')
  </head>
  <body>
      
    @include('front.layouts.header')
      
      @yield('content')
      
    @include('front.layouts.footer')
    <script>
      // Toggle mobile menu
      document
        .querySelector(".hamburger")
        .addEventListener("click", function () {
          document.querySelector(".navbar-menu").classList.toggle("active");
        });
    </script>
  </body>
</html>