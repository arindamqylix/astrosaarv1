<!-- Navbar Include -->
    <nav class="navbar">
      <div class="navbar-left">
        <a href="{{ url('/') }}">
            <img src="{{ asset('public/assets-front/image/main-logo.png') }}" alt="Logo" class="logo" />
        </a>
        <div class="brand">
          <span class="brand-name">AstroSaar</span>
          <span class="brand-sub">Consult Online AstroSaar Anytime</span>
        </div>
      </div>

      <!-- Hamburger icon -->
      <div class="hamburger">&#9776;</div>

      <!-- Navbar links and buttons -->
      <div class="navbar-menu">
        <ul class="navbar-links">
          <!-- <a href=""> <li>Free Kundli</li></a>
       <a href=""> <li>Kundli Matching</li></a> -->

          <li><a href="{{ route('front.getkundali') }}">Free Kundli</a></li>
          <li><a href="{{ route('front.kundaliMatch') }}">Kundli Matching</a></li>
          <li><a href="#">Compatibility</a></li>
          <li>
            <a href="{{ route('front.horoScope') }}">
              Horoscopes <span class="arrow">▾</span></a
            >
          </li>
          <li>Language <span class="arrow">▾</span></li>
        </ul>

        <div class="navbar-right">
          <a href="{{ route('front.talkList') }}">
            <button class="btn talk-btn">Talk to Astrologer</button></a
          >
          <a href="{{ route('front.chatList') }}">
            <button class="btn chat-btn">Chat with Astrologer</button></a
          >
          <a href="{{ route('user.login') }}">
            <button class="btn purple">
              <i class="fas fa-user"></i> Sign In
            </button></a
          >
        </div>
      </div>
    </nav>