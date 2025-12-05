@extends('front.layouts.master')
@section('title', 'Home')
@section('content')
<!-- Hero Section -->
    <section class="hero">
      <div class="hero-content">
        <h1>
          Unlock the power<br />
          of the stars with<br />
          AstroSaar
        </h1>
        <button class="hero-btn">Get Your First Chat Free</button>
      </div>
      <img src="{{ asset('public/assets-front/image/baba-image.png') }}" alt="Astrology" class="hero-img" />
    </section>

    <!-- What We Offer -->

    <section class="services-section">
      <h2>What We Offer</h2>
      <div class="services-grid">
        <div class="service-box">
          <i class="fas fa-scroll service-icon"></i>
          <div class="service-title">Kundli Analysis</div>
        </div>

        <div class="service-box">
          <i class="fas fa-comments service-icon"></i>
          <div class="service-title">Live Chat</div>
        </div>

        <div class="service-box">
          <i class="fas fa-heart service-icon"></i>
          <div class="service-title">Love & Career</div>
        </div>

        <div class="service-box">
          <i class="fas fa-calendar-alt service-icon"></i>
          <div class="service-title">Panchang & Muhurat</div>
        </div>

        <div class="service-box">
          <i class="fas fa-chart-bar service-icon"></i>
          <div class="service-title">Numerology & Vastu</div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-section">
      <h2 class="why-title">Why Choose Us</h2>
      <div class="why-cards">
        <!-- Card 1 -->
        <div class="why-card">
          <div class="icon-container">
            <!-- Verified Checkmark Icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#000"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10"></circle>
              <polyline points="9 12 11 14 15 10"></polyline>
            </svg>
          </div>
          <div class="card-content">
            <h3>Verified Astrologers</h3>
            <p>Experience and Expertise</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="why-card">
          <div class="icon-container">
            <!-- Privacy Padlock Icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#000"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10"></circle>
              <rect x="8" y="11" width="8" height="6" rx="1"></rect>
              <path d="M10 11V8a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v3"></path>
            </svg>
          </div>
          <div class="card-content">
            <h3>Privacy First</h3>
            <p>Confidential and Secure</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="why-card">
          <div class="icon-container">
            <!-- Shield Icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#000"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M12 2l8 4v6c0 5.55-3.84 10.74-8 12-4.16-1.26-8-6.45-8-12V6l8-4z"></path>
            </svg>
          </div>
          <div class="card-content">
            <h3>Secure Payment</h3>
            <p>Accurate and Trust able</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Talk to an Astrologer -->
    <section class="astrologer-section">
      <h2 class="section-title">Talk to an Astrologer</h2>

      <div class="astrologer-cards">
        <!-- Card 1 -->
        <div class="astrologer-card">
          <div class="card-header">
            <div class="avatar"></div>
            <div class="info">
              <h3>Priya Mehta</h3>
              <div class="rating">
                <span class="stars">★★★★★</span>
                <span class="score">4.9</span>
              </div>
              <p>Vedic Astrology</p>
            </div>
          </div>
          <button class="talk-button">Talk Now</button>
        </div>

        <!-- Card 2 -->
        <div class="astrologer-card">
          <div class="card-header">
            <div class="avatar"></div>
            <div class="info">
              <h3>Priya Mehta</h3>
              <div class="rating">
                <span class="stars">★★★★★</span>
                <span class="score">4.9</span>
              </div>
              <p>Vedic Astrology</p>
            </div>
          </div>
          <button class="talk-button">Talk Now</button>
        </div>

        <!-- Card 3 -->
        <div class="astrologer-card">
          <div class="card-header">
            <div class="avatar"></div>
            <div class="info">
              <h3>Priya Mehta</h3>
              <div class="rating">
                <span class="stars">★★★★★</span>
                <span class="score">4.9</span>
              </div>
              <p>Vedic Astrology</p>
            </div>
          </div>
          <button class="talk-button">Talk Now</button>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonial-section">
      <h2 class="section-title">What Our Customers Say</h2>
      <div class="testimonial-card">
        <div class="quote-icon">
          <i class="fas fa-quote-left"></i>
        </div>
        <div class="testimonial-text">
          <p>
            It is Almost accurate and helpful. <br />
            Highly recommended!
          </p>
          <h4>Neha Gupta</h4>
        </div>
        <div class="user-img"></div>
      </div>
    </section>

    <!-- Astro Blog -->
    <section class="blogs-section">
      <h2 class="section-title">Astro Blogs</h2>
      <div class="blog-cards">
        <div class="blog-card"></div>
        <div class="blog-card"></div>
        <div class="blog-card"></div>
      </div>
    </section>

    <!-- From YouTube -->
    <section class="youtube-section">
      <h2 class="section-title">From Youtube</h2>
      <div class="youtube-videos">
        <div class="video-card">
          <img src="{{ asset('public/assets-front/image/y1.png') }}" alt="Video 1" />
          <div class="play-button"><i class="fa-brands fa-youtube"></i></div>
        </div>
        <div class="video-card">
          <img src="{{ asset('public/assets-front/image/y2.png') }}" alt="Video 2" />
          <div class="play-button"><i class="fa-brands fa-youtube"></i></div>
        </div>
        <div class="video-card">
          <img src="{{ asset('public/assets-front/image/y3.png') }}" alt="Video 3" />
          <div class="play-button"><i class="fa-brands fa-youtube"></i></div>
        </div>
      </div>
    </section>

    <!-- Our Products -->
    <section class="product-section">
      <div class="container">
        <h2>Our Products</h2>
        <div class="product-grid">
          <img src="{{ asset('public/assets-front/image/p1.png') }}" alt="Rudraksha" />
          <img src="{{ asset('public/assets-front/image/p2.png') }}" alt="Jewelry Making" />
          <img src="{{ asset('public/assets-front/image/p3.png') }}" alt="Red Beads" />
          <img src="{{ asset('public/assets-front/image/p4.png') }}" alt="Gold Yantra" />
          <img src="{{ asset('public/assets-front/image/p5.png') }}" alt="Stone Bracelet" />
          <img src="{{ asset('public/assets-front/image/p6.png') }}" alt="God Idols" />
        </div>
        <button class="see-more">See More</button>
      </div>
    </section>

    <!-- About Us -->
    <section class="about">
      <h2>Who are we?</h2>
      <p>
        Astrology is a predictive science with its own sets of methods, claims
        and findings that have forever inspired and allowed people with insights
        into different aspects of their life. Astrology, with its wows and hows,
        is contentful and approving enough to make people a believer of the
        same. And thankfully, it continues to do so despite the world shifting
        bases from what they believe in and what they don’t. If one has to go
        into the technicalities of astrology, it is the study of different
        cosmic objects, which are usually stars and planets, that have an effect
        on the lives of the people. You must be aware that there are as many as
        8 planets in the solar system. However, If I ask an online astrologer
        near me about the planets in astrology, they will tell me that there are
        as many as 9 planets in astrology also called Navagrahas. And
        surprisingly, the planet Earth, in astrology, is not counted among the
        nine planets. The 9 planets in astrology are Sun (Surya), Moon
        (Chandra), Mars (Mangala), Mercury (Budha), Jupiter (Brihaspati), Venus
        (Shukra), Saturn (Shani), Rahu (north node of the moon), and Ketu (south
        node of the moon).<br />It all depends on which houses these planets
        aresitting in. If you ever had the opportunity to talk to an astrologer
        online, then s/he must have told you about houses in astrology and the
        movements of planets in the same. There are as many as 12 houses in
        Kundli. And all of these houses represent one thing or the other. You
        can check your free excel. Likewise, if Rahu is camping in the same
        house, then you might feel the need for online astrology consultation to
        deal with the woes. Then there are other things in astrology like
        elements, the Moon sign of an individual, numerology, tarot and so much
        more that is impossible to wind up here. Online Astrology Consultation &
        Services
      </p>
    </section>

    <!-- FAQ -->
    <section class="faq">
      <h2>Frequently Asked Questions</h2>

      <details>
        <summary>
          <span>Is Astrology Prediction True?</span>
          <span class="icon">▼</span>
        </summary>
        <p>A Kundli is a birth chart...</p>
      </details>

      <details>
        <summary>
          <span>Is Astrology Prediction True?</span>
          <span class="icon">▼</span>
        </summary>
        <p>Our astrologers are highly experienced...</p>
      </details>

      <details>
        <summary>
          <span>Is Astrology Prediction True?</span>
          <span class="icon">▼</span>
        </summary>
        <p>Our astrologers are highly experienced...</p>
      </details>

      <details>
        <summary>
          <span>Is Astrology Prediction True?</span>
          <span class="icon">▼</span>
        </summary>
        <p>Our astrologers are highly experienced...</p>
      </details>
    </section>
@endsection