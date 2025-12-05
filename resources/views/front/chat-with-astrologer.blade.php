@extends('front.layouts.master')
@section('title', 'Chat with Astrologer')
@push('page-css')
<link rel="stylesheet" href="{{ asset('public/assets-front/css/chats.css') }}" />
@endpush
@section('content')
<header>
      <div class="header-bg">
        <div class="header-stars">&#10022; &#10022; &#10022;</div>
        <h1>Chat with Astrologer</h1>
      </div>
    </header>
    <main>
      <div class="actions-bar">
        <span>Available Balance : 00</span>
        <div class="actions-right">
          <a href="#" class="recharge">Recharge</a>
          <a href="#" class="filter">Filter</a>
          <a href="#" class="sortby">Short by</a>
          <form class="search-bar">
            <input type="text" placeholder="Search by Name" />
            <button type="submit">
              <svg
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.2979 11.2981L14.7306 14.7308"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M1 6.88456C1 10.1345 3.63462 12.7691 6.88459 12.7691C8.51236 12.7691 9.98586 12.1082 11.0512 11.04C12.1128 9.97562 12.7692 8.50673 12.7692 6.88456C12.7692 3.6346 10.1345 1 6.88459 1C3.63462 1 1 3.6346 1 6.88456Z"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </button>
          </form>
        </div>
      </div>
      <section class="astrologer-grid" id="astrologerGrid">
        <!-- Cards will be injected here dynamically -->
      </section>

      <div class="chat-desc">
        <h2>How talk an astrologer can help you?</h2>
        <p class="description">
          There’s literally no point in overthinking about your concerns when
          the solution to them is just a call away. Astrotalk brings to you a
          pool of over 500+ astrologers with whom you can contact on chat and
          share with them your problems across all aspects of life including
          love, finance, Vastu, career, luck, marriage and so on. Simply put,
          life is a cocktail of highs and lows, and while we enjoy the good
          times, the bad times, though they teach us a lot, can also leave us
          worried, depressed and sad. Such times can also hamper the
          relationship we share with other people in our lives, and we are sure
          that you wouldn’t want that to happen for yourself. 
        </p>
      </div>
    </main>
    
    <script>
       const astrologers = [
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
  {
    name: "Priya Mehta",
    verified: true,
    specialization: "Vedic Astrology",
    languages: "Hindi, English, Telugu",
    experience: 5,
    charges: 36,
    rating: 4.9,
    reviews: 3024,
  },
];

const astrologerGrid = document.getElementById("astrologerGrid");

astrologers.forEach((astro) => {
  const card = document.createElement("div");
  card.classList.add("astro-card");

  card.innerHTML = `
    <div class="profile-row">
      <div class="profile-pic"></div>
      <div>
        <span class="astro-name">${astro.name}</span>
        ${
          astro.verified
            ? `<span class="verified-badge">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.95 12.7L9.49995 11.275C9.31662 11.0917 9.08762 11 8.81295 11C8.53828 11 8.30062 11.1 8.09995 11.3C7.91662 11.4834 7.82495 11.7167 7.82495 12C7.82495 12.2834 7.91662 12.5167 8.09995 12.7L10.25 14.85C10.45 15.05 10.6833 15.15 10.95 15.15C11.2166 15.15 11.45 15.05 11.65 14.85L15.9 10.6C16.1 10.4 16.1956 10.1667 16.187 9.90004C16.1783 9.63337 16.0826 9.40004 15.9 9.20004C15.7 9.00004 15.4626 8.89604 15.188 8.88804C14.9133 8.88004 14.6756 8.97571 14.475 9.17504L10.95 12.7ZM8.14995 21.75L6.69995 19.3L3.94995 18.7C3.69995 18.65 3.49995 18.521 3.34995 18.313C3.19995 18.105 3.14162 17.8757 3.17495 17.625L3.44995 14.8L1.57495 12.65C1.40828 12.4667 1.32495 12.25 1.32495 12C1.32495 11.75 1.40828 11.5334 1.57495 11.35L3.44995 9.20004L3.17495 6.37504C3.14162 6.12504 3.19995 5.89571 3.34995 5.68704C3.49995 5.47837 3.69995 5.34937 3.94995 5.30004L6.69995 4.70004L8.14995 2.25004C8.28328 2.03337 8.46662 1.88737 8.69995 1.81204C8.93328 1.73671 9.16662 1.74937 9.39995 1.85004L12 2.95004L14.6 1.85004C14.8333 1.75004 15.0666 1.73737 15.3 1.81204C15.5333 1.88671 15.7166 2.03271 15.85 2.25004L17.3 4.70004L20.0499 5.30004C20.2999 5.35004 20.5 5.47937 20.65 5.68804C20.7999 5.89671 20.8583 6.12571 20.825 6.37504L20.5499 9.20004L22.4249 11.35C22.5916 11.5334 22.6749 11.75 22.6749 12C22.6749 12.25 22.5916 12.4667 22.4249 12.65L20.5499 14.8L20.825 17.625C20.8583 17.875 20.7999 18.1044 20.65 18.313C20.5 18.5217 20.2999 18.6507 20.0499 18.7L17.3 19.3L15.85 21.75C15.7166 21.9667 15.5333 22.1127 15.3 22.188C15.0666 22.2634 14.8333 22.2507 14.6 22.15L12 21.05L9.39995 22.15C9.16662 22.25 8.93328 22.2627 8.69995 22.188C8.46662 22.1134 8.28328 21.9674 8.14995 21.75Z" fill="#00AAFF"/>
</svg>
</span>`
            : ""
        }
      </div>
    </div>
    <div class="astro-info">
      <div>${astro.specialization}</div>
      <div class="astro-lang">${astro.languages}</div>
      <div>Exp. ${astro.experience} years</div>
    </div>
    <div class="astro-bottom">
      <div class="charges"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.33332 2H12L11.3333 3.33333H9.15999C9.47999 3.72 9.71999 4.17333 9.85999 4.66667H12L11.3333 6H9.99999C9.91714 6.83108 9.55604 7.60983 8.97522 8.21001C8.3944 8.81019 7.62791 9.19662 6.79999 9.30667V9.33333H6.33332L10.3333 14H8.66666L4.66666 9.33333V8H6.33332C7.50666 8 8.47999 7.13333 8.63999 6H4.66666L5.33332 4.66667H8.43999C8.06666 3.88 7.26666 3.33333 6.33332 3.33333H4.66666L5.33332 2Z" fill="black"/>
</svg> <span>${astro.charges}/Min</span></div>
      <div class="stars">
        <span class="star">${"&#9733;".repeat(5)}</span>
        <span class="rating">${astro.rating}</span>
        <span class="reviews">(${astro.reviews.toLocaleString()})</span>
      </div>
    </div>
    <button class="chat-now">Chat Now</button>
  `;

  astrologerGrid.appendChild(card);
});

    </script>
@endsection