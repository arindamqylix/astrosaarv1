<?php
    $appName = DB::table('systemflag')->where('name', 'AppName')->select('value')->first();
    $appName = $appName ? $appName->value : 'AstroSaar';
    
    $facebook = DB::table('systemflag')->where('name', 'Facebook')->select('value')->first();
    $apple = DB::table('systemflag')->where('name', 'Apple')->select('value')->first();
    $website = DB::table('systemflag')->where('name', 'Website')->select('value')->first();
    $youtube = DB::table('systemflag')->where('name', 'Youtube')->select('value')->first();
    $linkedIn = DB::table('systemflag')->where('name', 'LinkedIn')->select('value')->first();
    $pintrest = DB::table('systemflag')->where('name', 'Pintrest')->select('value')->first();
    $instagram = DB::table('systemflag')->where('name', 'Instagram')->select('value')->first();
?>

<style>
    .footer-image-placeholder {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 700;
        border-radius: 8px;
    }

    .footer-image-placeholder-app {
        width: 183px;
        height: 54px;
        font-size: 14px;
    }

    .footer-image-placeholder-social {
        width: 31px;
        height: 31px;
        border-radius: 50%;
        font-size: 14px;
    }
</style>

<div class="astroway-footer">
    <div class="bg-brown footer py-5" style="background-color: #6d4ec6 !important;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <h4 class="text-white font-16 font-weight-semi-bold mb-3">Astrology</h4>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo e(route('front.astrologers.getPanchang')); ?>"
                                        class="font-14 color-pink-light">Today's Panchang</a></li>
                                <li><a href="<?php echo e(route('front.astrologers.kundaliMatch')); ?>"
                                        class="font-14 color-pink-light">Kundali Matching</a></li>
                                <li><a href="<?php echo e(route('front.astrologers.getkundali')); ?>"
                                        class="font-14 color-pink-light">Free Janam Kundali</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <h4 class="d-block text-white font-16 font-weight-semi-bold mb-3">Horoscope</h4>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo e(route('front.astrologers.horoScope')); ?>"
                                        class="font-14 color-pink-light">Daily Horoscope</a></li>
                                <li><a href="<?php echo e(route('front.astrologers.horoScope')); ?>"
                                        class="font-14 color-pink-light">Weekly Horoscope</a></li>
                                <li><a href="<?php echo e(route('front.astrologers.horoScope')); ?>"
                                        class="font-14 color-pink-light">Yearly Horoscope</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <h4 class="text-white font-16 font-weight-semi-bold mb-3">Resources</h4>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo e(route('front.astrologers.aboutus')); ?>"
                                        class="font-14 color-pink-light" target="_blank"
                                        rel="nofollow noopener noreferrer">About Us</a></li>
                                <li><a href="<?php echo e(route('front.astrologers.contact')); ?>"
                                        class="font-14 color-pink-light"
                                        rel="nofollow noopener noreferrer">Contact Us</a></li>
                                <li><a href="<?php echo e(route('front.astrologers.getBlog')); ?>" class="font-14 color-pink-light">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <h4 class="text-white font-16 font-weight-semi-bold mb-3">Support</h4>
                            <p class="text-white font-14 mb-2">We are available 24/7 on chat</p>
                            <a href="<?php echo e(route('front.chatList')); ?>" class="font-14 text-white" style="text-decoration: underline;">Click here to start chat</a>
                            <p class="text-white font-14 mt-3 mb-2">
                                Email: <a href="mailto:Contact@astrosaar.com" class="text-white">Contact@astrosaar.com</a>
                            </p>
                            <p class="mb-2">
                                <a href="<?php echo e(route('front.astrologers.privacyPolicy')); ?>" class="font-14 text-white">Privacy policy</a>
                            </p>
                            <p class="mb-2">
                                <a href="<?php echo e(route('front.astrologers.termscondition')); ?>" class="font-14 text-white">Terms Of Use</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 offset-md-1 offset-lg-0 pl-md-4">
                    <h4 class="text-white font-16 font-weight-semi-bold mb-4">Download Our Apps</h4>
                    <div class="d-flex d-md-block">
                        <div class="my-2">
                            <a href="javascript:void(0);" rel="nofollow noopener noreferrer" style="position: relative; display: inline-block;">
                                <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/google-play.png')); ?>"
                                    alt="google-play" class="img-fluid" width="183" height="54" loading="lazy"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="footer-image-placeholder footer-image-placeholder-app" style="display: none;">
                                    <i class="fab fa-google-play"></i>
                                </div>
                            </a>
                        </div>
                        <div class="my-2 ml-2 ml-md-0">
                            <a href="javascript:void(0);" rel="nofollow noopener noreferrer" style="position: relative; display: inline-block;">
                                <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/app-store.png')); ?>"
                                    alt="app-store" class="img-fluid" width="183" height="54" loading="lazy"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="footer-image-placeholder footer-image-placeholder-app" style="display: none;">
                                    <i class="fab fa-apple"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex mt-2 flex-wrap">
                        <a class="mr-2 mt-2" target="_blank" href="<?php echo e($facebook->value ?? '#'); ?>" rel="nofollow" style="position: relative; display: inline-block;">
                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/fb.svg')); ?>"
                                alt="facebook" width="31" height="31" loading="lazy"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="footer-image-placeholder footer-image-placeholder-social" style="display: none;">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </a>
                        <a class="mr-2 mt-2" target="_blank" href="#" rel="nofollow" style="position: relative; display: inline-block;">
                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/twitter.svg')); ?>"
                                alt="twitter" width="31" height="31" loading="lazy"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="footer-image-placeholder footer-image-placeholder-social" style="display: none;">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </a>
                        <a class="mr-2 mt-2" target="_blank" href="<?php echo e($linkedIn->value ?? '#'); ?>" rel="nofollow" style="position: relative; display: inline-block;">
                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/linkedin.svg')); ?>"
                                alt="linkedin" width="31" height="31" loading="lazy"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="footer-image-placeholder footer-image-placeholder-social" style="display: none;">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </a>
                        <a class="mr-2 mt-2" target="_blank" href="<?php echo e($instagram->value ?? '#'); ?>" rel="nofollow" style="position: relative; display: inline-block;">
                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/insta.svg')); ?>"
                                alt="instagram" width="31" height="31" loading="lazy"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="footer-image-placeholder footer-image-placeholder-social" style="display: none;">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </a>
                        <a class="mr-2 mt-2" target="_blank" href="<?php echo e($youtube->value ?? '#'); ?>" rel="nofollow" style="position: relative; display: inline-block;">
                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/youtube.svg')); ?>"
                                alt="youtube" width="31" height="31" loading="lazy"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="footer-image-placeholder footer-image-placeholder-social" style="display: none;">
                                <i class="fab fa-youtube"></i>
                            </div>
                        </a>
                        <a class="mr-2 mt-2" target="_blank" href="<?php echo e($pintrest->value ?? '#'); ?>" rel="nofollow" style="position: relative; display: inline-block;">
                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/pinterest.svg')); ?>"
                                alt="pinterest" width="31" height="31" loading="lazy"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="footer-image-placeholder footer-image-placeholder-social" style="display: none;">
                                <i class="fab fa-pinterest"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-brown-dark copyright" style="background-color: #5a3aa0 !important;">
        <div class="container py-3">
            <p class="text-center text-white mb-1">Copyright &copy; 2020-<?php echo e(date('Y')); ?> <?php echo e($appName); ?>. All Rights Reserved</p>
        </div>
    </div>
</div>
<?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/astrologers/layout/footer.blade.php ENDPATH**/ ?>