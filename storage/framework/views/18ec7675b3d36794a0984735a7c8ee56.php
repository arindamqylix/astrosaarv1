<style>
    .pac-container:after {
        content: none !important;
    }

    /* Modern Kundali Page Styles */
    .kundali-page {
        background-color: #f8f9fa;
        min-height: 100vh;
        padding-top: 20px;
        padding-bottom: 50px;
    }

    .breadcrumb-section {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        padding: 12px 0;
        margin-bottom: 0;
    }

    .breadcrumb-section .breadcrumb {
        background: transparent;
        margin: 0;
        padding: 0;
    }

    .breadcrumb-section .breadcrumb a {
        color: #fff;
        text-decoration: none;
        transition: opacity 0.3s;
    }

    .breadcrumb-section .breadcrumb a:hover {
        opacity: 0.8;
    }

    .breadcrumb-section .breadcrumb-item {
        color: #fff;
    }

    .breadcrumb-section .breadcrumb-item.active {
        color: rgba(255, 255, 255, 0.8);
    }

    .page-header-section {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        padding: 40px 0;
        text-align: center;
        color: #fff;
        margin-bottom: 30px;
    }

    .page-header-section h1 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #fff;
    }

    .page-header-section p {
        font-size: 16px;
        opacity: 0.95;
        margin: 0;
    }

    .kundali-form-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        margin-bottom: 30px;
    }

    .kundali-form-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: #fff;
        padding: 20px 30px;
        font-size: 18px;
        font-weight: 600;
        text-align: center;
    }

    .kundali-form-body {
        padding: 30px;
    }

    .form-group-modern {
        margin-bottom: 25px;
    }

    .form-group-modern label {
        font-weight: 600;
        color: #2c1f0f;
        margin-bottom: 8px;
        font-size: 14px;
        display: block;
    }

    .form-group-modern .required {
        color: #ee4e5e;
    }

    .form-control-modern {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e8e8e8;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
        background-color: #fff;
    }

    .form-control-modern:focus {
        outline: none;
        border-color: #6d4ec6;
        box-shadow: 0 0 0 3px rgba(109, 78, 198, 0.1);
    }

    .form-control-modern::placeholder {
        color: #999;
    }

    .btn-submit-kundali {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: #fff;
        border: none;
        padding: 14px 40px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        width: 100%;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-submit-kundali:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
        color: #fff;
    }

    .btn-submit-kundali:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }

    .saved-reports-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .saved-reports-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: #fff;
        padding: 20px 30px;
        font-size: 18px;
        font-weight: 600;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .saved-reports-header a {
        color: #fff;
        font-size: 16px;
        transition: transform 0.3s;
    }

    .saved-reports-header a:hover {
        transform: rotate(180deg);
        color: #fff;
    }

    .saved-reports-body {
        padding: 20px;
        flex: 1;
        overflow-y: auto;
        max-height: 500px;
    }

    .saved-kundali-item {
        padding: 15px;
        border-bottom: 1px solid #e8e8e8;
        transition: background-color 0.3s;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .saved-kundali-item:hover {
        background-color: #f8f9fa;
    }

    .saved-kundali-item:last-child {
        border-bottom: none;
    }

    .kundali-avatar {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 18px;
        margin-right: 12px;
    }

    .kundali-info h6 {
        margin: 0 0 5px 0;
        font-size: 15px;
        font-weight: 600;
        color: #2c1f0f;
    }

    .kundali-info p {
        margin: 0;
        font-size: 12px;
        color: #666;
    }

    .login-prompt-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        padding: 60px 30px;
        text-align: center;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 400px;
    }

    .login-prompt-card p {
        font-size: 18px;
        color: #6d4ec6;
        font-weight: 600;
        margin: 0;
    }

    .info-section {
        background: #fff;
        border-radius: 12px;
        padding: 40px;
        margin: 40px 0;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
    }

    .info-section h2 {
        color: #2c1f0f;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
        text-align: center;
    }

    .info-section p {
        color: #666;
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 15px;
    }

    .info-section ul {
        list-style: none;
        padding: 0;
    }

    .info-section ul li {
        padding: 10px 0;
        padding-left: 25px;
        position: relative;
        color: #666;
        font-size: 15px;
    }

    .info-section ul li:before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #6d4ec6;
        font-weight: bold;
        font-size: 18px;
    }

    .error-message {
        color: #ee4e5e;
        font-size: 12px;
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .page-header-section h1 {
            font-size: 28px;
        }

        .kundali-form-body {
            padding: 20px;
        }

        .saved-reports-body {
            max-height: 400px;
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="kundali-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb-section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('front.home')); ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kundali</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Page Header -->
        <div class="page-header-section">
            <div class="container">
                <h1>Janam Kundali</h1>
                <p>Get Your Free Online Birth Chart & Future Predictions</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="info-section" style="margin-top: 0;">
                        <h2 style="font-size: 24px; margin-bottom: 15px;">Get Future Predictions With Free <span style="color: #6d4ec6;">Online Janam Kundali</span></h2>
                        <p style="text-align: center; margin-bottom: 0;">The online Janam Kundali at AstroSaar is prepared after consulting with experienced Astrologers and is absolutely accurate & authentic. Having doubts in life? Confused about your future? Simply fill in your details and get the online Kundali that will tell you everything about your personality, future & all the other important events in your life.</p>
                    </div>
                </div>

                <div class="col-lg-8 col-12">
                    <div class="kundali-form-card">
                        <div class="kundali-form-header">
                            <i class="fas fa-user-edit mr-2"></i> Enter Your Details
                        </div>

                        <form method="post" id="kundliForm" class="kundali-form-body">

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group-modern">
                                        <label>Name <span class="required">*</span></label>
                                        <input class="form-control-modern" id="Name" name="kundali[0][name]" 
                                            placeholder="Enter Your Name" type="text" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group-modern">
                                        <label>Place of Birth <span class="required">*</span></label>
                                        <input autocomplete="off" class="form-control-modern ui-autocomplete-input"
                                            id="address" name="kundali[0][birthPlace]" placeholder="Enter Place of Birth" 
                                            type="text" required>
                                        <input type="hidden" id="latitude" name="kundali[0][latitude]">
                                        <input type="hidden" id="longitude" name="kundali[0][longitude]">
                                        <input type="hidden" id="timezone" name="kundali[0][timezone]">
                                        <input type="hidden" value="en" name="kundali[0][lang]">
                                        <input type="hidden" value="false" name="is_match">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group-modern">
                                        <label>Birth Date <span class="required">*</span></label>
                                        <label class="error-message float-right" id="dateError"></label>
                                        <input type="date" name="kundali[0][birthDate]" 
                                            class="form-control-modern ui-autocomplete-input" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group-modern">
                                        <label>Birth Time <span class="required">*</span></label>
                                        <label class="error-message float-right mb-0" id="timeError"></label>
                                        <input type="time" name="kundali[0][birthTime]"
                                            class="form-control-modern ui-autocomplete-input" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group-modern">
                                        <label>Gender <span class="required">*</span></label>
                                        <select class="form-control-modern" name="kundali[0][gender]" required>
                                            <option value="">Select Gender</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>
                                </div>
                                <?php if(authcheck()): ?>
                                    <?php if($getkundaliprice['isFreeSession'] == false): ?>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group-modern">
                                                <label>Select Type <span class="required">*</span></label>
                                                <select name="kundali[0][pdf_type]" onchange="updateAmount()"
                                                    class="form-control-modern" id="pdf_type" required>
                                                    <option value="">Select Type</option>
                                                    <option value="small" data-price="<?php echo e($getkundaliprice['recordList']['SMALL']); ?>">
                                                        Small (<?php echo e($currency['value']); ?><?php echo e($getkundaliprice['recordList']['SMALL']); ?>)
                                                    </option>
                                                    <option value="medium" data-price="<?php echo e($getkundaliprice['recordList']['MEDIUM']); ?>">
                                                        Medium (<?php echo e($currency['value']); ?><?php echo e($getkundaliprice['recordList']['MEDIUM']); ?>)
                                                    </option>
                                                    <option value="large" data-price="<?php echo e($getkundaliprice['recordList']['LARGE']); ?>">
                                                        Large (<?php echo e($currency['value']); ?><?php echo e($getkundaliprice['recordList']['LARGE']); ?>)
                                                    </option>
                                                </select>
                                                <input type="hidden" value="" name="amount" id="amount">
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <input type="hidden" value="0" name="amount">
                                        <input type="hidden" value="small" name="kundali[0][pdf_type]">
                                    <?php endif; ?>
                                <?php endif; ?>
                                <div class="col-12">
                                    <div class="form-group-modern" style="margin-top: 10px;">
                                        <?php if(authcheck()): ?>
                                            <button class="btn-submit-kundali" id="kundaliloaderbtn" type="button" 
                                                style="display:none;" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> 
                                                Generating Kundali...
                                            </button>
                                            <button type="submit" id="showKundalibtn" class="btn-submit-kundali">
                                                <i class="fas fa-chart-line mr-2"></i> Generate Kundali
                                            </button>
                                        <?php else: ?>
                                            <button type="submit" disabled class="btn-submit-kundali" style="opacity: 0.6;">
                                                <i class="fas fa-lock mr-2"></i> Login To View
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                
                <?php if(authcheck()): ?>
                <div class="col-lg-4 col-12">
                    <div class="saved-reports-card">
                        <div class="saved-reports-header">
                            <span><i class="fas fa-file-alt mr-2"></i> Saved Reports</span>
                            <a href="javascript:void(0)" id="refreshkundalies" title="Refresh">
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="saved-reports-body" id="savedKundalies">
                            <?php if(count($getkundali['recordList']) > 0): ?>
                                <?php $__currentLoopData = $getkundali['recordList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getkundali): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="saved-kundali-item">
                                        <a href="<?php echo e(url('public/' . $getkundali['pdf_link'])); ?>" 
                                           style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                                            <?php
                                                $first_character = strtoupper(substr($getkundali['name'], 0, 1));
                                            ?>
                                            <div class="kundali-avatar">
                                                <?php echo e($first_character); ?>

                                            </div>
                                            <div class="kundali-info">
                                                <h6><?php echo e($getkundali['name']); ?></h6>
                                                <p><i class="far fa-calendar mr-1"></i> <?php echo e($getkundali['created_at']); ?></p>
                                                <p><i class="fas fa-map-marker-alt mr-1"></i> <?php echo e($getkundali['birthPlace']); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="text-center py-5">
                                    <i class="fas fa-inbox fa-3x mb-3" style="color: #ccc;"></i>
                                    <p style="color: #999;">No saved Kundali reports yet</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="col-lg-4 col-12">
                    <div class="login-prompt-card">
                        <div>
                            <i class="fas fa-lock fa-3x mb-3" style="color: #6d4ec6;"></i>
                            <p>Login to See Your Saved Kundali!</p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>



        <div class="container">
            <div class="info-section">
                <h2>Why Should You Get Your Janam Kundali?</h2>
                <p>A Janam Kundali or Birth Chart is simply a way to get clarity about your future to make better decisions and choices in life. It is a blueprint of the position of the planets and the stars in the Universe at the time of your birth on the basis of which the predictions about your future are made. There are many ways in which your Janam kundali by date of birth and time can help you in your life.</p>
                <ul>
                    <li>Make better professional decisions and career choices.</li>
                    <li>Gain better clarity about your personality, strengths and weaknesses.</li>
                    <li>Know the favorable and unfavorable time periods of your life.</li>
                    <li>Know how to make better financial choices and attract prosperity in life.</li>
                    <li>Choose the right partner for marriage with Kundali Matching.</li>
                </ul>
            </div>

            <div class="info-section">
                <h2>Create Online Janam Kundali</h2>
                <p>An online Janam Kundli is only accurate when you have exact information about your date of birth and time of birth. A lot of people make the mistake of entering the incorrect birth time, which results in an incorrect Kundali and predictions that are totally irrelevant.</p>
                <p>It is easy to get a Janam Kundli online. Just enter the appropriate information and hit the submit button. It dates back to the Vedic era when Kundli was used for prediction. The Kundali chart we have provided you is an authentic representation of the Vedic tradition.</p>
            </div>



            <div class="info-section" style="background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%); color: #fff;">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 style="color: #fff; text-align: left; margin-bottom: 15px;">
                            <span style="color: #ffd700;">DOSHAS</span> IN YOUR KUNDALI AFFECTING YOUR <span style="color: #ffd700;">LIFE</span>?
                        </h2>
                        <p style="color: rgba(255,255,255,0.95); margin-bottom: 20px;">Ask an Astrologer now for solutions.</p>
                        <a href="<?php echo e(route('front.chatList')); ?>" 
                           class="btn-submit-kundali" 
                           style="display: inline-block; width: auto; padding: 12px 30px; background: #fff; color: #6d4ec6;">
                            <i class="fas fa-comments mr-2"></i> Ask An Astrologer Now
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-none d-md-block">
                        <img src="<?php echo e(asset('public/frontend/astrowaycdn/astroway/web/content/images/ads/kundali-dosha-banner.png')); ?>" 
                             alt="Astrologer" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h2>Frequently Asked Questions</h2>
                <div class="panel-group" id="accordion" itemscope="" itemtype="https://schema.org/FAQPage">
                    <div class="panel panel-default mb-3" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question"
                         style="border: 1px solid #e8e8e8; border-radius: 8px; overflow: hidden;">
                        <div class="panel-heading" style="background: #f8f9fa; padding: 0;">
                            <h3 class="panel-title mb-0" itemprop="name">
                                <a class="accordion-toggle font-weight-semi d-block py-3 px-4 colorblack font-18"
                                   data-toggle="collapse" data-parent="#accordion" href="#collapseOne_30"
                                   style="text-decoration: none; color: #2c1f0f; display: flex; justify-content: space-between; align-items: center;">
                                    <span>Is free online Janam Kundali software accurate?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseOne_30" class="panel-collapse collapse show" data-parent="#accordion"
                             itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="panel-body px-4 py-4" itemprop="text" style="background: #fff;">
                                <p style="margin: 0; color: #666; line-height: 1.8;">A Kundali is one of the most crucial elements of Astrology. People have been seeking Astrologers since time immemorial to know what is going to happen in their future. Online Janam Kundali software has made it really convenient for people to get their Kundalis in just a few clicks without compromising on its accuracy and authenticity. An online Janam Kundali software basically prepares a digital version of your Birth Chart with the same ancient practices and Astrological predictions. This is why the accuracy and precision of AstroSaar's free online Janam Kundali is the same as any physical Janam Kundali and is rather more detailed and thorough.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mb-3" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question"
                         style="border: 1px solid #e8e8e8; border-radius: 8px; overflow: hidden;">
                        <div class="panel-heading" style="background: #f8f9fa; padding: 0;">
                            <h3 class="panel-title mb-0" itemprop="name">
                                <a class="accordion-toggle font-weight-semi d-block py-3 px-4 collapsed colorblack font-18"
                                   data-toggle="collapse" data-parent="#accordion" href="#collapseOne_31"
                                   style="text-decoration: none; color: #2c1f0f; display: flex; justify-content: space-between; align-items: center;">
                                    <span>How can I get a free online Janam Kundali?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseOne_31" class="panel-collapse collapse" data-parent="#accordion"
                             itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="panel-body px-4 py-4" itemprop="text" style="background: #fff;">
                                <p style="margin: 0; color: #666; line-height: 1.8;">AstroSaar makes it extremely easy and convenient for you to get your free Janam Kundali right at your fingertips. All you have to do is go to the 'Janam Kundali' section from the main menu, fill in your accurate birth details such as birth date, birth time and birth place and then you will get your detailed free Kundali report within seconds. This personalized Birth Chart report is prepared by expert Vedic Astrologers and gives you a complete analysis of your personality and each and every crucial aspect of your life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mb-3" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question"
                         style="border: 1px solid #e8e8e8; border-radius: 8px; overflow: hidden;">
                        <div class="panel-heading" style="background: #f8f9fa; padding: 0;">
                            <h3 class="panel-title mb-0" itemprop="name">
                                <a class="accordion-toggle font-weight-semi d-block py-3 px-4 collapsed colorblack font-18"
                                   data-toggle="collapse" data-parent="#accordion" href="#collapseOne_34"
                                   style="text-decoration: none; color: #2c1f0f; display: flex; justify-content: space-between; align-items: center;">
                                    <span>Can Kundli be made without birth time?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </h3>
                        </div>
                        <div id="collapseOne_34" class="panel-collapse collapse" data-parent="#accordion"
                             itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="panel-body px-4 py-4" itemprop="text" style="background: #fff;">
                                <p style="margin: 0; color: #666; line-height: 1.8;">Yes, Kundli can be made without birth time. Astrologers have several other ways with which they can prepare an individual's birth chart or Kundli.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php
$getsystemflag = Http::withoutVerifying()->post(url('/') . '/api/getSystemFlag')->json();
$getsystemflag = collect($getsystemflag['recordList']);
$apikey = $getsystemflag->where('name', 'googleMapApiKey')->first();

?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e($apikey['value']); ?>&libraries=places">
</script>
<script>
    var input = document.getElementById('address');
    var originLatitude = document.getElementById('latitude');
    var originLongitude = document.getElementById('longitude');
    var originTimezone = document.getElementById('timezone');

    var originAutocomplete = new google.maps.places.Autocomplete(input);

    originAutocomplete.addListener('place_changed', function(event) {
        var place = originAutocomplete.getPlace();
        if (place.hasOwnProperty('place_id')) {
            if (!place.geometry) {
                return;
            }
            originLatitude.value = place.geometry.location.lat();
            originLongitude.value = place.geometry.location.lng();
            getTimezone(originLatitude.value, originLongitude.value);
        } else {
            service.textSearch({
                query: place.name
            }, function(results, status) {
                if (status == google.maps.places.PlacesServiceStatus.OK) {
                    originLatitude.value = results[0].geometry.location.lat();
                    originLongitude.value = results[0].geometry.location.lng();
                    getTimezone(originLatitude.value, originLongitude.value);
                }
            });
        }
    });

    function getTimezone(lat, lng) {
        var timestamp = Math.floor(Date.now() / 1000);
        var timezoneApiUrl = `https://maps.googleapis.com/maps/api/timezone/json?location=${lat},${lng}&timestamp=${timestamp}&key=<?php echo e($apikey['value']); ?>`;

        fetch(timezoneApiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.status === "OK") {
                    var rawOffsetHours = data.rawOffset / 3600;
                    var dstOffsetHours = data.dstOffset / 3600;
                    var totalOffset = rawOffsetHours + dstOffsetHours;
                    originTimezone.value = totalOffset;
                } else {
                    console.error("Timezone API error:", data.status);
                }
            })
            .catch(error => console.error("Error fetching timezone:", error));
    }
</script>

<script>
    function updateAmount() {
        var selectElement = document.getElementById('pdf_type');
        var selectedOption = selectElement.options[selectElement.selectedIndex];
        var price = selectedOption.getAttribute('data-price');
        document.getElementById('amount').value = price;
    }

    $(document).ready(function() {
        $('#showKundalibtn').click(function(e) {
            e.preventDefault();

            $('#showKundalibtn').hide();
            $('#kundaliloaderbtn').show();
            setTimeout(function() {
                $('#showKundalibtn').show();
                $('#kundaliloaderbtn').hide();
            }, 10000);

            <?php
                use Symfony\Component\HttpFoundation\Session\Session;
                $session = new Session();
                $token = $session->get('token');

            ?>
            var formData = $('#kundliForm').serialize();
            // console.log(formData);

            $.ajax({
                url: "<?php echo e(route('api.addKundali', ['token' => $token])); ?>",
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Form Submitted Successfully');
                    window.location.reload();
                    // window.location.href = response.url;
                    // console.log(response);
                },

                error: function(xhr, status, error) {
                    toastr.error(xhr.responseText);
                }
            });
        });
    });
</script>

    <script>
        $(document).ready(function() {
            $('.deletekundali').click(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Are you sure you want to delete ',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var formData = $(this).closest('.deletekundaliform').serialize();
                        // console.log(formData);
                        // return false;

                        $.ajax({
                            url: '<?php echo e(route("api.deleteKundali",['token' => $token])); ?>',
                            type: 'POST',
                            data: formData,

                            success: function(response) {
                                toastr.success('Kundali Deleted Successfully');
                                window.location.reload();
                            },
                            error: function(xhr, status, error) {
                                var errorMessage = JSON.parse(xhr.responseText).error.paymentMethod[0];
                                toastr.error(errorMessage);
                            }
                        });
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.astrologers.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/astrologers/pages/kundali.blade.php ENDPATH**/ ?>