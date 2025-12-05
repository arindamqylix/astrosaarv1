@extends('front.layouts.master')
@section('title', 'Kundli Matching')
@push('page-css')
<link rel="stylesheet" href="{{ asset('public/assets-front/css/kundlimatching.css') }}" />
<link rel="stylesheet" href="{{ asset('public/assets-front/css/commonChatbox.css') }}" />
<link rel="stylesheet" href="{{ asset('public/assets-front/css/moreServices.css') }}" />
@endpush
@section('content')

<!-- --------------kundili matching ----------- -->
    <div class="kundli-header-bg" style="margin-top:70px;">
      <div class="kundli-header-stars"></div>
      <div class="kundli-header-content">
        <h1>Kundli Matching</h1>
        <p class="subtitle">Find your right one, through matchmaking</p>
      </div>
    </div>
    <div class="kundli-content">
      <h2>
        Free Kundli Online - Get Your Detailed Birth Chart with Predictions
      </h2>
      <p class="description">
        Looking for your free Kundli from expert astrologers? Then you have come
        to the right place. The online free kundali available on Astrotalk is a
        100% free and authentic free Kundli that has been prepared after
        consulting more than 50 expert astrologers on board. The free kundli is
        such that it can give you a glimpse into various aspects of your life
        such as your career, love life, marriage, business and much more. The
        online kundli prepared by the free Kundali software here is no less than
        any traditional Kundli and can also be used for purposes like matching
        making, kundali matching for marriage or simply making future
        predictions.
      </p>
      <div class="kundli-form-section">
        <div class="form-table">
          <div class="kundli-form-card">
            <div class="tab-row">
              <div class="tab active">Male Kundli</div>
            </div>
            <div class="form-row">
              <form class="kundli-form">
                <div class="kundli-form-first">
                  <label for="name"
                    >Enter Details<span class="required">*</span></label
                  >
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your Name"
                  />
                </div>

                <div class="kundli-form-first">
                  <label for="birthdate"
                    >Date Of Birth<span class="required">*</span></label
                  >
                  <input type="date" id="birthdate" name="birthdate" />
                </div>
                <div class="kundli-form-first">
                  <label for="birthtime"
                    >Time Of Birth<span class="required">*</span></label
                  >
                  <input type="time" id="birthtime" name="birthtime" />
                </div>

                <div class="kundli-form-first">
                  <label for="birthplace"
                    >Place of Birth<span class="required">*</span></label
                  >
                  <input
                    type="text"
                    id="birthplace"
                    name="birthplace"
                    placeholder="Patna, Bihar"
                  />
                </div>
                <!-- <button type="submit" class="btn-generate">Generate Now</button> -->
              </form>
            </div>
          </div>
          <div class="kundli-form-card saved-kundli-card">
            <div class="tab-row saved-tabs">
              <div class="tab active">Female Kundli</div>
            </div>
            <div class="form-row">
              <form class="kundli-form">
                <div class="kundli-form-first">
                  <label for="name"
                    >Enter Details<span class="required">*</span></label
                  >
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your Name"
                  />
                </div>

                <div class="kundli-form-first">
                  <label for="birthdate"
                    >Date Of Birth<span class="required">*</span></label
                  >
                  <input type="date" id="birthdate" name="birthdate" />
                </div>
                <div class="kundli-form-first">
                  <label for="birthtime"
                    >Time Of Birth<span class="required">*</span></label
                  >
                  <input type="time" id="birthtime" name="birthtime" />
                </div>

                <div class="kundli-form-first">
                  <label for="birthplace"
                    >Place of Birth<span class="required">*</span></label
                  >
                  <input
                    type="text"
                    id="birthplace"
                    name="birthplace"
                    placeholder="Patna, Bihar"
                  />
                </div>
                <!-- <button type="submit" class="btn-generate">Generate Now</button> -->
              </form>
            </div>
          </div>
        </div>
        <button type="submit" class="btn-generate">Generate Now</button>
        <button type="submit" class="btn-sign">
          Sign in to see you saved kundli
        </button>
      </div>

      <div class="kundli-footer-desc">
        <p>
          Talking about future predictions, the kundali catered by Astrotalk to
          you is such that it considers the movement of all the planets in the
          native's life from the beginning of his or her life till as far as 100
          years. Doing so helps you understand the reasons behind not only the
          ongoing circumstances but also what’s to come for you in the future.
          So if in any way you are confused about life, the online kundli can be
          your saviour. Having said that, make sure you try the free online
          kundli, and let us know what you feel about it.
        </p>
      </div>
    </div>

    <div class="astro-connect-section">
      <div class="astro-connect-left">
        <h3>
          Connect with an Astrologer on Call or Chat for<br />
          more personalised detailed predictions.
        </h3>
        <div class="astro-connect-buttons">
          <button class="astro-btn">
            <span class="btn-icon">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M21 16.42V19.956C21.0001 20.2092 20.9042 20.453 20.7316 20.6382C20.559 20.8234 20.3226 20.9363 20.07 20.954C19.6333 20.9847 19.2767 21 19 21C10.163 21 3 13.837 3 5C3 4.724 3.01533 4.36733 3.046 3.93C3.06372 3.67744 3.17658 3.44101 3.3618 3.26841C3.54703 3.09581 3.79082 2.99989 4.044 3H7.58C7.70404 2.99987 7.8237 3.04586 7.91573 3.12902C8.00776 3.21218 8.0656 3.32658 8.078 3.45C8.10067 3.67933 8.122 3.86333 8.142 4.002C8.34072 5.38893 8.74799 6.73784 9.35 8.003C9.445 8.203 9.383 8.442 9.203 8.57L7.045 10.112C8.36471 13.1863 10.8147 15.6363 13.889 16.956L15.429 14.802C15.4917 14.7137 15.5835 14.6503 15.6883 14.6231C15.7932 14.5958 15.9042 14.6064 16.002 14.653C17.267 15.2539 18.6156 15.6601 20.002 15.858C20.1407 15.878 20.324 15.8993 20.552 15.922C20.6752 15.9346 20.7894 15.9926 20.8724 16.0846C20.9553 16.1766 21.0002 16.2961 21 16.42Z"
                  fill="black"
                />
              </svg>
            </span>
            <span>Talk to Astrologer</span>
          </button>
          <button class="astro-btn">
            <span class="btn-icon">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4 4H20V16H5.17L4 17.17V4ZM4 2C2.9 2 2.01 2.9 2.01 4L2 22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2H4ZM6 12H14V14H6V12ZM6 9H18V11H6V9ZM6 6H18V8H6V6Z"
                  fill="black"
                />
              </svg>
            </span>
            Talk to Astrologer
          </button>
        </div>
      </div>
      <div class="astro-connect-right">
        <img
          src="{{ asset('public/assets-front/image/chat.png') }}"
          alt="Astrologer with phone"
          class="astro-illustration-img"
        />
      </div>
    </div>

    <div class="services-section">
      <h2 class="services-title">More Services</h2>
      <div class="services-carousel">
        <div class="services-arrow">&lt;</div>
        <div class="services-card">
          <!-- Love & Career Solution Icon (SVG) -->
          <div class="services-icon">
            <svg
              width="100"
              height="100"
              viewBox="0 0 100 100"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M39.575 24.1376C45.4917 16.2042 54.3875 13.8876 62.5708 16.1167C71.4042 18.5209 79.1708 26.1084 81.75 36.6751C81.8833 37.2167 81.9986 37.7584 82.0958 38.3001C78.3726 36.9734 74.3229 36.8712 70.5375 38.0084C65.175 34.0417 58.5333 33.3751 52.6292 35.5501C45.2333 38.2792 39.4583 45.2001 38.1208 53.9084C36.4125 65.0584 43.2042 75.0751 52.8083 83.5917L54.425 84.9917C53.1208 85.0834 51.7958 84.8792 50.5292 84.6084C49.8783 84.4684 49.2309 84.3128 48.5875 84.1417L46.35 83.5167C26.4583 77.9209 13.1417 69.1667 9.32085 56.0834C6.27085 45.6417 9.20418 35.1876 15.6542 28.6876C21.6292 22.6667 30.4875 20.2251 39.575 24.1376ZM46.3583 55.1709C48.1417 43.5376 61.5958 37.8042 68.5042 47.7876C68.5704 47.8803 68.6705 47.9433 68.7828 47.9628C68.8951 47.9823 69.0106 47.9568 69.1042 47.8917C79.0083 40.8751 89.6875 50.8626 87.3833 62.4042C86.05 69.0987 79.8417 74.6542 68.7584 79.0709L66.9458 79.7792L65.85 80.2292C64.9042 80.6001 63.9042 80.8959 63 80.7376C62.1 80.5792 61.2625 79.9542 60.5 79.2876L59.2083 78.1209C49.5695 69.8264 45.2861 62.1764 46.3583 55.1709Z"
                fill="#624EA3"
              />
            </svg>
          </div>
          <div class="services-name">Love &amp; Career Solution</div>
        </div>
        <div class="services-card">
          <!-- Calendar Icon (SVG) -->
          <div class="services-icon">
            <svg
              width="90"
              height="90"
              viewBox="0 0 90 90"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M73.125 14.0625H16.875C12.2151 14.0625 8.4375 17.8401 8.4375 22.5V73.125C8.4375 77.7849 12.2151 81.5625 16.875 81.5625H73.125C77.7849 81.5625 81.5625 77.7849 81.5625 73.125V22.5C81.5625 17.8401 77.7849 14.0625 73.125 14.0625Z"
                stroke="#624EA3"
                stroke-width="6"
                stroke-linejoin="round"
              />
              <path
                d="M22.5 8.4375V14.0625M67.5 8.4375V14.0625M81.5625 28.125H8.4375M53.4375 45.7031L61.0699 40.0781H61.875V69.6094M27.0668 42.7025C27.8279 41.4158 29.9584 39.375 33.7201 39.375C38.1674 39.375 42.1383 41.7973 42.1383 46.3887C42.1483 47.2775 41.9804 48.1594 41.6444 48.9823C41.3084 49.8053 40.8111 50.5527 40.1818 51.1805C38.2605 53.1475 35.3285 53.8998 33.7271 53.8998C35.5377 53.8998 38.8582 54.7506 41.0309 56.9725C42.423 58.391 43.0664 60.3914 43.0664 62.6098C43.0664 67.5105 38.9303 70.3125 33.9047 70.3125C29.6561 70.3125 27.0492 67.224 26.1914 65.7703"
                stroke="#624EA3"
                stroke-width="6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div class="services-name">Panchang & Muhurat</div>
        </div>
        <div class="services-card">
          <!-- Numerology/Vastu Icon (SVG) -->
          <div class="services-icon">
            <svg
              width="90"
              height="90"
              viewBox="0 0 90 90"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15 63.75V26.25L41.25 63.75V26.25M56.25 63.75H75M56.25 37.5C56.25 40.4837 57.2377 43.3452 58.9959 45.455C60.754 47.5647 63.1386 48.75 65.625 48.75C68.1114 48.75 70.496 47.5647 72.2541 45.455C74.0123 43.3452 75 40.4837 75 37.5C75 34.5163 74.0123 31.6548 72.2541 29.545C70.496 27.4353 68.1114 26.25 65.625 26.25C63.1386 26.25 60.754 27.4353 58.9959 29.545C57.2377 31.6548 56.25 34.5163 56.25 37.5Z"
                stroke="#CCA453"
                stroke-width="8"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div class="services-name">Numerology/<br />Vastu</div>
        </div>
        <div class="services-arrow">&gt;</div>
      </div>
    </div>
    @endsection