@php

    use Symfony\Component\HttpFoundation\Session\Session;
    use Illuminate\Support\Facades\Artisan;

    Artisan::call('cache:clear');
    if (authcheck()) {
        $session = new Session();
        $token = $session->get('token');

        $getProfile = Http::withoutVerifying()
            ->post(url('/') . '/api/getProfile', [
                'token' => $token,
            ])
            ->json();

        $getUserNotification = Http::withoutVerifying()
            ->post(url('/') . '/api/getUserNotification', [
                'token' => $token,
            ])
            ->json();

        $chatrequest = DB::table('chatrequest')
            ->where('userId', authcheck()['id'])
            ->get();
    }
        $logo = DB::table('systemflag')
            ->where('name', 'AdminLogo')
            ->select('value')
            ->first();
        $appName = DB::table('systemflag')
            ->where('name', 'AppName')
            ->select('value')
            ->first();



        $getsystemflag = Http::withoutVerifying()->post(url('/') . '/api/getSystemFlag')->json();
        $getsystemflag = collect($getsystemflag['recordList']);
        $currency = $getsystemflag->where('name', 'currencySymbol')->first();
        $appId = $getsystemflag->where('name', 'firebaseappId')->first();
        $measurementId = $getsystemflag->where('name', 'firebasemeasurementId')->first();
        $messagingSenderId = $getsystemflag->where('name', 'firebasemessagingSenderId')->first();
        $storageBucket = $getsystemflag->where('name', 'firebasestorageBucket')->first();
        $projectId = $getsystemflag->where('name', 'firebaseprojectId')->first();
        $authDomain = $getsystemflag->where('name', 'firebaseauthDomain')->first();
        $databaseURL = $getsystemflag->where('name', 'firebasedatabaseURL')->first();
        $apiKey = $getsystemflag->where('name', 'firebaseapiKey')->first();
        $otplessAppId = $getsystemflag->where('name', 'otplessAppId')->first();


@endphp



<style>
    .scrollable-menu {
        max-height: 450px;
        /* Adjust this value as needed */
        overflow-y: auto;

    }

    .dropdown-menu.show {
        display: block;
    }

    .btn-chataccept {
        border-radius: 30px;
        border: 1px solid #5bbe2a;
        background-color: #5bbe2a !important;
        color: white !important;
    }

    .btn-chatreject {
        border-radius: 30px;
        border: 1px solid #ee4e5e;
        background-color: #ffffff !important;
        color: #ee4e5e !important;
    }

    .btn.clear-notification {
        font-size: 15px !important;
        padding: 8px 30px !important;
    }

    .btn.clear-notification:hover,
    .btn.clear-notification:focus,
    .btn.clear-notification:active {
        color: #fff !important;
        background: #ee4e5e !important;
    }

    @media screen and (max-width: 520px) {
    #notificationList{
        width: 370px !important;
    }
}

    /* New Header Styles */
    .header {
        background-color: #fff9f0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        position: relative;
        z-index: 1030;
    }

    .header .navbar {
        background-color: #fff9f0 !important;
        padding: 12px 25px;
        box-shadow: none;
        min-height: 70px;
        z-index: 1030;
    }

    .header .navbar .container {
        max-width: 100%;
    }

    .header .navbar .container > div {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        flex-wrap: nowrap;
    }

    .header .navbar-brand {
        display: flex;
        align-items: center;
        margin-right: 0;
        flex-shrink: 0;
        text-decoration: none;
    }

    .header .navbar-brand:hover {
        text-decoration: none;
    }

    .header .navbar-brand img {
        width: 53px;
        height: 53px;
        border-radius: 50%;
        margin-right: 10px;
        object-fit: cover;
    }

    .astroway-logo-ntext {
        display: flex;
        flex-direction: column;
    }

    .astroway-logo-text {
        font-size: 20px;
        font-weight: 600;
        color: #2c1f0f;
        line-height: 1.2;
        margin: 0;
    }

    .astroway-logo-subtext {
        font-size: 11px;
        color: #666;
        margin-top: -2px;
        line-height: 1.2;
    }

    /* Center Navigation Links */
    .header-nav-center {
        display: flex;
        align-items: center;
        gap: 20px;
        list-style: none;
        margin: 0;
        padding: 0;
        flex: 1;
        justify-content: center;
        margin-left: 20px;
        margin-right: 20px;
        min-width: 0;
    }

    @media (max-width: 1200px) {
        .header-nav-center {
            gap: 15px;
            margin-left: 15px;
            margin-right: 15px;
        }
    }

    .header-nav-center li {
        position: relative;
    }

    .header-nav-center li a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        display: flex;
        align-items: center;
        transition: color 0.3s ease;
    }

    .header-nav-center li a:hover {
        color: #6d4ec6;
    }

    .header-nav-center .arrow {
        font-size: 12px;
        margin-left: 4px;
        color: #333;
    }

    .header-nav-center li a {
        white-space: nowrap;
    }

    /* Right Side Buttons */
    .header-buttons {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-shrink: 0;
        min-width: 0;
    }

    .header-buttons > div {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .btn-talk-astrologer {
        background-color: #d4a574;
        color: #6d4ec6;
        border: none;
        border-radius: 8px;
        padding: 8px 20px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-talk-astrologer:hover {
        background-color: #c49564;
        color: #6d4ec6;
        text-decoration: none;
    }

    .btn-chat-astrologer {
        background-color: #d4a574;
        color: #6d4ec6;
        border: none;
        border-radius: 8px;
        padding: 8px 20px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-chat-astrologer:hover {
        background-color: #c49564;
        color: #6d4ec6;
        text-decoration: none;
    }

    .btn-sign-in {
        background-color: #6d4ec6;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 20px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: all 0.3s ease;
    }

    .btn-sign-in:hover {
        background-color: #5d3eb6;
        color: #fff;
        text-decoration: none;
    }

    .btn-sign-in i {
        font-size: 14px;
    }

    /* Language Dropdown */
    .language-dropdown {
        display: flex;
        align-items: center;
        margin-right: 10px;
    }

    .language-dropdown .dropdown-toggle {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 5px 10px;
        border-radius: 4px;
        transition: all 0.3s ease;
        background: transparent;
        border: none;
        cursor: pointer;
    }

    .language-dropdown .dropdown-toggle:hover {
        background-color: rgba(0, 0, 0, 0.05);
        color: #333;
        text-decoration: none;
    }

    .language-dropdown .dropdown-toggle:focus {
        outline: none;
        box-shadow: none;
    }

    .language-dropdown .arrow {
        font-size: 12px;
        margin-left: 4px;
        color: #333;
    }

    /* User Profile Icons */
    .userprofileicon {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
        padding: 0;
    }

    .userprofileicon .list-inline-item {
        margin: 0;
    }

    .userprofileicon .btn {
        padding: 0;
        border: none;
        background: transparent;
    }

    .userprofileicon img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
    }

    .userprofileicon .fa-bell {
        font-size: 20px;
        color: #333;
    }

    .userprofileicon .badge-counter {
        position: absolute;
        top: -5px;
        right: -5px;
        background-color: #ee4e5e;
        color: white;
        border-radius: 10px;
        padding: 2px 6px;
        font-size: 10px;
    }

    /* Horizontal Line Below Header */
    .header::after {
        content: '';
        display: block;
        width: 100%;
        height: 1px;
        background-color: #e8e8e8;
        margin-top: 0;
    }

    /* Mobile Collapse Menu Dropdown */
    #main_nav.collapse.navbar-collapse.position-absolute {
        background-color: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        border-radius: 8px;
        margin-top: 10px;
        padding: 20px;
        z-index: 1000;
        left: 0;
        right: 0;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        top: 100%;
    }

    /* Ensure collapse menu is hidden by default on desktop */
    @media (min-width: 992px) {
        #main_nav.collapse.navbar-collapse.position-absolute {
            display: none !important;
        }
        
        #main_nav.collapse.navbar-collapse.position-absolute.show {
            display: none !important;
        }
    }

    .collapse.navbar-collapse.position-absolute .row {
        margin: 0;
    }

    .collapse.navbar-collapse.position-absolute .list-group {
        border: none;
    }

    .collapse.navbar-collapse.position-absolute .text-uppercase {
        color: #6d4ec6;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .collapse.navbar-collapse.position-absolute .dropdown-item {
        color: #333;
        font-size: 14px;
        padding: 8px 15px;
        transition: all 0.3s ease;
    }

    .collapse.navbar-collapse.position-absolute .dropdown-item:hover {
        background-color: #f5f5f5;
        color: #6d4ec6;
    }

    /* Mobile Button Styles */
    @media (max-width: 991px) {
        .header-nav-center {
            display: none;
        }

        .btn-talk-astrologer,
        .btn-chat-astrologer {
            width: 100%;
            text-align: center;
        }

        .language-dropdown {
            display: none;
        }
    }

    /* Image Placeholder Styles */
    .image-placeholder {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 700;
        border-radius: 8px;
    }

    .image-placeholder-circle {
        border-radius: 50%;
    }

    .image-placeholder-logo {
        font-size: 24px;
    }

    .image-placeholder-profile {
        font-size: 14px;
    }

    .image-placeholder-profile-large {
        font-size: 32px;
    }

</style>



<div class="header">
    <nav class="navbar navbar-light fixed-top">
        <div class="container">
            <div class="d-flex align-items-center w-100 justify-content-between">
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler d-inline d-lg-none mr-2" type="button" data-toggle="collapse"
                        data-target="#main_nav" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"
                            style="background-image:url({{asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/nav-toggle.svg')}});"></span>
                    </button>

                    <a class="navbar-brand" href="{{ route('front.home') }}">
                        <div class="d-flex align-items-center">
                            @php
                                $hasLogo = !empty($logo->value);
                                $firstLetter = strtoupper(substr($appName->value ?? 'A', 0, 1));
                            @endphp
                            @if($hasLogo)
                                <img src="/{{ $logo->value }}" alt="{{ $appName->value }}" class="img-fluid"
                                    width="53" height="53" style="border-radius: 50%;"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="image-placeholder image-placeholder-circle image-placeholder-logo" style="display: none; width: 53px; height: 53px; flex-shrink: 0;">
                                    {{ $firstLetter }}
                                </div>
                            @else
                                <div class="image-placeholder image-placeholder-circle image-placeholder-logo" style="width: 53px; height: 53px; flex-shrink: 0;">
                                    {{ $firstLetter }}
                                </div>
                            @endif
                            <div class="astroway-logo-ntext ml-2">
                                <span class="astroway-logo-text d-none d-md-block">{{ $appName->value }}</span>
                                <span class="astroway-logo-subtext d-none d-md-block">Consult Online AstroSaar Anytime</span>
                            </div>
                        </div>
                    </a>
                                    </div>

                <!-- Center Navigation Links -->
                <ul class="header-nav-center d-none d-lg-flex">
                    <li><a href="{{ route('front.getkundali') }}">Free Kundli</a></li>
                    <li><a href="{{ route('front.kundaliMatch') }}">Kundli Matching</a></li>
                    <li><a href="#">Compatibility</a></li>
                    <li>
                        <a href="{{ route('front.horoScope') }}">
                            Horoscopes <span class="arrow">▾</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Language <span class="arrow">▾</span>
                        </a>
                    </li>
                </ul>

                <!-- Right Side Buttons -->
                <div class="d-flex align-items-center header-buttons">
                    <div class="d-none d-lg-flex align-items-center mr-2" style="gap: 8px;">
                        <a href="{{ route('front.talkList') }}" id="callPg" class="btn-talk-astrologer">
                            Talk to Astrologer
                        </a>
                        <a href="{{ route('front.chatList') }}" id="chatPg" class="btn-chat-astrologer">
                            Chat with Astrologer
                        </a>
                                        </div>

                    <!-- Language Dropdown -->
                    <div class="language-dropdown d-none d-lg-block mr-2">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English <span class="arrow">▾</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                                <a class="dropdown-item" href="javascript:void(0)">English</a>
                                <a class="dropdown-item" href="javascript:void(0)">Hindi</a>
                                <a class="dropdown-item" href="javascript:void(0)">Other</a>
                                            </div>
                                        </div>
                    </div>

                    @if(authcheck())
                    <div id="google_translate_button" style="height:38px;width:82px" class="d-none d-lg-block"></div>
                    @else
                    <div id="google_translate_button" style="height:38px;width:82px; margin-left:8px;" class="d-none d-lg-block"></div>
                    @endif

                    <ul class="list-inline mb-0 d-flex align-items-center userprofileicon">
                        @if (authcheck())
                            <li class="list-inline-item">
                                <div class="dropdown ">
                                    <a class="btn dropdown-toggle p-0" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="position: relative;">
                                        @php
                                            $userProfile = authcheck()['profile'] ?? null;
                                            $userName = authcheck()['name'] ?? '';
                                            $userContact = authcheck()['contactNo'] ?? '';
                                            $firstLetter = !empty($userName) ? strtoupper(substr($userName, 0, 1)) : (!empty($userContact) ? strtoupper(substr($userContact, -1)) : 'U');
                                            $hasProfile = !empty($userProfile);
                                        @endphp
                                        @if($hasProfile)
                                            <img src="/{{ $userProfile }}" alt="User"
                                                class="img-fluid"
                                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="image-placeholder image-placeholder-circle image-placeholder-profile" style="display: none; width: 32px; height: 32px;">
                                                {{ $firstLetter }}
                                            </div>
                                        @else
                                            <img src="{{ asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img.png') }}"
                                                alt="" class="psychic-img img-fluid"
                                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="image-placeholder image-placeholder-circle image-placeholder-profile" style="display: none; width: 32px; height: 32px;">
                                                {{ $firstLetter }}
                                            </div>
                                        @endif
                                    </a>
                                    <div class="dropdown-menu user-options fadeInUp5px dropdown-menu-right dropdown-menu-lg-left"
                                        aria-labelledby="dropdownMenuLink">
                                        <ul>
                                            <li class="namedisplay d-block text-center">
                                                @php
                                                    $userProfile = authcheck()['profile'] ?? null;
                                                    $userName = authcheck()['name'] ?? '';
                                                    $userContact = authcheck()['contactNo'] ?? '';
                                                    $firstLetter = !empty($userName) ? strtoupper(substr($userName, 0, 1)) : (!empty($userContact) ? strtoupper(substr($userContact, -1)) : 'U');
                                                    $hasProfile = !empty($userProfile);
                                                @endphp
                                                <div style="position: relative; display: inline-block;">
                                                    @if($hasProfile)
                                                        <img src="/{{ $userProfile }}" alt="User"
                                                            class="img-fluid"
                                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                        <div class="image-placeholder image-placeholder-circle image-placeholder-profile-large" style="display: none; width: 80px; height: 80px; margin: 0 auto;">
                                                            {{ $firstLetter }}
                                                        </div>
                                                    @else
                                                        <img src="{{ asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png') }}"
                                                            alt="User" class="img-fluid"
                                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                        <div class="image-placeholder image-placeholder-circle image-placeholder-profile-large" style="display: none; width: 80px; height: 80px; margin: 0 auto;">
                                                            {{ $firstLetter }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div>
                                                    <h2 class="pt-3">{{ str_repeat('X', 6) . substr(authcheck()['contactNo'], -4) }}</h2>
                                                    <h3></h3>
                                                </div>
                                            </li>
                                            <li class="d-lg-block">
                                                <div>
                                                    <a class="dropdown-item "
                                                        href="{{ route('front.getMyAccount') }}">
                                                        <span class="mr-2 accSet accSettingWeb">
                                                            <i class="fa-solid fa-user"></i>
                                                        </span>
                                                        <span>My Account</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div>
                                                    <a class="dropdown-item d-flex justify-content-between align-items-center pr-2"
                                                        href="{{ route('front.getMyWallet') }}">
                                                        <span>
                                                            <span class="mr-2">
                                                                <i class="fa-solid fa-wallet"></i>
                                                            </span>
                                                            <span>My Wallet</span>
                                                        </span>
                                                        <span class="gWalletbalance color-red bg-pink"
                                                            style="border-radius:20px; padding:2px 10px; font-size:12px;">{{$currency['value']}}{{ $getProfile['data']['totalWalletAmount'] }}</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div>
                                                    <a class="dropdown-item" href="{{route('front.getMyChat')}}">
                                                        <span class="mr-2">
                                                            <i class="fa-solid fa-comment-dots"></i>
                                                        </span>
                                                        <span>My Chats</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div>
                                                    <a class="dropdown-item" href="{{route('front.getMyCall')}}">
                                                        <span class="mr-2">
                                                            <i class="fa-solid fa-phone"></i>
                                                        </span>
                                                        <span>My Calls</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div>
                                                    <a class="dropdown-item" href="{{ route('front.myOrders') }}">
                                                        <span class="mr-2">
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </span>
                                                        <span>My Orders</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div>
                                                    <a class="dropdown-item" href="{{ route('front.getMyReport') }}">
                                                        <span class="mr-2">
                                                            <i class="fa-solid fa-file"></i>
                                                        </span>
                                                        <span>My Reports</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div>
                                                    <a class="dropdown-item" href="{{ route('front.getMyFollowing') }}">
                                                        <span class="mr-2">
                                                            <i class="fa-solid fa-circle-user"></i>
                                                        </span>
                                                        <span>My Following</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div>
                                                    <a class="dropdown-item" id="logout" href="javascript:void()"
                                                        onclick="logout()">
                                                        <span class="mr-2">
                                                            <i class="fa-solid fa-right-from-bracket"></i>
                                                        </span>
                                                        <span>Sign Out</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            {{-- For Notification --}}
                            <li class="list-inline-item ml-3">
                                <div class="dropdown" style="position: relative;">
                                    <a class="btn p-0" style="width: 30px; position: relative;" role="button" id="notificationDropdownLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa-solid fa-bell" style="font-size: 20px; color: #333;"></i>
                                        <span class="badge badge-danger badge-counter" id="notificationCount" style="position: absolute; top: -5px; right: -5px; background-color: #ee4e5e; color: white; border-radius: 10px; padding: 2px 6px; font-size: 10px; min-width: 18px; text-align: center;">0</span>
                                    </a>
                                    <div class="dropdown-menu user-options fadeInUp5px dropdown-menu-right dropdown-menu-lg-left scrollable-menu"
                                        aria-labelledby="notificationDropdownLink" id="notificationDropdown">
                                        <ul id="notificationList">
                                            @foreach ($getUserNotification['recordList'] as $notification)
                                                <li
                                                    class="d-lg-block @if ($notification['chatStatus'] == 'Accepted' || $notification['callStatus'] == 'Accepted') bg-pink @endif">
                                                    <div>
                                                        <a class="dropdown-item"
                                                            @if ($notification['chatStatus'] == 'Accepted') onclick="setIds('{{ $notification['chatId'] }}', '{{ $notification['astrologerId'] }}')" data-toggle="modal" data-target="#chatinfomodal"
                                                            @elseif($notification['callStatus'] == 'Accepted') onclick="setCallIds('{{ $notification['callId'] }}', '{{ $notification['astrologerId'] }}')" data-toggle="modal" data-target="#callinfomodal" @endif>
                                                            <span class="mr-2 accSet accSettingWeb">
                                                                <i class="fa-solid fa-bell"></i>
                                                            </span>
                                                            <span>{{ $notification['title'] }}</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        @if (count($getUserNotification['recordList']) > 0)
                                            <a class="dropdown-item text-center btn clear-notification"
                                                id="clearNotifications">Clear Notifications</a>
                                        @else
                                            <ul id="notificationList">
                                                <li class="d-lg-block">
                                                    <span class="dropdown-item text-center ">No Notification Yet</span>
                                                </li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @else
                            <li class="list-inline-item usericon">
                                <a href="javascript:void(0);" class="btn-sign-in loginSignUp"
                                    data-toggle="modal" data-target="#loginSignUp">
                                    <i class="fas fa-user"></i>
                                    <span>Sign In</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                    <button class="navbar-toggler collapsed d-lg-none position-relative border-0 ml-2"
                        type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="navbarCollapse"
                        aria-expanded="false" aria-label="Toggle navigation" style="padding: 5px 10px;">
                        <span style="color: #333; font-size: 20px;">
                            <i class="fa-solid fa-bars"></i>
                        </span>
                    </button>
                </div>
            </div>

            <!-- Mobile Collapse Menu -->
            <div class="collapse navbar-collapse position-absolute" id="main_nav">
                        <div class="container">
                            <div class="w-100">
                                <div class="row my-4">
                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush dropdown ">
                                            <a href="javascript:void(0)"
                                                class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold">
                                                Astrology Online
                                            </a>
                                            <a class="dropdown-caret dropdownmob dropdown-toggle position-absolute px-1"
                                                style="width:20px;right:0!important" role="button" id="navbarDropdown"
                                                data-toggle="dropdown" aria-expanded="false"><b class="caret"></b></a>
                                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                                <a href="{{ route('front.talkList') }}"
                                                    class="dropdown-item list-unstyled py-1 font-14">Talk To
                                                    Astrologer</a>
                                                <a href="{{ route('front.chatList') }}"
                                                    class="dropdown-item list-unstyled py-1 font-14">Chat With
                                                    Astrologer</a>


                                                @php
                                                    $getAstrologerCategory = Http::withoutVerifying()
                                                        ->post(url('/') . '/api/getAstrologerCategory')
                                                        ->json();

                                                @endphp

                                                @foreach ($getAstrologerCategory['recordList'] as $category)
                                                    <a class="dropdown-item list-unstyled py-1 font-14"
                                                        href="{{ route('front.chatList', ['astrologerCategoryId' => $category['id']]) }}">{{ $category['name'] }}</a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush dropdown mb-3">
                                            <a href="javascript:void(0)"
                                                class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold">
                                                Astrology
                                            </a>
                                            <a class="dropdown-caret dropdownmob dropdown-toggle position-absolute px-1"
                                                style="width:20px;right:0!important" id="navbarDropdown2" role="button"
                                                data-toggle="dropdown" aria-expanded="false"><b class="caret"></b></a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <a href="{{ route('front.kundaliMatch') }}"
                                                    class="dropdown-item list-unstyled py-1 font-14">Kundali
                                                    Matching</a>
                                                <a href="{{ route('front.getkundali') }}"
                                                    class="dropdown-item list-unstyled py-1 font-14">Free Janam
                                                    Kundali</a>
                                            </div>
                                        </div>
                                        <div class="list-group list-group-flush dropdown mb-3">
                                            <a href="javascript:void(0)"
                                                class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold">
                                                Horoscope
                                            </a>
                                            <a class="dropdown-caret dropdownmob dropdown-toggle position-absolute px-1"
                                                style="width:20px;right:0!important" id="navbarDropdown2" role="button"
                                                data-toggle="dropdown" aria-expanded="false"><b class="caret"></b></a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <a href="{{ route('front.horoScope') }}"
                                                    class="dropdown-item list-unstyled py-1 font-14">Daily
                                                    Horoscope</a>
                                                <a href="{{ route('front.horoScope') }}"
                                                    class="dropdown-item list-unstyled py-1 font-14">Weekly
                                                    Horoscope</a>
                                                <a href="{{ route('front.horoScope') }}"
                                                    class="dropdown-item list-unstyled py-1 font-14">Yearly
                                                    Horoscope</a>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush dropdown mb-3">
                                            <a href="javascript:void(0)"
                                                class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold">
                                                Panchang
                                            </a>
                                            <a class="dropdown-caret dropdownmob dropdown-toggle position-absolute px-1"
                                                style="width:20px;right:0!important" id="navbarDropdown4" role="button"
                                                data-toggle="dropdown" aria-expanded="false"><b class="caret"></b></a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                                <a href="{{ route('front.getPanchang') }}"
                                                    class="dropdown-item list-unstyled py-1 font-14">Today&#39;s
                                                    Panchang</a>
                                            </div>
                                        </div>

                                        <div class="list-group list-group-flush dropdown mb-3">
                                            <a href="javascript:void(0)"
                                                class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold">
                                                Report
                                            </a>
                                            <a class="dropdown-caret dropdownmob dropdown-toggle position-absolute px-1"
                                                style="width:20px;right:0!important" id="navbarDropdown4" role="button"
                                                data-toggle="dropdown" aria-expanded="false"><b class="caret"></b></a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                                <a href="{{ route('front.reportList') }}"
                                                    class="dropdown-item list-unstyled py-1 font-14">Get Report</a>
                                            </div>
                                        </div>

                                    </div>


                                    <ul class="navbar-nav pt-3 px-3 w-100 d-lg-none">
                                        <li class="nav-item">
                                            <a href="{{ route('front.getkundali') }}" class="nav-link">Free Kundli</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('front.kundaliMatch') }}" class="nav-link">Kundli Matching</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Compatibility</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('front.horoScope') }}" class="nav-link">Horoscopes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0)" class="nav-link">Language</a>
                                        </li>
                                        <li class="nav-item pt-3">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <a href="{{ route('front.talkList') }}"
                                                    class="btn btn-block btn-talk-astrologer m-0 w-100 nav-link">
                                                    Talk To Astrologer</a>
                                            </div>
                                        </li>
                                        <li class="nav-item pt-2">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <a href="{{ route('front.chatList') }}"
                                                    class="btn btn-block btn-chat-astrologer m-0 w-100 nav-link">
                                                    Chat With Astrologer</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

{{-- Chat Accept Reject Model --}}
<div id="chatinfomodal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm h-100 d-flex align-items-center">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title font-weight-bold">
                    Accept Chat Request
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <form id="chatForm">
                    <input type="hidden" name="chatId" id="chatIdInput" value="">
                    <input type="hidden" id="astrologerIdInput" name="astrologerId" value="">
                    <div class="text-center">
                        <a class="btn btn-chataccept  active d-inline-block m-2" id="startchat" role="button"
                            data-toggle="modal">
                            Start Chat
                        </a>
                        <a class="btn btn-chatreject active d-inline-block m-2" id="rejectchat" role="button"
                            data-toggle="modal">
                            Reject Chat
                        </a>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

{{-- Call Accept Reject Modal --}}

<div id="callinfomodal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm h-100 d-flex align-items-center">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title font-weight-bold">
                    Accept Call Request
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <form id="callForm">
                    <input type="hidden" name="callId" id="callIdInput" value="">
                    <input type="hidden" id="astrologerIdInput" name="astrologerId" value="">
                    <input type="hidden" id="calltypeInput" name="call_type" value="">
                    <div class="text-center">
                        <a class="btn btn-chataccept  active d-inline-block m-2" id="startcall" role="button"
                            data-toggle="modal">
                            Start Call
                        </a>
                        <a class="btn btn-chatreject active d-inline-block m-2" id="rejectcall" role="button"
                            data-toggle="modal">
                            Reject Call
                        </a>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

{{-- End Model --}}

<div class="modal fade rounded mt-2 mt-md-5 login-offer" id="loginSignUp" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body pt-0 pb-0">
                <div class="login-offer-bg d-none">
                    <p class="text-white font-22 text-center font-weight-bold p-0 m-0 offertxt1">Get
                        Consultation from Experts</p>
                    <p class="text-center p-0 m-0 offertxt2 ">First Chat Free</p>

                </div>
                <button type="button" class="close login-sig-close-btn loginCloseBut" data-dismiss="modal"
                    aria-hidden="true">
                    ×
                </button>
                <div class="bg-white body">
                    <div class="row ">
                        <div class="col-md-12 px-4 py-5">

                            <ul class="nav nav-tabs">

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="LoginRegisterWithOTP">
                                    <div id="otpless-login-page"></div>

                                    <form method="post" action="{{route('front.verifyOTL')}}" id="OtpLesslogin">
                                        @csrf
                                        <input type="hidden" name="otl_token" id="otl_token">
                                        <input id="contactNo" name="contactNo" type="hidden" value="" />
                                        <input id="countryCode" name="countryCode" type="hidden" value="" />
                                    </form>


                                </div>

                                <div class="tab-pane " id="Login">


                                    <div class="col-md-12 text-center">
                                        <h3><b>Welcome Back!</b></h3>
                                    </div>
                                    <div>
                                        <p class="colorblack mt-md-2 mt-2 text-center pb-md-0 pb-2 mb-0"> Sign
                                            in to your account</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script id="otpless-sdk" type="text/javascript" src="https://otpless.com/v2/auth.js" data-appid="{{$otplessAppId['value']}}"></script>
<script>
    function otpless(otplessUser) {
            console.log(JSON.stringify(otplessUser));
            $("#otl_token").val(otplessUser.token);
            $("#OtpLesslogin").submit();
        }
</script>


<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-storage.js"></script>



<script>
    var firebaseConfig = {
        apiKey: "{{$apiKey['value']}}",
        databaseURL: "{{$databaseURL['value']}}",
        authDomain: "{{$authDomain['value']}}",
        projectId: "{{$projectId['value']}}",
        storageBucket: "{{$storageBucket['value']}}",
        messagingSenderId: "{{$messagingSenderId['value']}}",
        appId: "{{$appId['value']}}",
        measurementId: "{{$measurementId['value']}}"
    };

    firebase.initializeApp(firebaseConfig);

</script>



<script>
    function logout() {
        $.ajax({
            url: "{{ route('front.logout') }}", // URL of your logout route
            type: 'GET',
            success: function(response) {

                toastr.success('Logged out successfully');

                setTimeout(function() {
                    window.location.reload();
                }, 2000);
            },
            error: function(xhr, status, error) {
                toastr.error(error);
            }
        });
    }



</script>

@if (authcheck())
    <script>
       // Store the IDs of notifications that have already triggered a modal
let processedNotifications = new Set();

function setIds(chatId, astrologerId) {
    document.getElementById('chatIdInput').value = chatId;
    document.getElementById('astrologerIdInput').value = astrologerId;
}

function setCallIds(callId, astrologerId,call_type) {
    document.getElementById('callIdInput').value = callId;
    document.getElementById('astrologerIdInput').value = astrologerId;
    document.getElementById('calltypeInput').value = call_type;
}



// Handle audio context
window.onload = function() {
    var context = new (window.AudioContext || window.webkitAudioContext)();
    context.resume().then(() => {
        console.log('Playback resumed successfully');
    });
};


setInterval(function() {
    fetch("{{ route('api.getUserNotification', ['token' => $token]) }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            const notificationList = document.getElementById('notificationList');
            const notificationCount = document.getElementById('notificationCount');

            var lastchild = $("#notificationList li:first-child").attr('not-id');
            lastchild = lastchild==undefined?0:parseInt(lastchild);
            console.log(lastchild);

            notificationList.innerHTML = '';
            notificationCount.innerText = data.recordList.length; // Update notification count

            data.recordList.forEach(notification => {
                const isChatAccepted = notification.chatStatus === 'Accepted';
                const isCallAccepted = notification.callStatus === 'Accepted';


                if (notification.id > lastchild && lastchild != undefined && ( isChatAccepted || isCallAccepted))
                        playSound("{{ asset('public/sound/livechat-129007.mp3') }}");

                notificationList.innerHTML += `
                    <li class="d-lg-block ${isChatAccepted || isCallAccepted ? 'bg-pink' : ''}" not-id="${notification.id}">
                        <div>
                            <a class="dropdown-item" ${isChatAccepted ? `onclick="setIds('${notification.chatId}', '${notification.astrologerId}')" data-toggle="modal" data-target="#chatinfomodal"` : (isCallAccepted ? `onclick="setCallIds('${notification.callId}', '${notification.astrologerId}','${notification.call_type}')" data-toggle="modal" data-target="#callinfomodal"` : '')}>
                                <span class="mr-2 accSet accSettingWeb">
                                    <i class="fa-solid fa-bell"></i>
                                </span>
                                <span>${notification.title}</span>
                            </a>
                        </div>
                    </li>
                `;

                // Check if the notification has already been processed
                if ((isChatAccepted || isCallAccepted) && !processedNotifications.has(notification.id)) {
                    // Add the notification ID to the set of processed notifications
                    processedNotifications.add(notification.id);

                    // Open the respective modal if the condition matches
                    if (isChatAccepted) {
                        setIds(notification.chatId, notification.astrologerId);
                        $('#chatinfomodal').modal('show');
                    } else if (isCallAccepted) {
                        setCallIds(notification.callId, notification.astrologerId,notification.call_type);

                        $('#callinfomodal').modal('show');
                    }
                }
            });
        })
        .catch(error => console.error('Error fetching notifications:', error));
}, 4000);


function playSound(url) {
        const audio = new Audio(url);
        audio.play();
    }





        // Start Chat

        $('#startchat').click(function(e) {
            e.preventDefault();

            @php
                $token = $session->get('token');

            @endphp

            var formData = $('#chatForm').serialize();
            var astrologerId = $("#astrologerIdInput").val();
            var chatId = $("#chatIdInput").val();


            $.ajax({
                url: "{{ route('api.acceptChatRequestFromCustomer', ['token' => $token]) }}",
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Chat Started Successfully..Wait');
                    window.location.href = "{{ route('front.chat') }}" + "?astrologerId=" +
                        astrologerId + "&chatId=" + chatId;
                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });

        // Reject Chat

        $('#rejectchat').click(function(e) {
            e.preventDefault();

            @php
                $token = $session->get('token');
            @endphp

            var formData = $('#chatForm').serialize();
            var astrologerId = $("#astrologerIdInput").val();

            $.ajax({
                url: "{{ route('api.rejectChatRequestFromCustomer', ['token' => $token]) }}",
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Chat Rejected Successfully.');
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });


        // Start Call

        $('#startcall').click(function(e) {
            e.preventDefault();

            @php
                $token = $session->get('token');

            @endphp

            var formData = $('#callForm').serialize();
            var astrologerId = $("#astrologerIdInput").val();
            var callId = $("#callIdInput").val();
            var call_type = $("#calltypeInput").val();


            $.ajax({
                url: "{{ route('api.acceptCallRequestFromCustomer', ['token' => $token]) }}",
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Call Started Successfully..Wait');
                    window.location.href = "{{ route('front.call') }}" + "?astrologerId=" +
                        astrologerId + "&callId=" + callId + "&call_type=" + call_type;
                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });


        // Reject Call

        $('#rejectcall').click(function(e) {
            e.preventDefault();

            @php
                $token = $session->get('token');
            @endphp

            var formData = $('#callForm').serialize();
            var astrologerId = $("#astrologerIdInput").val();

            $.ajax({
                url: "{{ route('api.rejectCallRequestFromCustomer', ['token' => $token]) }}",
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Call Rejected Successfully.');
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });




        // Notification Clear


        $('#clearNotifications').click(function(e) {
            e.preventDefault();

            @php
                $token = $session->get('token');
            @endphp


            $.ajax({
                url: "{{ route('api.deleteAllUserNotification', ['token' => $token]) }}",
                type: 'POST',
                success: function(response) {
                    toastr.success('Notification Cleared Successfully');
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });
    </script>
@endif

