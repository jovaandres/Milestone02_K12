<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('title')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />
  </head>
  <body>
    <!-- Navigation Bar -->
    <header>
      <div class="container">
        <div id="nav-bar">
          <div class="logo">
            <a href="/">
                <img src="img/antihoax.png" width="150px" alt="" />
            </a>
          </div>
          <nav>
            <a href=""></a>
            <ul>
              <li>
                <a href="{{ route('home.lapor') }}">Menemukan hoaks? <span>Laporkan</span></a>
              </li>
              <li><a href="{{ route('home.news') }}">News List</a></li>
              <li><a href="{{ route('home.about') }}">About Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        @yield('container')
        <button onclick="topFunction()" id="back-to-top"><i class="fa fa-arrow-circle-up"></i></button>
      </div>
    </main>
    <footer>
      <div class="container">
        <img src="{{ asset('img/antihoax-white.jpg') }}" width="200px" alt="" />
        <div id="contact-info">
          <p>Ada saran, kritik, atau pertanyaan? Hubungi kami di:</p>
          <p>&#9993; antihoax@example.com</p>
          <p>&#9743; +62 22123789</p>
        </div>
        <div class="alamat">
          <h6>PT Antihoax Nusantara</h6>
          <p>Jalan Mawar Raya No. 20, Bandung</p>
          <p>Jawa Barat</p>
        </div>
        <div id="copyright">
          <p>&copy; 2021 Antihoax Nusantara</p>
        </div>
      </div>
    </footer>
    <script>
        var mybutton = document.getElementById("back-to-top");
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            var pageOffset = document.documentElement.scrollTop || document.body.scrollTop,
            btn = document.getElementById('back-to-top');
            if (btn) btn.style.visibility = pageOffset > 450 ? 'visible' : 'hidden';
        };

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
  </body>
</html>
