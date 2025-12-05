<!-- ---------------footer--------------- -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-section brand">
          <div class="footer-icon">
            <img
              src="{{ asset('public/assets-front/image/main-logo.png') }}"
              alt="AstroSaar Logo"
              class="logo"
            />
            <h2>AstroSaar</h2>
          </div>

          <p><a href="{{ route('front.getkundali') }}" style="color: white; text-decoration: none;">Free Kundli</a></p>
          <div class="social-icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
        <div class="footer-section">
          <h3>Services</h3>
          <ul>
            <li><a href="{{ route('front.getkundali') }}">Free Kundli</a></li>
            <li><a href="{{ route('front.kundaliMatch') }}">Kundli Matching</a></li>
            <li><a href="#">Compatibility</a></li>
            <li><a href="{{ route('front.horoScope') }}">Horoscopes</a></li>
            <li><a href="{{ route('front.talkList') }}">Call With Astrologer</a></li>
            <li><a href="{{ route('front.chatList') }}">Chat With Astrologer</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h3>Products</h3>
          <ul>
            <li><a href="{{ route('front.getproducts') }}">Rudraksh</a></li>
            <li><a href="{{ route('front.getproducts') }}">Gemstone</a></li>
            <li><a href="{{ route('front.getproducts') }}">Mala</a></li>
            <li><a href="{{ route('front.getproducts') }}">Yantra</a></li>
            <li><a href="{{ route('front.getproducts') }}">Bracelets</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h3>Resourses</h3>
          <ul>
            <li><a href="{{ route('front.getBlog') }}">Blogs</a></li>
            <li><a href="{{ route('front.astrologerlogin') }}">Astrologer Login</a></li>
            <li><a href="{{ route('front.astrologerregister') }}">Astrologer Registration</a></li>
          </ul>
        </div>

        <div class="footer-section support">
          <h3>Support</h3>
          <p>We are available 24/7 on chat</p>
          <a href="#" class="Click-Chat">Click here to start chat</a>
          <p>
            Email:
            <a href="mailto:Contact@astrosaar.com">Contact@astrosaar.com</a>
          </p>
          <p><a href="{{ route('front.privacyPolicy') }}">Privacy policy</a></p>
          <div class="app-buttons">
            <img src="{{ asset('public/assets-front/image/appstore.png') }}" alt="App Store" />
            <img src="{{ asset('public/assets-front/image/googleplay.png') }}" alt="Google Play" />
          </div>
        </div>
      </div>
    </footer>