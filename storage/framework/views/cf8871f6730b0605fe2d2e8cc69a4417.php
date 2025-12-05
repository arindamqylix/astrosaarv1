<link rel="stylesheet" href="<?php echo e(asset('public/frontend/agora/index.css')); ?>">
<style>
    /* Call Page Styles */
    .call-page {
        background: #000;
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

    /* Video Call Container */
    .video-call-container {
        background: #000;
        border-radius: 16px;
        overflow: hidden;
        min-height: 70vh;
        position: relative;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .video-participant {
        position: relative;
        width: 100%;
        height: 50%;
        background: #1a1a1a;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .video-participant:first-child {
        border-bottom: 2px solid #333;
    }

    .video-participant .player {
        width: 100%;
        height: 100%;
        position: relative;
        z-index: 2;
    }

    .video-participant img {
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #6d4ec6;
        z-index: 1;
        opacity: 0.3;
    }

    .name-tag {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 14px;
        z-index: 10;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .name-tag:hover {
        color: white;
        text-decoration: none;
    }

    .image-placeholder {
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(45deg, #6d4ec6, #8b6fd8);
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 48px;
        border: 4px solid #6d4ec6;
        z-index: 1;
        opacity: 0.3;
    }

    /* Control Panel */
    .control-panel {
        background: rgba(26, 26, 26, 0.95);
        border-radius: 16px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .timer-display {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        padding: 12px 20px;
        border-radius: 25px;
        font-size: 18px;
        font-weight: 700;
        font-family: 'Courier New', monospace;
        min-width: 120px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: all 0.3s ease;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(220, 53, 69, 0.5);
        }
    }

    .control-buttons {
        display: flex;
        flex-direction: column;
        gap: 12px;
        width: 100%;
    }

    .control-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .control-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
    }

    .control-btn.active {
        box-shadow: 0 0 0 4px rgba(109, 78, 198, 0.3);
    }

    .control-btn.mic {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
    }

    .control-btn.mic.muted {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
    }

    .control-btn.camera {
        background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        color: white;
    }

    .control-btn.camera.off {
        background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%);
    }

    .control-btn.maximize {
        background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
        color: white;
    }

    .control-btn.endcall {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
        width: 100%;
        border-radius: 12px;
        height: 50px;
        font-weight: 600;
        font-size: 16px;
    }

    .control-btn.endcall:hover {
        background: linear-gradient(135deg, #c82333 0%, #bd2130 100%);
    }

    /* Responsive */
    @media (max-width: 767px) {
        .video-call-container {
            min-height: 50vh;
        }

        .video-participant {
            height: 50%;
        }

        .control-panel {
            flex-direction: row;
            justify-content: space-around;
            padding: 15px;
        }

        .control-buttons {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }

        .control-btn {
            width: 50px;
            height: 50px;
            font-size: 18px;
        }

        .timer-display {
            font-size: 16px;
            padding: 10px 15px;
        }

        #local-player div:first-child,
        #remote-playerlist div:first-child {
            min-height: 0px !important;
            position: unset !important;
        }
    }

    @media (min-width: 768px) {
        .control-panel {
            position: sticky;
            top: 20px;
        }
    }
</style>

<?php $__env->startSection('content'); ?>
    <?php if(astroauthcheck()): ?>
        <?php
            $userId = $callrequest->userId;
            $astrologerId = astroauthcheck()['astrologerId'];
            $callId = request()->query('callId');
            $call_type = request()->query('call_type');
            $astroName = astroauthcheck()['name'] ?? 'Astrologer';
            $astroInitial = strtoupper(substr($astroName, 0, 1));
            $hasAstroProfile = !empty(astroauthcheck()['profile']);
            $userName = $getUser['recordList'][0]['name'] ?? 'User';
            $userInitial = strtoupper(substr($userName, 0, 1));
            $hasUserProfile = !empty($getUser['recordList'][0]['profile']);
        ?>
    <?php endif; ?>

    <div class="call-page">
        <div class="breadcrumb-section d-none d-md-block">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo e(route('front.astrologerindex')); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                    <i class="fa fa-chevron-right"></i>
                    <span>Call</span>
                </div>
            </div>
        </div>

        <input id="appid" type="hidden" value="<?php echo e($agoraAppIdValue->value); ?>">
        <input id="token" type="hidden" value="<?php echo e($callrequest->token); ?>">
        <input id="channel" type="hidden" value="<?php echo e($callrequest->channelName); ?>">

        <div class="container py-4">
            <div class="row">
                <div class="col-lg-9 col-12 mb-4 mb-lg-0">
                    <div class="video-call-container">
                        <!-- Local Participant (Astrologer) -->
                        <div class="video-participant">
                            <a href="javascript:void(0);" class="name-tag" id="local-player-name">
                                <i class="fas fa-user-circle"></i>
                                <span><?php echo e($astroName); ?></span>
                            </a>
                            <div id="local-player" class="player"></div>
                            <?php if($hasAstroProfile): ?>
                                <img src="/<?php echo e(astroauthcheck()['profile']); ?>" alt="<?php echo e($astroName); ?>"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="image-placeholder" style="display: none;">
                                    <?php echo e($astroInitial); ?>

                                </div>
                            <?php else: ?>
                                <div class="image-placeholder">
                                    <?php echo e($astroInitial); ?>

                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Remote Participant (User) -->
                        <div class="video-participant">
                            <a href="javascript:void(0);" class="name-tag" id="remote-player-name">
                                <i class="fas fa-user-circle"></i>
                                <span><?php echo e($userName); ?></span>
                            </a>
                            <div id="remote-playerlist"></div>
                            <?php if($hasUserProfile): ?>
                                <img src="/<?php echo e($getUser['recordList'][0]['profile']); ?>" alt="<?php echo e($userName); ?>"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="image-placeholder" style="display: none;">
                                    <?php echo e($userInitial); ?>

                                </div>
                            <?php else: ?>
                                <div class="image-placeholder">
                                    <?php echo e($userInitial); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12">
                    <div class="control-panel">
                        <div class="timer-display" id="remainingTime">
                            <?php echo e($callrequest->call_duration); ?>

                        </div>
                        <div class="control-buttons">
                            <button class="control-btn mic active" onclick="toggleMic()" id="mic-icon" title="Toggle Microphone">
                                <i class="fas fa-microphone"></i>
                            </button>
                            <?php if($call_type == 11): ?>
                                <button class="control-btn camera active" onclick="toggleVideo()" id="video-icon" title="Toggle Camera">
                                    <i class="fas fa-video"></i>
                                </button>
                            <?php endif; ?>
                            <button class="control-btn maximize" onclick="toggleFullscreen()" title="Fullscreen">
                                <i class="fas fa-expand"></i>
                            </button>
                            <button class="control-btn endcall" id="leave">
                                <i class="fas fa-phone-slash mr-2"></i> End Call
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('button.mode-switch').click(function() {
                $('body').toggleClass('dark');
            });

            $(".btn-close-right").click(function() {
                $(".right-side").removeClass("show");
                $(".expand-btn").addClass("show");
            });

            $(".expand-btn").click(function() {
                $(".right-side").addClass("show");
                $(this).removeClass("show");
            });

            // Update control button states
            function updateMicState(isMuted) {
                var micBtn = $('#mic-icon');
                if (isMuted) {
                    micBtn.removeClass('active').addClass('muted');
                    micBtn.find('i').removeClass('fa-microphone').addClass('fa-microphone-slash');
                } else {
                    micBtn.removeClass('muted').addClass('active');
                    micBtn.find('i').removeClass('fa-microphone-slash').addClass('fa-microphone');
                }
            }

            function updateVideoState(isOff) {
                var videoBtn = $('#video-icon');
                if (isOff) {
                    videoBtn.removeClass('active').addClass('off');
                    videoBtn.find('i').removeClass('fa-video').addClass('fa-video-slash');
                } else {
                    videoBtn.removeClass('off').addClass('active');
                    videoBtn.find('i').removeClass('fa-video-slash').addClass('fa-video');
                }
            }

            // Fullscreen toggle
            function toggleFullscreen() {
                var videoContainer = document.querySelector('.video-call-container');
                if (!document.fullscreenElement) {
                    videoContainer.requestFullscreen().catch(err => {
                        console.log('Error attempting to enable fullscreen:', err);
                    });
                } else {
                    document.exitFullscreen();
                }
            }

            // Make toggleFullscreen available globally
            window.toggleFullscreen = toggleFullscreen;

            // Override toggleMic and toggleVideo to update UI
            var originalToggleMic = window.toggleMic;
            if (typeof originalToggleMic === 'function') {
                window.toggleMic = function() {
                    originalToggleMic();
                    // Update state after a short delay to allow the original function to complete
                    setTimeout(function() {
                        // Check if mic is muted by checking the button state or track state
                        // This will be handled by the Agora SDK's track state
                    }, 100);
                };
            }

            var originalToggleVideo = window.toggleVideo;
            if (typeof originalToggleVideo === 'function') {
                window.toggleVideo = function() {
                    originalToggleVideo();
                    // Update state after a short delay
                    setTimeout(function() {
                        // Check if video is off by checking the button state or track state
                    }, 100);
                };
            }
        });

        function endCall() {
            Swal.fire({
                title: 'End Call?',
                text: 'Are you sure you want to end this call?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, End Call',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Call Agora leave function if it exists
                    if (typeof leave === 'function') {
                        leave();
                    }
                    toastr.success('Call Ended Successfully');
                    setTimeout(function() {
                        window.location.href = "<?php echo e(route('front.astrologerindex')); ?>";
                    }, 1000);
                }
            });
        }

        // Make endCall available globally
        window.endCall = endCall;

        // Handle leave button click
        $(document).ready(function() {
            $('#leave').on('click', function(e) {
                e.preventDefault();
                endCall();
            });
        });
    </script>
    <script src="<?php echo e(asset('public/frontend/agora/AgoraRTC_N-4.20.2.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/agora/index.js')); ?>"></script>


    <script>
        $(document).ready(function() {
            var callDuration = <?php echo e($callrequest->call_duration); ?>;
            var timerInterval;
            var statusCheckInterval;

            $("#local-player-name").text("<?php echo e(astroauthcheck()['name']); ?>");
            $("#remote-player-name").text("<?php echo e($getUser['recordList'][0]['name']); ?>");

            function fetchCallStatus() {
                $.ajax({
                    url: '<?php echo e(route('front.callStatus', ['callId' => $callrequest->id])); ?>',
                    type: 'GET',
                    success: function(response) {
                        if (response.call.callStatus === 'Confirmed') {
                            var updateTime = new Date(response.call.updated_at)
                        .getTime(); // Use updated_at from the response
                            startTimer(updateTime);
                            clearInterval(statusCheckInterval);
                        }
                    }
                });
            }

            function startTimer(updateTime) {
                // var currentTime = new Date().getTime();
                // var elapsedTime = Math.floor((currentTime - updateTime) / 1000);
                // var remainingTime = callDuration - elapsedTime;
                let currentTime = remainingTime = elapsedTime='';
                $.get("<?php echo e(route('front.getDateTime')); ?>", function(response) {
                        // Assuming the response contains the server time in 'Y-m-d H:i:s' format
                        currentTime = new Date(response).getTime();

                        // Calculate elapsed time and remaining time
                        let elapsedTime = Math.floor((currentTime - updateTime) / 1000);
                        remainingTime = callDuration - elapsedTime;
                        // Ensure remainingTime is not negative
                        if (remainingTime < 0) {
                            remainingTime = 0;
                        }
                    // startTimer();

                    }).fail(function() {
                        console.error("Error fetching server time");
                    });

                function updateTimer() {
                    var minutes = Math.floor(remainingTime / 60);
                    var seconds = remainingTime % 60;

                    var formattedTime = (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') +
                        seconds;
                    var timerElement = document.getElementById('remainingTime');
                    if (timerElement) {
                        timerElement.innerHTML = '<i class="fas fa-clock mr-2"></i>' + formattedTime;
                        
                        // Add warning class when time is low
                        if (remainingTime <= 60) {
                            timerElement.style.background = 'linear-gradient(135deg, #dc3545 0%, #c82333 100%)';
                            timerElement.style.animation = 'pulse 1s infinite';
                        } else {
                            timerElement.style.background = 'linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%)';
                            timerElement.style.animation = 'none';
                        }
                    }
                }

                // Initial display
                updateTimer();

                timerInterval = setInterval(function() {
                    remainingTime--;
                    if (remainingTime < 0) {
                        remainingTime = 0;
                    }
                    updateTimer();

                    if (remainingTime <= 0) {
                        endCall();
                        clearInterval(timerInterval);
                    }
                }, 1000);
            }


            // Initial status check
            fetchCallStatus();
            // Check the status every second
            statusCheckInterval = setInterval(fetchCallStatus, 2000);

            // Initial display of remaining time
            var initialTime = formatTime(callDuration);
            document.getElementById('remainingTime').innerHTML = '<i class="fas fa-clock mr-2"></i>' + initialTime;

            function formatTime(seconds) {
                var minutes = Math.floor(seconds / 60);
                seconds = seconds % 60;
                return (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.astrologers.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/astrologers/pages/astrologer-callpage.blade.php ENDPATH**/ ?>