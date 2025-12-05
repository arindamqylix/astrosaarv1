@extends('frontend.astrologers.layout.master')
<style>
    /* Image Placeholder Styles */
    .image-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(45deg, #6d4ec6, #8b6fd8);
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 50%;
        overflow: hidden;
        flex-shrink: 0;
    }

    .image-placeholder-circle {
        border-radius: 50%;
    }

    .image-placeholder-profile {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }

    /* Status Container */
    .status-container {
        width: 220px;
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        transition: all 0.3s ease;
    }

    .status-container:hover {
        box-shadow: 0 6px 30px rgba(109, 78, 198, 0.2);
    }

    .status-section {
        margin-bottom: 15px;
    }

    .status-section:last-child {
        margin-bottom: 0;
    }

    .status-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        font-size: 13px;
        color: #333;
    }

    .status-dropdown {
        position: relative;
    }

    .status-dropdown select {
        width: 100%;
        padding: 10px 35px 10px 12px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        background-color: #fff;
        color: #333;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        appearance: none;
        transition: all 0.3s ease;
    }

    .status-dropdown select:focus {
        outline: none;
        border-color: #6d4ec6;
        box-shadow: 0 0 0 3px rgba(109, 78, 198, 0.1);
    }

    .status-dropdown::after {
        content: '\f0d7';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #6d4ec6;
        pointer-events: none;
    }

    .test-sound-btn {
        font-size: 14px;
        width: 100%;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(109, 78, 198, 0.3);
    }

    .test-sound-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.4);
    }

    .test-sound-btn i {
        margin-right: 5px;
    }

    /* Page Header */
    .page-header-section {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        padding: 40px 20px;
        text-align: center;
        margin-bottom: 40px;
        border-radius: 0 0 20px 20px;
    }

    .page-header-section h2 {
        font-size: 32px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
        font-family: 'Playfair Display', serif;
    }

    .page-header-section p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 10px;
        line-height: 1.6;
    }

    /* Request Cards */
    .request-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.3s ease;
        border: 2px solid #f0f0f0;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .request-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(109, 78, 198, 0.15);
        border-color: #6d4ec6;
    }

    .request-card-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        padding: 20px;
        text-align: center;
        font-size: 18px;
        font-weight: 600;
    }

    .request-card-body {
        flex: 1;
        padding: 0;
        overflow-y: auto;
        max-height: 500px;
        min-height: 300px;
    }

    .request-item {
        padding: 20px;
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .request-item:hover {
        background-color: #f8f9fa;
    }

    .request-item:last-child {
        border-bottom: none;
    }

    .request-user-info {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .request-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e0e0e0;
        flex-shrink: 0;
    }

    .request-details {
        flex: 1;
        min-width: 0;
    }

    .request-name {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin-bottom: 5px;
    }

    .request-meta {
        display: flex;
        flex-direction: column;
        gap: 5px;
        font-size: 13px;
        color: #666;
    }

    .request-meta i {
        margin-right: 5px;
        color: #6d4ec6;
        width: 16px;
    }

    .request-actions {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-top: 15px;
    }

    .btn-accept,
    .btn-reject {
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        text-decoration: none;
        border: 2px solid;
    }

    .btn-accept {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        border-color: #28a745;
    }

    .btn-accept:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
        color: white;
        text-decoration: none;
    }

    .btn-reject {
        background: #fff;
        color: #dc3545;
        border-color: #dc3545;
    }

    .btn-reject:hover {
        background: #dc3545;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
        text-decoration: none;
    }

    .empty-state {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 60px 20px;
        text-align: center;
        color: #999;
    }

    .empty-state i {
        font-size: 48px;
        margin-bottom: 15px;
        color: #ddd;
    }

    .empty-state p {
        font-size: 16px;
        font-weight: 500;
        margin: 0;
    }

    /* Report Type Badge */
    .report-type-badge {
        display: inline-block;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        margin: 10px 0 10px 20px;
    }

    /* Modal Styles */
    .modal-content {
        border-radius: 16px;
        border: none;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        border-radius: 16px 16px 0 0;
        padding: 20px 25px;
        border-bottom: none;
    }

    .modal-header .close {
        color: white;
        opacity: 0.9;
        font-size: 28px;
    }

    .modal-header .close:hover {
        opacity: 1;
    }

    .modal-title {
        font-size: 22px;
        font-weight: 600;
        margin: 0;
    }

    .modal-body {
        padding: 25px;
    }

    .user-card {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
    }

    .user-card-img img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #6d4ec6;
    }

    .user-card-info h2 {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    .user-card-info p {
        font-size: 14px;
        color: #666;
        margin-bottom: 8px;
    }

    .user-card-info p span {
        font-weight: 600;
        color: #333;
        margin-right: 8px;
    }

    .form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
    }

    .form-control {
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #6d4ec6;
        box-shadow: 0 0 0 3px rgba(109, 78, 198, 0.1);
        outline: none;
    }

    .modal-footer {
        border-top: 1px solid #f0f0f0;
        padding: 20px 25px;
    }

    .btn-upload {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(109, 78, 198, 0.3);
    }

    .btn-upload:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.4);
        color: white;
    }

    /* Responsive Design */
    @media screen and (max-width: 768px) {
        .status-container {
            width: 90%;
            bottom: 10px;
            right: 10px;
            left: 10px;
            padding: 15px;
        }

        .page-header-section h2 {
            font-size: 24px;
        }

        .page-header-section p {
            font-size: 14px;
        }

        .request-card-body {
            max-height: 400px;
        }

        .request-user-info {
            flex-direction: column;
            align-items: flex-start;
        }

        .request-actions {
            width: 100%;
            flex-direction: row;
        }

        .btn-accept,
        .btn-reject {
            flex: 1;
        }
    }

    /* Scrollbar Styling */
    .request-card-body::-webkit-scrollbar {
        width: 6px;
    }

    .request-card-body::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .request-card-body::-webkit-scrollbar-thumb {
        background: #6d4ec6;
        border-radius: 10px;
    }

    .request-card-body::-webkit-scrollbar-thumb:hover {
        background: #5a3fa8;
    }
</style>
@section('content')
@php
     use Symfony\Component\HttpFoundation\Session\Session;
     use Illuminate\Support\Facades\DB;
     $getAstrologer=DB::table('astrologers')->where('id',astroauthcheck()['astrologerId'])->first();

@endphp

<div class="status-container">
    <div class="status-section">
        <span class="status-label">Chat Status:</span>
        <div class="status-dropdown">
            <select id="chat-status" class="status-select">
                <option value="Online" {{ $getAstrologer->chatStatus == 'Online' ? 'selected' : '' }}>Online</option>
                <option value="Offline" {{ $getAstrologer->chatStatus == 'Offline' || empty($getAstrologer->chatStatus) ? 'selected' : '' }}>Offline</option>
            </select>
        </div>
    </div>
    <div class="status-section">
        <span class="status-label">Call Status:</span>
        <div class="status-dropdown">
            <select id="call-status" class="status-select">
                <option value="Online" {{ $getAstrologer->callStatus == 'Online' ? 'selected' : '' }}>Online</option>
                <option value="Offline" {{ $getAstrologer->callStatus == 'Offline' || empty($getAstrologer->callStatus) ? 'selected' : '' }}>Offline</option>
            </select>
        </div>
    </div>
    <div class="status-section">
        <button id="test-sound-btn" class="test-sound-btn">
            <i class="fa-solid fa-play"></i> Test Sounds
        </button>
        <audio id="sound-player" src="{{ asset('public/sound/ringtone-126505.mp3') }}"></audio>
    </div>
</div>

<div class="page-header-section">
    <div class="container">
        <h2>Explore Your Path with Astrology</h2>
        <p>Explore the mysteries of the zodiac, uncover your birth chart's secrets, and navigate planetary alignments.</p>
        <p>Delve into the intricate tapestry of astrology with personalized horoscopes, insightful birth charts, and transformative guidance.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="request-card">
                <div class="request-card-header">
                    <i class="fas fa-comments mr-2"></i> Chat Requests
                </div>
                <div class="request-card-body" id="chatRequests">
                    @if(isset($getChatRequest['recordList']) && count($getChatRequest['recordList']) > 0)
                        @foreach($getChatRequest['recordList'] as $request)
                            <form action="" id="chatForm">
                                <div class="request-item">
                                    <input type="hidden" name="chatId" id="chatId" value="{{ $request['chatId'] }}">
                                    <input type="hidden" name="partnerId" id="partnerId" value="{{ $request['userId'] }}">
                                    <input type="hidden" name="userId" id="userId" value="{{ $request['astrologerId'] }}">
                                    <div class="request-user-info">
                                        @php
                                            $hasImage = !empty($request['profile']);
                                            $userName = $request['name'] ?? 'User';
                                            $firstLetter = strtoupper(substr($userName, 0, 1));
                                        @endphp
                                        @if($hasImage)
                                            <img src="/{{$request['profile']}}" class="request-avatar" alt="{{$userName}}"
                                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="image-placeholder image-placeholder-circle image-placeholder-profile" style="display: none;">
                                                {{ $firstLetter }}
                                            </div>
                                        @else
                                            <div class="image-placeholder image-placeholder-circle image-placeholder-profile">
                                                {{ $firstLetter }}
                                            </div>
                                        @endif
                                        <div class="request-details">
                                            <div class="request-name">{{$userName}}</div>
                                            <div class="request-meta">
                                                <div>
                                                    <i class="fa fa-calendar"></i>
                                                    <span>{{ date('d-m-Y', strtotime($request['chatcreatedat'])) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="request-actions">
                                        <a href="#" class="btn-accept acceptchat">Accept</a>
                                        <a href="#" class="btn-reject rejectchat">Reject</a>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    @else
                        <div class="empty-state">
                            <i class="fas fa-inbox"></i>
                            <p>No Chat Requests</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="request-card">
                <div class="request-card-header">
                    <i class="fas fa-phone mr-2"></i> Call Requests
                </div>
                <div class="request-card-body" id="callRequests">
                    @if(isset($getCallRequest['recordList']) && count($getCallRequest['recordList']) > 0)
                        @foreach($getCallRequest['recordList'] as $request)
                            <form id="callForm">
                                <div class="request-item">
                                    <input type="hidden" name="callId" id="callId" value="{{ $request['callId'] }}">
                                    <input type="hidden" name="partnerId" id="partnerId" value="{{ $request['userId'] }}">
                                    <input type="hidden" name="userId" id="userId" value="{{ $request['astrologerId'] }}">
                                    <input type="hidden" id="call_type" name="call_type" value="{{ $request['call_type'] }}">
                                    <div class="request-user-info">
                                        @php
                                            $hasImage = !empty($request['profile']);
                                            $userName = $request['name'] ?? 'User';
                                            $firstLetter = strtoupper(substr($userName, 0, 1));
                                        @endphp
                                        @if($hasImage)
                                            <img src="/{{$request['profile']}}" class="request-avatar" alt="{{$userName}}"
                                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="image-placeholder image-placeholder-circle image-placeholder-profile" style="display: none;">
                                                {{ $firstLetter }}
                                            </div>
                                        @else
                                            <div class="image-placeholder image-placeholder-circle image-placeholder-profile">
                                                {{ $firstLetter }}
                                            </div>
                                        @endif
                                        <div class="request-details">
                                            <div class="request-name">{{$userName}}</div>
                                            <div class="request-meta">
                                                <div>
                                                    <i class="fa fa-calendar"></i>
                                                    <span>{{ date('d-m-Y', strtotime($request['callcreatedat'])) }}</span>
                                                </div>
                                                <div>
                                                    @if($request['call_type']==10)
                                                        <i class="fa-solid fa-phone"></i>
                                                        <span>Audio Call</span>
                                                    @else
                                                        <i class="fas fa-video"></i>
                                                        <span>Video Call</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="request-actions">
                                        <a href="#" class="btn-accept acceptcall">Accept</a>
                                        <a href="#" class="btn-reject rejectcall">Reject</a>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    @else
                        <div class="empty-state">
                            <i class="fas fa-inbox"></i>
                            <p>No Call Requests</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="request-card">
                <div class="request-card-header">
                    <i class="fas fa-file-alt mr-2"></i> Report Requests
                </div>
                <div class="request-card-body" id="reportRequests">
                    @if(isset($getUserReport['recordList']) && count($getUserReport['recordList']) > 0)
                        @foreach($getUserReport['recordList'] as $getUserReport)
                            <div class="report-type-badge">{{$getUserReport['reportType']}}</div>
                            <div class="request-item reportList" data-toggle="modal" data-target="#reportModal" data-id="{{ $getUserReport['id'] }}" style="cursor: pointer;">
                                <div class="request-user-info">
                                    @php
                                        $hasImage = !empty($getUserReport['profile']);
                                        $userName = ($getUserReport['firstName'] ?? '') . ' ' . ($getUserReport['lastName'] ?? '');
                                        $firstLetter = strtoupper(substr(trim($userName), 0, 1)) ?: 'U';
                                    @endphp
                                    @if($hasImage)
                                        <img src="/{{$getUserReport['profile']}}" class="request-avatar" alt="{{$userName}}"
                                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                        <div class="image-placeholder image-placeholder-circle image-placeholder-profile" style="display: none;">
                                            {{ $firstLetter }}
                                        </div>
                                    @else
                                        <div class="image-placeholder image-placeholder-circle image-placeholder-profile">
                                            {{ $firstLetter }}
                                        </div>
                                    @endif
                                    <div class="request-details">
                                        <div class="request-name">{{$userName}}</div>
                                        <div class="request-meta">
                                            <div>
                                                <i class="fa fa-calendar"></i>
                                                <span>{{ date('d-m-Y', strtotime($getUserReport['birthDate'])) }}</span>
                                            </div>
                                            <div>
                                                <i class="fa fa-clock"></i>
                                                <span>{{$getUserReport['birthTime']}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="empty-state">
                            <i class="fas fa-inbox"></i>
                            <p>No Report Requests</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="reportModalLabel">Report Details</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="reportForm" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- User details and file upload form elements will be populated here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-upload">Upload PDF</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')


<script>

    // ------------------------------------Chat Section----------------------------------------------------------------------
    $(document).on('click','.acceptchat',function(e) {
            e.preventDefault();

            @php
                $session = new Session();
                $token = $session->get('astrotoken');
                $astrologerId=astroauthcheck()['astrologerId'];
            @endphp

            var form = $(this).closest('form');
            var formData = form.serialize();

            var astrologerId="{{astroauthcheck()['astrologerId']}}";


            var chatId = formData.split("chatId=")[1];
            chatId = parseInt(chatId, 10);

            var partnerId = formData.split("partnerId=")[1];
            partnerId = parseInt(partnerId, 10);





            $.ajax({
                url: "{{ route('api.insertChatRequest', ['token' => $token,'astrologerId' =>$astrologerId]) }}",
                type: 'POST',
                data: formData,
                success: function(response) {
                      $.ajax({
                            url: "{{ route('api.acceptChatRequest', ['token' => $token]) }}",
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                 console.log(response);
                                toastr.success('Chat Started Successfully..Wait');
                                window.location.href = "{{ route('front.astrologerchat') }}" + "?partnerId=" +
                                partnerId + "&chatId=" + chatId;
                            },
                            error: function(xhr, status, error) {
                                toastr.error(xhr.responseText);
                            }
                        });

                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });

        // Reject Chat

        $(document).on('click','.rejectchat',function(e) {
            e.preventDefault();

            @php
                $token = $session->get('astrotoken');
            @endphp

            var form = $(this).closest('form');
            var formData = form.serialize();

            $.ajax({
                url: "{{ route('api.rejectChatRequest', ['token' => $token]) }}",
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Chat Rejected Successfully.');
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });

</script>

{{-- ----------------------------------------Call Section ------------------------------------------------- --}}

<script>

        $(document).on('click','.acceptcall',function(e) {
            e.preventDefault();

            @php
                $session = new Session();
                $token = $session->get('astrotoken');
                $astrologerId=astroauthcheck()['astrologerId'];
            @endphp

            var form = $(this).closest('form');
            var formData = form.serialize();

            var astrologerId="{{astroauthcheck()['astrologerId']}}";


            var callId = formData.split("callId=")[1];
            callId = parseInt(callId, 10);

            var partnerId = formData.split("partnerId=")[1];
            partnerId = parseInt(partnerId, 10);
            var call_type = formData.split("call_type=")[1];
            partnerId = parseInt(call_type, 10);



            $.ajax({
                url: "{{ route('api.acceptCallRequest', ['token' => $token]) }}",
                type: 'POST',
                data: formData,
                success: function(response) {

                    toastr.success('Please wait...');
                    $.ajax({
                        url: '{{ route("api.generateRtcToken")}}',
                        type: 'POST',
                        data: {
                            appID: '<?=$agoraAppIdValue->value; ?>',
                            appCertificate: '<?=$agorcertificateValue->value; ?>',
                            channelName: '{{$channel_name}}'
                        },
                        success: function(response) {
                            var RtcToken = response.rtcToken;


                            $.ajax({
                                url: '{{ route("api.storeToken")}}',
                                type: 'POST',
                                data: {
                                    channelName: '{{$channel_name}}',
                                    token:RtcToken,
                                    callId:callId,
                                },
                                success: function(response_call) {
                                    toastr.success('Call accepted successfully');
                                    window.location.href = "{{ route('front.astrologercall') }}" + "?callId=" + callId + "&call_type=" + call_type;
                                },
                                error: function(xhr, status, error) {
                                    var errorMessage = JSON.parse(xhr.responseText).error.paymentMethod[0];
                                    toastr.error(errorMessage);
                                }
                            });

                        },
                        error: function(xhr, status, error) {
                            toastr.error(xhr.responseText);
                        }
                    });


                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });

        // Reject Chat

        $(document).on('click','.rejectcall',function(e) {

            // e.preventDefault();

            @php
                $token = $session->get('astrotoken');
            @endphp

            var form = $(this).closest('form');
            var formData = form.serialize();

            $.ajax({
                url: "{{ route('api.rejectCallRequest', ['token' => $token]) }}",
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Call Rejected Successfully.');
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });

</script>

<script>

    $(document).ready(function() {
            function fetchChatRequests() {
                $.ajax({
                    url: '/astrologer/get-chat-requests',
                    method: 'POST',
                    data: { astrologerId: '{{ astroauthcheck()['astrologerId'] }}' },
                    success: function(data) {
                        updateChatRequests(data.recordList);
                    }
                });
            }

            function fetchCallRequests() {
                $.ajax({
                    url: '/astrologer/get-call-requests',
                    method: 'POST',
                    data: { astrologerId: '{{ astroauthcheck()['astrologerId'] }}' },
                    success: function(data) {
                        updateCallRequests(data.recordList);
                    }
                });
            }

            function fetchReportRequests() {
                $.ajax({
                    url: '/astrologer/get-report-requests',
                    method: 'POST',
                    data: { astrologerId: '{{ astroauthcheck()['astrologerId'] }}' },
                    success: function(data) {
                        updateReportRequests(data.recordList);
                    }
                });
            }

            function updateChatRequests(requests) {
                const chatRequests = $('#chatRequests');
                chatRequests.empty();
                if (requests && requests.length > 0) {
                    requests.forEach(request => {
                        const hasImage = request.profile && request.profile.trim() !== '';
                        const userName = request.name || 'User';
                        const firstLetter = userName.charAt(0).toUpperCase();
                        const profileImg = hasImage ? `/${request.profile}` : '';
                        const dateStr = new Date(request.chatcreatedat).toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric' });
                        
                        chatRequests.append(`
                            <form id="chatForm">
                                <div class="request-item">
                                    <input type="hidden" name="chatId" id="chatId" value="${request.chatId}">
                                    <input type="hidden" name="partnerId" id="partnerId" value="${request.userId}">
                                    <input type="hidden" name="userId" id="userId" value="${request.astrologerId}">
                                    <div class="request-user-info">
                                        ${hasImage ? 
                                            `<img src="${profileImg}" class="request-avatar" alt="${userName}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                             <div class="image-placeholder image-placeholder-circle image-placeholder-profile" style="display: none;">${firstLetter}</div>` :
                                            `<div class="image-placeholder image-placeholder-circle image-placeholder-profile">${firstLetter}</div>`
                                        }
                                        <div class="request-details">
                                            <div class="request-name">${userName}</div>
                                            <div class="request-meta">
                                                <div>
                                                    <i class="fa fa-calendar"></i>
                                                    <span>${dateStr}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="request-actions">
                                        <a href="#" class="btn-accept acceptchat">Accept</a>
                                        <a href="#" class="btn-reject rejectchat">Reject</a>
                                    </div>
                                </div>
                            </form>
                        `);
                    });
                } else {
                    chatRequests.append('<div class="empty-state"><i class="fas fa-inbox"></i><p>No Chat Requests</p></div>');
                }
            }

            function updateCallRequests(requests) {
                const callRequests = $('#callRequests');
                callRequests.empty();
                if (requests && requests.length > 0) {
                    requests.forEach(request => {
                        const hasImage = request.profile && request.profile.trim() !== '';
                        const userName = request.name || 'User';
                        const firstLetter = userName.charAt(0).toUpperCase();
                        const profileImg = hasImage ? `/${request.profile}` : '';
                        const dateStr = new Date(request.callcreatedat).toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric' });
                        const callTypeIcon = request.call_type == 10 ? 
                            '<i class="fa-solid fa-phone"></i><span>Audio Call</span>' : 
                            '<i class="fas fa-video"></i><span>Video Call</span>';
                        
                        callRequests.append(`
                            <form id="callForm">
                                <div class="request-item">
                                    <input type="hidden" name="callId" id="callId" value="${request.callId}">
                                    <input type="hidden" name="partnerId" id="partnerId" value="${request.userId}">
                                    <input type="hidden" name="userId" id="userId" value="${request.astrologerId}">
                                    <input type="hidden" id="call_type" name="call_type" value="${request.call_type}">
                                    <div class="request-user-info">
                                        ${hasImage ? 
                                            `<img src="${profileImg}" class="request-avatar" alt="${userName}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                             <div class="image-placeholder image-placeholder-circle image-placeholder-profile" style="display: none;">${firstLetter}</div>` :
                                            `<div class="image-placeholder image-placeholder-circle image-placeholder-profile">${firstLetter}</div>`
                                        }
                                        <div class="request-details">
                                            <div class="request-name">${userName}</div>
                                            <div class="request-meta">
                                                <div>
                                                    <i class="fa fa-calendar"></i>
                                                    <span>${dateStr}</span>
                                                </div>
                                                <div>
                                                    ${callTypeIcon}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="request-actions">
                                        <a href="#" class="btn-accept acceptcall">Accept</a>
                                        <a href="#" class="btn-reject rejectcall">Reject</a>
                                    </div>
                                </div>
                            </form>
                        `);
                    });
                } else {
                    callRequests.append('<div class="empty-state"><i class="fas fa-inbox"></i><p>No Call Requests</p></div>');
                }
            }

            function updateReportRequests(requests) {
                const reportRequests = $('#reportRequests');
                reportRequests.empty();
                if (requests && requests.length > 0) {
                    requests.forEach(request => {
                        const hasImage = request.profile && request.profile.trim() !== '';
                        const userName = `${request.firstName || ''} ${request.lastName || ''}`.trim() || 'User';
                        const firstLetter = userName.charAt(0).toUpperCase();
                        const profileImg = hasImage ? `/${request.profile}` : '';
                        const dateStr = new Date(request.birthDate).toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric' });
                        
                        reportRequests.append(`
                            <div class="report-type-badge">${request.reportType}</div>
                            <div class="request-item reportList" data-toggle="modal" data-target="#reportModal" data-id="${request.id}" style="cursor: pointer;">
                                <div class="request-user-info">
                                    ${hasImage ? 
                                        `<img src="${profileImg}" class="request-avatar" alt="${userName}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                         <div class="image-placeholder image-placeholder-circle image-placeholder-profile" style="display: none;">${firstLetter}</div>` :
                                        `<div class="image-placeholder image-placeholder-circle image-placeholder-profile">${firstLetter}</div>`
                                    }
                                    <div class="request-details">
                                        <div class="request-name">${userName}</div>
                                        <div class="request-meta">
                                            <div>
                                                <i class="fa fa-calendar"></i>
                                                <span>${dateStr}</span>
                                            </div>
                                            <div>
                                                <i class="fa fa-clock"></i>
                                                <span>${request.birthTime}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                } else {
                    reportRequests.append('<div class="empty-state"><i class="fas fa-inbox"></i><p>No Report Requests</p></div>');
                }
            }

            // Call the fetch functions to load data initially
            fetchChatRequests();
            fetchCallRequests();
            fetchReportRequests();


            setInterval(fetchChatRequests, 6000);
            setInterval(fetchCallRequests, 6000);
            setInterval(fetchReportRequests, 6000);
        });
    </script>
<script>
    $(document).ready(function() {
        // Click event handler for list items (assuming .list-group-item is the class of your list items)
            $(document).on('click','.reportList',function(e) {
                e.preventDefault();
            var reportId = $(this).data('id');

            $.ajax({
                url: '/api/getUserReportRequestById',
                method: 'POST',
                data: {
                    id: reportId
                },
                success: function(response) {
                    if (response.status === 200 && response.recordList.length > 0) {
                        var record = response.recordList[0];

                        const hasImage = record.profile && record.profile.trim() !== '';
                        const userName = `${record.firstName || ''} ${record.lastName || ''}`.trim() || 'User';
                        const firstLetter = userName.charAt(0).toUpperCase();
                        const profileImage = hasImage ? record.profile : '';
                        var html = `
                            <div>
                                <div class="user-card">
                                    <input type="hidden" id="id" name="id" value="${record.id}">
                                    <div class="user-card-img">
                                        ${hasImage ? 
                                            `<img src="/${profileImage}" alt="${userName}" class="img-fluid rounded-circle" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                             <div class="image-placeholder image-placeholder-circle" style="display: none; width: 80px; height: 80px; font-size: 32px;">${firstLetter}</div>` :
                                            `<div class="image-placeholder image-placeholder-circle" style="width: 80px; height: 80px; font-size: 32px;">${firstLetter}</div>`
                                        }
                                    </div>
                                    <div class="user-card-info">
                                        <h2>${userName}</h2>
                                        <p><span>Contact No:</span> ${record.contactNo || 'N/A'}</p>
                                        <p><span>Gender:</span> ${record.gender || 'N/A'}</p>
                                        <p><span>Birth Date:</span> ${record.birthDate || 'N/A'}</p>
                                        <p><span>Birth Time:</span> ${record.birthTime || 'N/A'}</p>
                                        <p><span>Birth Place:</span> ${record.birthPlace || 'N/A'}</p>
                                        <p><span>Occupation:</span> ${record.occupation || 'N/A'}</p>
                                        <p><span>Marital Status:</span> ${record.maritalStatus || 'N/A'}</p>
                                        <p><span>Report Type:</span> ${record.reportType || 'N/A'}</p>
                                        <p><span>Comments:</span> ${record.comments || 'N/A'}</p>
                                    </div>
                                </div>
                                <div class="mt-3 mb-3">
                                    <label for="reportFile" class="form-label">Upload PDF</label>
                                    <input type="file" accept=".pdf" class="form-control" id="reportFile">
                                    <input type="hidden" class="form-control" id="Base64reportFile" name="reportFile">
                                </div>
                            </div>`;
                        $('.modal-body').html(html);
                        $('#reportModal').modal('show');
                    } else {
                        console.log('Error: No record found or unexpected status ' + response.status);
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
        $(document).on('change','#reportFile', function(event) {
            var file = event.target.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var binaryString = e.target.result;
                    var base64String = btoa(binaryString);
                    $('#Base64reportFile').val(base64String);
                };
                reader.readAsBinaryString(file);
            }
        });
        // Form submission handler
        $('#reportForm').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '{{ route("api.addUserReportFile")}}',
                method: 'POST',
                data: {
                    id:$('#id').val(),
                    reportFile:$('#Base64reportFile').val()
                },
                success: function(response) {
                    console.log(response);
                    if (response.status === 200) {
                        toastr.success('Pdf Uploded Successfully');
                        window.location.href="{{route('front.astrologerindex')}}";
                    } else {
                        console.log('Error: No record found or unexpected status ' + response.status);
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
    </script>

<script>
    $(document).ready(function() {

        @php
            $session = new Session();
            $token = $session->get('astrotoken');
            $astrologerId=astroauthcheck()['astrologerId'];
        @endphp

    $('#chat-status').on('change', function() {
        let chatStatus = $(this).val();
        $.ajax({
            url: "{{ route('api.addChatStatus') }}",
            type: 'POST',
            data: {
                status: chatStatus,
                token:"{{$token}}",
                astrologerId:"{{$astrologerId}}"
            },
            success: function(response) {
                toastr.success('Chat status updated');
            },
            error: function(xhr, status, error) {
                console.error('Error updating chat status:', error);
            }
        });
    });

$('#call-status').on('change', function() {
    let callStatus = $(this).val();
    $.ajax({
        url: "{{ route('api.addCallStatus') }}",
        type: 'POST',
        data: {
            status: callStatus,
            token:"{{$token}}",
            astrologerId:"{{$astrologerId}}"
        },
        success: function(response) {
             toastr.success('Call status updated');
        },
        error: function(xhr, status, error) {
            console.error('Error updating call status:', error);
        }
    });
});

// Test Sound Button
$('#test-sound-btn').on('click', function() {
    const audio = document.getElementById('sound-player');
    if (audio) {
        audio.play().catch(function(error) {
            console.error('Error playing sound:', error);
            toastr.error('Could not play sound');
        });
    }
});

});

</script>

@endsection
