@extends('frontend.astrologers.layout.master')
<style>
    /* Live Astrologer Page Styles */
    .live-stream-page {
        background-color: #000;
        min-height: 100vh;
        padding-bottom: 20px;
    }

    .breadcrumb-section {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        padding: 15px 0;
    }

    .breadcrumb-section .breadcrumbs {
        color: white;
        font-size: 14px;
    }

    .breadcrumb-section .breadcrumbs a {
        color: white;
        text-decoration: none;
        transition: opacity 0.3s ease;
    }

    .breadcrumb-section .breadcrumbs a:hover {
        opacity: 0.8;
    }

    /* Video Player Container */
    .video-player-container {
        background: #000;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        min-height: 500px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .video-player-controls {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 10;
        pointer-events: none;
    }

    .control-top-left {
        position: absolute;
        top: 15px;
        left: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        background: rgba(0, 0, 0, 0.6);
        padding: 8px 15px;
        border-radius: 25px;
        pointer-events: auto;
    }

    .control-top-right {
        position: absolute;
        top: 15px;
        right: 15px;
        display: flex;
        align-items: center;
        gap: 15px;
        pointer-events: auto;
    }

    .control-top-right-2 {
        position: absolute;
        top: 15px;
        right: 80px;
        pointer-events: auto;
    }

    .expert-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .expert-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid #6d4ec6;
        object-fit: cover;
    }

    .expert-details {
        color: white;
        font-size: 14px;
    }

    .expert-name {
        font-weight: 600;
        font-size: 15px;
    }

    .view-count-badge {
        background: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 8px 15px;
        border-radius: 25px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
    }

    .btn-end-session {
        background: rgba(238, 78, 94, 0.9);
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .btn-end-session:hover {
        background: rgba(238, 78, 94, 1);
        color: white;
        text-decoration: none;
        transform: scale(1.05);
    }

    .image-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(45deg, #6d4ec6, #8b6fd8);
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        font-size: 18px;
        border: 2px solid #6d4ec6;
    }

    /* Chat Section */
    .chat-section {
        background: #fff;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        height: 100%;
        min-height: 500px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .chat-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        padding: 20px;
        border-radius: 16px 16px 0 0;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
    }

    .chat-messages {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        background: linear-gradient(180deg, rgba(109, 78, 198, 0.05) 0%, rgba(255, 255, 255, 1) 100%);
        min-height: 300px;
        max-height: 500px;
    }

    .chat-messages::-webkit-scrollbar {
        width: 6px;
    }

    .chat-messages::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .chat-messages::-webkit-scrollbar-thumb {
        background: #6d4ec6;
        border-radius: 10px;
    }

    .chat-message {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
        animation: fadeIn 0.3s ease;
    }

    .chat-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        flex-shrink: 0;
        border: 2px solid #6d4ec6;
    }

    .chat-message .image-placeholder {
        width: 40px;
        height: 40px;
        font-size: 16px;
        flex-shrink: 0;
    }

    .chat-content {
        flex: 1;
    }

    .chat-username {
        font-weight: 600;
        color: #333;
        font-size: 14px;
        margin-bottom: 4px;
    }

    .chat-text {
        color: #555;
        font-size: 14px;
        line-height: 1.5;
        word-wrap: break-word;
    }

    .chat-input-container {
        padding: 20px;
        background: #fff;
        border-top: 2px solid #f0f0f0;
        border-radius: 0 0 16px 16px;
    }

    .chat-input-wrapper {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .chat-input {
        flex: 1;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 25px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .chat-input:focus {
        border-color: #6d4ec6;
        box-shadow: 0 0 0 3px rgba(109, 78, 198, 0.1);
        outline: none;
    }

    .btn-send-message {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        border: none;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
    }

    .btn-send-message:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(109, 78, 198, 0.4);
    }

    .btn-send-message:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    /* Video Player */
    #remote-playerlist {
        width: 100%;
        height: 100%;
        min-height: 500px;
        background: #000;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
    }

    .player {
        width: 100%;
        height: 100%;
        min-height: 500px;
    }

    /* Modals */
    .modal-content {
        border-radius: 16px;
        border: none;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    }

    .modal-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        border-radius: 16px 16px 0 0;
        padding: 20px 25px;
        border: none;
    }

    .modal-header .modal-title {
        font-size: 20px;
        font-weight: 600;
        margin: 0;
    }

    .modal-header .close {
        color: white;
        opacity: 0.9;
        font-size: 28px;
        font-weight: 300;
    }

    .modal-header .close:hover {
        opacity: 1;
    }

    /* Waitlist Modal */
    .waitlist-item {
        padding: 15px;
        background: #f8f9fa;
        border-radius: 8px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .waitlist-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #6d4ec6;
    }

    .btn-waitlist {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        border: none;
        border-radius: 8px;
        padding: 12px 30px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-waitlist:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
    }

    /* Gift Modal */
    .gift-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 15px;
        padding: 20px;
    }

    .gift-item {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 15px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .gift-item:hover {
        border-color: #6d4ec6;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.15);
    }

    .gift-item.selected {
        border-color: #6d4ec6;
        background: rgba(109, 78, 198, 0.1);
    }

    .gift-item img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        margin-bottom: 8px;
    }

    .gift-item .gift-name {
        font-size: 12px;
        font-weight: 600;
        color: #333;
        margin-bottom: 5px;
    }

    .gift-item .gift-price {
        font-size: 14px;
        font-weight: 700;
        color: #6d4ec6;
    }

    .wallet-balance-box {
        background: linear-gradient(135deg, rgba(109, 78, 198, 0.1) 0%, rgba(139, 111, 216, 0.1) 100%);
        padding: 15px;
        border-radius: 12px;
        text-align: center;
        margin-bottom: 20px;
    }

    .wallet-balance-box h4 {
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
    }

    .wallet-balance-box .balance-amount {
        font-size: 24px;
        font-weight: 700;
        color: #6d4ec6;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .video-player-container {
            min-height: 300px;
        }

        .chat-section {
            min-height: 400px;
            margin-top: 20px;
        }

        .control-top-right-2 {
            right: 15px;
            top: 60px;
        }

        .gift-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
    }
</style>
@section('content')
    <div class="live-stream-page">
        <div class="breadcrumb-section d-none d-md-block">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('front.astrologerindex') }}">
                        <i class="fa fa-home"></i>
                    </a>
                    <i class="fa fa-chevron-right"></i>
                    <span>Live Astrologers</span>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8 col-12 mb-4 mb-lg-0">
                    <div class="video-player-container">
                        <div id="remote-playerlist" class="position-relative h-100">
                            <div class="user-gift-expert position-absolute d-none align-items-center justify-content-center w-100 h-100" style="z-index: 5;">
                                <div id="usergift-animation" class="h-100 w-100"></div>
                            </div>

                            <div id="remote-playerlist-controls" class="video-player-controls">
                                <div class="control-top-left">
                                    <div class="expert-info">
                                        @php
                                            $hasProfileImage = !empty($liveAstrologer->profileImage);
                                            $expertName = $liveAstrologer->name ?? 'Astrologer';
                                            $expertInitial = strtoupper(substr($expertName, 0, 1));
                                        @endphp
                                        @if($hasProfileImage)
                                            <img id="expertImgLive" src="/{{ $liveAstrologer->profileImage }}" 
                                                class="expert-avatar" alt="{{ $expertName }}"
                                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="image-placeholder" style="display: none;">
                                                {{ $expertInitial }}
                                            </div>
                                        @else
                                            <div class="image-placeholder">
                                                {{ $expertInitial }}
                                            </div>
                                        @endif
                                        <div class="expert-details">
                                            <div class="expert-name" id="expertNameLive">{{ $expertName }}</div>
                                            <div class="text-white" style="font-size: 11px; opacity: 0.8;" id="cohostName"></div>
                                        </div>
                                        <span id="cohost-timer" class="text-white ml-2 position-relative d-none" style="font-size: 12px;">
                                            | <span style="width:30px; position:relative; display:inline-block">
                                                <span class="now playing" id="cohostName-music">
                                                    <span class="bar n1">A</span>
                                                    <span class="bar n2">B</span>
                                                    <span class="bar n4">D</span>
                                                </span>
                                            </span>
                                            <span id="wait-timer"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="control-top-right">
                                    <div class="view-count-badge">
                                        <i class="fas fa-eye"></i>
                                        <span id="view-count">0</span>
                                    </div>
                                </div>
                                <div class="control-top-right-2">
                                    <a href="#" class="btn-end-session Endlivesession">
                                        <i class="fas fa-sign-out-alt"></i> End Session
                                    </a>
                                </div>
                            </div>

                            <div id="host" class="row d-block h-100">
                                <div id="hostVideo" class="d-block h-100">
                                    <div class="content h-100" id="remote-playerlists"></div>
                                </div>
                            </div>
                            <div id="cohost" class="row d-block h-100">
                                <div id="coHostVideo">
                                    <div class="content1 h-100" id="content1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="chat-section">
                        <div class="chat-header">
                            <i class="fas fa-comments mr-2"></i> CHAT ROOM
                        </div>
                        <div class="chat-messages" id="log"></div>
                        <div class="chat-input-container">
                            <div class="chat-input-wrapper">
                                <input type="text" placeholder="Say Hi...!" autocomplete="off" 
                                    class="chat-input" id="channelMessage">
                                <button class="btn-send-message" id="send_channel_message" disabled>
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="waitlist-item-htm" class="d-none"></div>

        <!-- Waitlist Modal -->
        <div class="modal fade" id="waitlist" tabindex="-1" role="dialog" aria-labelledby="waitlistModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fas fa-users mr-2"></i> Waitlist
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="font-weight-bold mb-3" style="color: #333;">In this room</p>
                        <div id="room-item"></div>
                        <div class="text-center my-3">
                            <span style="background: #f0f0f0; color: #333; padding: 8px 15px; border-radius: 20px; font-size: 13px; font-weight: 600;">
                                Others are waiting
                            </span>
                        </div>
                        <div id="waitlist-items"></div>
                    </div>
                    <div class="modal-footer" style="border-top: 2px solid #f0f0f0; padding: 20px;">
                        <div class="w-100 text-center">
                            <a onclick="joinwaitlist(0);" id="Waitlist-join-wait" class="btn-waitlist">Connect Now</a>
                            <a onclick="LeaveWaitlistConfirm();" id="Waitlist-exit-wait" class="btn-waitlist d-none">Exit Waitlist</a>
                            <p class="font-weight-bold mb-0 mt-3" style="color: #333;">
                                Wait time - <span id="waiting-time" style="color: #ee4e5e; font-size: 18px;">00:00</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Session Modal -->
        <div class="modal fade" id="endSessionConfirm" tabindex="-1" role="dialog" aria-labelledby="endSessionModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center" style="padding: 40px 20px;">
                        <i class="fas fa-exclamation-triangle" style="font-size: 64px; color: #ffc107; margin-bottom: 20px;"></i>
                        <h2 style="color: #333; margin-bottom: 15px;">Confirmation</h2>
                        <p style="color: #666; font-size: 16px;">Are you sure you want to end the current session?</p>
                    </div>
                    <div class="modal-footer" style="border-top: 2px solid #f0f0f0; padding: 0;">
                        <div class="w-100 d-flex">
                            <button class="btn col-6 rounded-0" data-dismiss="modal" style="background: #f0f0f0; color: #333; padding: 15px; font-weight: 600; border: none;">
                                No
                            </button>
                            <a onclick="LeaveAudioCall(true, false);" class="btn col-6 rounded-0" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; padding: 15px; font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: center;">
                                Yes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Leave Queue Modal -->
        <div class="modal fade" id="ModelleaveQueue" tabindex="-1" role="dialog" aria-labelledby="leaveQueueModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center" style="padding: 30px 20px;">
                        <div class="mb-4">
                            @php
                                $hasProfileImage = !empty($liveAstrologer->profileImage);
                                $expertName = $liveAstrologer->name ?? 'Astrologer';
                                $expertInitial = strtoupper(substr($expertName, 0, 1));
                            @endphp
                            @if($hasProfileImage)
                                <img id="leave-expert-image" src="/{{ $liveAstrologer->profileImage }}" 
                                    class="rounded-circle" width="90" height="90" alt="{{ $expertName }}"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="image-placeholder" style="display: none; width: 90px; height: 90px; font-size: 36px; margin: 0 auto;">
                                    {{ $expertInitial }}
                                </div>
                            @else
                                <div class="image-placeholder" style="width: 90px; height: 90px; font-size: 36px; margin: 0 auto;">
                                    {{ $expertInitial }}
                                </div>
                            @endif
                        </div>
                        <h3 class="font-weight-bold" id="leave-expert-name" style="color: #333; margin-bottom: 20px;">{{ $expertName }}</h3>
                        <div style="background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(255, 152, 0, 0.1) 100%); padding: 20px; border-radius: 12px; margin-bottom: 20px;">
                            <p class="mb-2" style="color: #666; font-weight: 600;">Your call will be connected in</p>
                            <p class="mb-0">
                                <span style="margin: 0 5px;">
                                    <span id="leave-hh" style="color: #ee4e5e; font-weight: 700; font-size: 30px;">00</span>
                                    <span style="color: #666; font-size: 14px;">Hrs</span>
                                </span>
                                <span style="margin: 0 5px;">
                                    <span id="leave-mm" style="color: #ee4e5e; font-weight: 700; font-size: 30px;">00</span>
                                    <span style="color: #666; font-size: 14px;">Min</span>
                                </span>
                                <span style="margin: 0 5px;">
                                    <span id="leave-ss" style="color: #ee4e5e; font-weight: 700; font-size: 30px;">00</span>
                                    <span style="color: #666; font-size: 14px;">Sec</span>
                                </span>
                            </p>
                        </div>
                        <p style="color: #666; font-size: 14px; line-height: 1.6;">
                            Are you sure you want to leave the waitlist? You will be added at the end of the queue if you join again.
                        </p>
                    </div>
                    <div class="modal-footer" style="border-top: 2px solid #f0f0f0; padding: 20px;">
                        <div class="w-100 d-flex justify-content-center gap-3">
                            <button type="button" class="btn" data-dismiss="modal" style="background: #f0f0f0; color: #333; padding: 10px 30px; border-radius: 8px; font-weight: 600; border: none;">
                                Cancel
                            </button>
                            <a onclick="LeaveWaitlist();" id="join-wait" class="btn-waitlist">Exit Waitlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gift Modal -->
        <div class="modal fade" id="gift_popup" tabindex="-1" aria-labelledby="giftModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form id="giftForm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">
                                <i class="fas fa-gift mr-2"></i> Send a Gift
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="wallet-balance-box">
                                <h4>Available Wallet Balance</h4>
                                <div class="balance-amount">
                                    {{ $currency['value'] }}<span id="gift-wallet-balance">{{ number_format($wallet_amount, 2) }}</span>
                                </div>
                            </div>

                            <div class="gift-grid" id="loadGiftItems">
                                @foreach ($getGift['recordList'] as $gift)
                                    <div class="gift-item" data-gift-id="{{ $gift['id'] }}" data-gift-amount="{{ $gift['amount'] }}">
                                        @php
                                            $hasGiftImage = !empty($gift['image']);
                                        @endphp
                                        @if($hasGiftImage)
                                            <img src="/{{ $gift['image'] }}" alt="{{ $gift['name'] }}"
                                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="image-placeholder" style="display: none; width: 60px; height: 60px; font-size: 24px; margin: 0 auto 8px;">
                                                <i class="fas fa-gift"></i>
                                            </div>
                                        @else
                                            <div class="image-placeholder" style="width: 60px; height: 60px; font-size: 24px; margin: 0 auto 8px;">
                                                <i class="fas fa-gift"></i>
                                            </div>
                                        @endif
                                        <p class="gift-name">{{ $gift['name'] }}</p>
                                        <p class="gift-price">{{ $currency['value'] }}{{ number_format($gift['amount'], 2) }}</p>
                                    </div>
                                @endforeach
                            </div>

                            <input type="hidden" name="astrologerId" value="{{ $liveAstrologer->astrologerId }}">
                            <input type="hidden" name="giftId" id="selectedGiftId" value="">
                        </div>
                        <div class="modal-footer" style="border-top: 2px solid #f0f0f0; padding: 20px;">
                            <div class="w-100 d-flex justify-content-center gap-3">
                                @if ($wallet_amount > 0)
                                    <a class="btn-waitlist" href="{{ route('front.walletRecharge') }}" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                                        <i class="fas fa-wallet mr-2"></i> Recharge
                                    </a>
                                    <a id="send-gift" class="btn-waitlist send-gift">Send Gift</a>
                                    <button class="btn-waitlist send-gift" id="send-giftBtn" type="button" style="display:none;" disabled>
                                        <span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span> Loading...
                                    </button>
                                @else
                                    <a href="{{ route('front.walletRecharge') }}" class="btn-waitlist" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                                        <i class="fas fa-wallet mr-2"></i> Recharge
                                    </a>
                                    <a class="btn-waitlist send-gift" style="opacity: 0.5; cursor: not-allowed;">Send Gift</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('public/frontend/agora/AgoraRTC_N-4.20.2.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/agora-rtm-sdk@1.6.0/index.js"></script>



    <script>
        // Rtm Section



        // Form Click Event
        $(document).ready(function() {

            var accountName = '';
            @if (astroauthcheck())
                var accountName = "liveAstrologer_{{ astroauthcheck()['id'] }}";
            @endif

            var agoraAppId = appid;

            var RtmToken = "{{ $RtmToken['rtmToken'] }}";
            // RtmClient
            const rTmclient = AgoraRTM.createInstance(agoraAppId, {
                enableLogUpload: false
            });

            // Login
            rTmclient.login({
                uid: accountName,
                token: RtmToken,
            }).then(() => {
                console.log('AgoraRTM client login success. Username: ' + accountName);
                isLoggedIn = true;

                // Channel Join
                var channelName = "liveAstrologer_{{ $liveAstrologer->astrologerId }}";

                channel = rTmclient.createChannel(channelName);
                // console.log(channel);
                // document.getElementById("channelNameBox").innerHTML = channelName;
                channel.join().then(() => {
                    console.log('AgoraRTM client channel join success.');
                    $("#send_channel_message").prop("disabled", false);
                    
                    // Enable send button when input has text
                    $('#channelMessage').on('input', function() {
                        if ($(this).val().trim().length > 0) {
                            $('#send_channel_message').prop('disabled', false);
                        } else {
                            $('#send_channel_message').prop('disabled', true);
                        }
                    });

                    sendMSG('Joined!');

                    // Click event handler for sending messages
                    // $("#send_channel_message").click(function() {
                    //     var singleMessage = $('#channelMessage').val();
                    //     sendMSG(singleMessage);
                    // });


                    // $('#channelMessage').keypress((e) => {
                    //     if (e.which === 13) {
                    //         $('#send_channel_message').click();
                    //         var singleMessage = $('#channelMessage').val();
                    //         sendMSG(singleMessage);
                    //     }
                    // });

                    function sendMessageHandler() {
                            var singleMessage = $('#channelMessage').val();
                            sendMSG(singleMessage);
                        }

                        $("#send_channel_message").click(sendMessageHandler);

                    $('#channelMessage').keypress((e) => {
                        if (e.which === 13) {
                            sendMessageHandler();
                        }
                    });

                    // Event listener for receiving messages
                    channel.on('ChannelMessage', (message, senderId) => {

                        var messageParts = message.text.split('&&');
                        var senderName = messageParts[0];
                        var messageContent = messageParts[1];
                        if(messageParts[2]){
                            var imageUrl = messageParts[2];
                        }else{
                            var imageUrl = "{{ asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png') }}";
                        }

                        var senderId = messageParts[4];

                        messageContent = messageContent.replace("GIF_MSG::", "");

                        // Construct the HTML for the received message
                        var senderInitial = senderName ? senderName.charAt(0).toUpperCase() : 'U';
                        var receivedMessageHtml = `
                                    <div class="chat-message" user="${senderId}">
                                        <img src="${imageUrl}" class="chat-avatar" alt="${senderName}"
                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                        <div class="image-placeholder chat-avatar" style="display: none;">
                                            ${senderInitial}
                                        </div>
                                        <div class="chat-content">
                                            <div class="chat-username">${senderName}</div>
                                            <div class="chat-text">${messageContent}</div>
                                        </div>
                                    </div>
                                `;

                        // Append the received message HTML to the log container
                        $("#log").append(receivedMessageHtml);
                        
                        // Scroll to bottom
                        var chatMessages = document.getElementById('log');
                        if (chatMessages) {
                            chatMessages.scrollTop = chatMessages.scrollHeight;
                        }
                    });


                    function sendMSG(singleMessage) {
                        var accountName = '';
                        var imageUrl = '';
                        @if (astroauthcheck())
                            var accountName = "{{ astroauthcheck()['name'] }}";
                            @if(astroauthcheck()['profile'])
                            var imageUrl = "{{ url('/') }}" +
                                "/{{ astroauthcheck()['profile'] }}";
                            @else{
                                var imageUrl = "{{ asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png') }}";
                            }
                            @endif
                        @endif

                        // Construct the message string with delimiters '&&'
                        var message = accountName + "&&" + singleMessage +
                            "&&" + imageUrl + "&&null&&" + accountName;

                        // Assuming 'channel' is your channel object
                        channel.sendMessage({
                            text: message
                        }).then(() => {
                            // console.log("Message sent successfully.");
                            // console.log("Your message was: " +
                            //     singleMessage + " by " + accountName
                            // );

                            // Construct the HTML for the sent message
                            var accountInitial = accountName ? accountName.charAt(0).toUpperCase() : 'U';
                            var sentMessageHtml = `
                                <div class="chat-message" user="${accountName}">
                                    <img src="${imageUrl}" class="chat-avatar" alt="${accountName}"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <div class="image-placeholder chat-avatar" style="display: none;">
                                        ${accountInitial}
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-username">${accountName}</div>
                                        <div class="chat-text">${singleMessage}</div>
                                    </div>
                                </div>
                            `;

                            // Append the sent message HTML to the log container
                            $("#log").append(sentMessageHtml);

                            // Clear the message input field
                            $('#channelMessage').val('');
                            $('#send_channel_message').prop('disabled', true);
                            
                            // Scroll to bottom
                            var chatMessages = document.getElementById('log');
                            if (chatMessages) {
                                chatMessages.scrollTop = chatMessages.scrollHeight;
                            }
                        }).catch(error => {
                            toastr.error(
                                "Message wasn't sent due to an error: ",
                                error);
                        });
                    }

                    channel.on('MemberJoined', memberId => {
                        channel.getMembers().then((value) => {
                            // console.log("Members count: " + value.length);
                            $("#view-count").text(value.length);
                        }).catch(error => {
                            console.error("Error fetching members count: ", error);
                        });
                    });

                    channel.on('MemberLeft', memberId => {
                        channel.getMembers().then((value) => {
                            // console.log("Members count: " + value.length);
                            $("#view-count").text(value.length);
                        }).catch(error => {
                            console.error("Error fetching members count: ", error);
                        });
                    });

                    channel.getMembers().then((value) => {
                        // console.log("Members count: " + value.length);
                        $("#view-count").text(value.length);
                    }).catch(error => {
                        console.error("Error fetching members count: ", error);
                    });



                }).catch(error => {
                    console.log('AgoraRTM client channel join failed: ', error);
                }).catch(err => {
                    console.log('AgoraRTM client login failure: ', err);
                });
            });
        });


        // RtC Section

        var token = "{{ $liveAstrologer->token }}";
        var channel = "{{ $liveAstrologer->channelName }}";
        var appid = "{{ $agoraAppIdValue }}";


        // create Agora client
        var client = AgoraRTC.createClient({
            mode: "live",
            codec: "vp8"
        });


        var localTracks = {
            videoTrack: null,
            audioTrack: null
        };
        var localTrackState = {
            videoTrackEnabled: true,
            audioTrackEnabled: true
        }
        var remoteUsers = {};
        // Agora client options
        var options = {
            appid: appid,
            channel: channel,
            uid: null,
            token: token,
            role: "audience"
        };



        // $("#audience-join").click(function(e) {
        //     options.role = "audience";
        // })

        options.role = "host";


        $(document).ready(async function() {

            await join();


        });

        $("#leave").click(function(e) {
            leave();
        })

        async function join() {
            // create Agora client
            client.setClientRole(options.role);
            $("#mic-btn").prop("disabled", false);
            $("#video-btn").prop("disabled", false);
            if (options.role === "audience") {
                $("#mic-btn").prop("disabled", true);
                $("#video-btn").prop("disabled", true);
                // add event listener to play remote tracks when remote user publishs.
                client.on("user-published", handleUserPublished);
                client.on("user-joined", handleUserJoined);
                client.on("user-left", handleUserLeft);
            }

            client.on('user-published', function(user, mediaType) {
            console.log('New user published: ' + user.uid);
            // Handle new user join event here
            });
            // join the channel
            options.uid = await client.join(options.appid, options.channel, options.token);
                if (options.role === "host") {

            client.on("user-published", handleUserPublished);
            client.on("user-joined", handleUserJoined);
            client.on("user-left", handleUserLeft);
            // create local audio and video tracks
            localTracks.audioTrack = await AgoraRTC.createMicrophoneAudioTrack();
            localTracks.videoTrack = await AgoraRTC.createCameraVideoTrack();
            // play local video track
            // localTracks.videoTrack.play("local-player");


            const player = $(`
                <div id="player-${options.uid}" class="player d-inline"></div>
            `);

                $("#remote-playerlists").append(player);
                localTracks.videoTrack.play(`player-${options.uid}`);



            $("#local-player-name").text(`localTrack(${options.uid})`);
            // publish local tracks to channel
            await client.publish(Object.values(localTracks));
            console.log("Successfully published.");
        }

        }

        async function leave() {
            for (trackName in localTracks) {
                var track = localTracks[trackName];
                if (track) {
                    track.stop();
                    track.close();
                    $('#mic-btn').prop('disabled', true);
                    $('#video-btn').prop('disabled', true);
                    localTracks[trackName] = undefined;
                }
            }
            // remove remote users and player views
            remoteUsers = {};
            $("#remote-playerlists").html("");
            // leave the channel
            await client.leave();
            $("#local-player-name").text("");
            $("#host-join").attr("disabled", false);
            $("#audience-join").attr("disabled", false);
            $("#leave").attr("disabled", true);
            hideMuteButton();
            console.log("Client successfully left channel.");
        }

        async function subscribe(user, mediaType) {
            const uid = user.uid;
            // subscribe to a remote user
            await client.subscribe(user, mediaType);
            // console.log("Successfully subscribed.");
            if (mediaType === 'video') {


                const player = $(`
                <div id="player-${uid}" class="player d-inline"></div>
            `);

                $("#remote-playerlists").append(player);
                user.videoTrack.play(`player-${uid}`);
            }
            if (mediaType === 'audio') {
                user.audioTrack.play();
            }
        }

        // Handle user published
        function handleUserPublished(user, mediaType) {

            const id = user.uid;
            remoteUsers[id] = user;
            subscribe(user, mediaType);
        }

        function handleBroadcastEnd() {
            window.location.href = "{{ route('front.getLiveAstro') }}";
        }


        // Handle user joined
        function handleUserJoined(user, mediaType) {
            const id = user.uid;
            remoteUsers[id] = user;
            subscribe(user, mediaType);


        }

        // Handle user left
        function handleUserLeft(user) {
            const id = user.uid;
            delete remoteUsers[id];
            $(`#player-wrapper-${id}`).remove();


            if (Object.keys(remoteUsers).length === 0) {
                handleBroadcastEnd();
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            var endingSession = false;
            function endLiveSession() {
                if (endingSession) {
                    return;
                }
                endingSession = true;
                $.ajax({
                    url: '{{ route("api.endLiveSession") }}',
                    type: 'POST',
                    data: {
                        astrologerId: '{{ astroauthcheck()['astrologerId'] }}',
                    },
                    success: function (response) {
                        toastr.success('Live Session Ended Successfully');
                        window.location.href = "{{ route('front.astrologerindex') }}";
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    },
                    complete: function () {
                        endingSession = false;
                    }
                });
            }
            $('.Endlivesession').click(function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure you want to end the live stream?',
                    showCancelButton: true,
                    confirmButtonColor: '#3085D6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        endLiveSession();
                    }
                });
            });
            $(window).on('beforeunload', function () {
                if (!endingSession) {
                    endLiveSession();
                }
            });
        });

        // Gift selection
        $(document).ready(function() {
            $('.gift-item').on('click', function() {
                $('.gift-item').removeClass('selected');
                $(this).addClass('selected');
                var giftId = $(this).data('gift-id');
                var giftAmount = $(this).data('gift-amount');
                $('#selectedGiftId').val(giftId);
                $('#giftAmount').val(giftAmount);
            });

            // Auto-scroll chat to bottom
            function scrollChatToBottom() {
                var chatMessages = document.getElementById('log');
                if (chatMessages) {
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }
            }

            // Scroll when new message is added
            var observer = new MutationObserver(function(mutations) {
                scrollChatToBottom();
            });

            var chatContainer = document.getElementById('log');
            if (chatContainer) {
                observer.observe(chatContainer, { childList: true, subtree: true });
            }
        });
    </script>
    @endsection
