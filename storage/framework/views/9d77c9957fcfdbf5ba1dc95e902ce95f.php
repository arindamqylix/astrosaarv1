<style>
    .error {
        color: #ee4e5e;
        font-size: 12px;
        display: none;
        margin-top: 5px;
    }
    .input-field:invalid {
        border-color: #ee4e5e;
    }

    /* Modern Kundali Matching Page Styles */
    .kundali-matching-page {
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

    .matching-form-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        margin-bottom: 30px;
    }

    .matching-form-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: #fff;
        padding: 20px 30px;
        font-size: 18px;
        font-weight: 600;
        text-align: center;
    }

    .matching-form-body {
        padding: 30px;
    }

    .partner-section {
        padding: 25px;
        border-radius: 8px;
        margin-bottom: 20px;
        background: #f8f9fa;
    }

    .partner-section-title {
        font-size: 20px;
        font-weight: 700;
        color: #6d4ec6;
        margin-bottom: 20px;
        text-align: center;
        padding-bottom: 15px;
        border-bottom: 2px solid #e8e8e8;
    }

    .form-group-modern {
        margin-bottom: 20px;
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

    .checkbox-modern {
        margin-top: 10px;
    }

    .checkbox-modern input[type="checkbox"] {
        width: 18px;
        height: 18px;
        margin-right: 8px;
        cursor: pointer;
    }

    .checkbox-modern label {
        font-weight: 500;
        color: #666;
        cursor: pointer;
        margin: 0;
    }

    .btn-submit-matching {
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

    .btn-submit-matching:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
        color: #fff;
    }

    .btn-submit-matching:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
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

    .banner-section {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        border-radius: 12px;
        padding: 40px;
        margin: 40px 0;
        color: #fff;
    }

    .banner-section h2 {
        color: #fff;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .banner-section p {
        color: rgba(255, 255, 255, 0.95);
        font-size: 16px;
        margin-bottom: 20px;
    }

    .banner-section .btn {
        background: #fff;
        color: #6d4ec6;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .banner-section .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        color: #6d4ec6;
    }

    .submit-button-section {
        position: sticky;
        top: 20px;
    }

    .submit-button-card {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        border-radius: 12px;
        padding: 30px 20px;
        text-align: center;
        color: #fff;
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.2);
    }

    .submit-button-card h3 {
        color: #fff;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .submit-button-card p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
        margin-bottom: 25px;
    }

    .submit-button-card .btn-submit-matching {
        width: 100%;
    }

    @media (max-width: 991px) {
        .submit-button-section {
            position: relative;
            top: 0;
            margin-top: 30px;
        }

        .submit-button-card {
            margin-top: 0;
        }
    }

    @media (max-width: 768px) {
        .page-header-section h1 {
            font-size: 28px;
        }

        .matching-form-body {
            padding: 20px;
        }

        .partner-section {
            padding: 20px;
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="kundali-matching-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb-section">
        <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('front.home')); ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kundali Matching</li>
                    </ol>
                </nav>
        </div>
    </div>

        <!-- Page Header -->
        <div class="page-header-section">
        <div class="container">
                <h1>Kundali Matching</h1>
                <p>Check Marriage Compatibility with Free Online Horoscope Matching</p>
            </div>
        </div>
        <div class="container">
                    <div class="row">
                        <div class="col-12 mb-4">
                    <div class="info-section" style="margin-top: 0;">
                        <h2 style="font-size: 24px; margin-bottom: 15px;">Kundli Matching | Kundali Match for Marriage | Horoscope Matching</h2>
                        <p>Match Making - Kundli Milan & Gun Milan to Check Possibilities of Marriage:</p>
                        <p>Kundli milan or kundali matching is an important consideration to make when you decide to get married. Kundli matching, also called Gun matching or Horoscope matching is the first step towards marriage when the parents decide to match the kundlis of the girl and the boy to ensure the couple is compatible. The gun milan exercise has been a part of India's culture for 1000s of years now and continues to be so.</p>
                        <p>So, if you too are the lucky one who is planning to get married, and hence looking for a horoscope matching with someone you have started liking, then AstroSaar can help you. The Kundali milan online software on AstroSaar has been prepared by the top astrologers. The software caters to the free Kundli milan needs of the individuals and gives you insights; such as the number of guns matching for the girl and the boy, what they are compatible in, what their future would be like if they get married, and so much more.</p>
                            </div>
                        </div>

                        <div class="col-12 mb-4">
                    <div class="info-section">
                        <h2 style="font-size: 22px; margin-bottom: 15px;">Enter Details to Get Free Online Kundali Matching Report For Marriage</h2>
                        <p style="text-align: center;">AstroSaar is a premium online horoscope-matching site that can help you check Kundali Milan by name and date of birth. Here, the team of expert Astrologers analyze the compatibility of both the partners and present accurate results based upon the Ashtakoots or eight categories considered to check the var vadhu gun milan.</p>
                        <p style="text-align: center;">So, what keeps you waiting, check your marriage compatibility by entering below the details of both partners, such as name, birth date, birth time, and birthplace for horoscope matching by date of birth.</p>
                    </div>
                            </div>

                <div class="col-12">
                    <div class="matching-form-card">
                        <div class="matching-form-header">
                            <i class="fas fa-heart mr-2"></i> Enter Partner Details
                        </div>

                        <form id="kundalimatchForm" autocomplete="off" class="matching-form-body">
                                    <div class="row">
                                <!-- Left Column: Boy's and Girl's Details -->
                                <div class="col-12 col-lg-8">
                                    <!-- Boy's Details Section -->
                                    <div class="partner-section" style="margin-bottom: 25px;">
                                        <div class="partner-section-title">
                                            <i class="fas fa-male mr-2"></i> Boy's Details
                                        </div>
                                        <div class="form-group-modern">
                                            <label>Boy Name <span class="required">*</span></label>
                                            <input class="form-control-modern" name="kundali[0][name]" 
                                                placeholder="Enter Boy's Name" type="text" value="" 
                                                pattern="^[a-zA-Z\s]{2,50}$" 
                                                title="Name should contain only letters and be between 2 and 50 characters long." 
                                                required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                                            </div>
                                        <div class="form-group-modern">
                                            <label>Birth Date <span class="required">*</span></label>
                                            <input type="date" name="kundali[0][birthDate]" 
                                                class="form-control-modern ui-autocomplete-input" required>
                                            </div>
                                        <div class="form-group-modern">
                                            <label>Birth Time <span class="required">*</span></label>
                                            <input type="time" id="birthTimeBoy" name="kundali[0][birthTime]" 
                                                class="form-control-modern ui-autocomplete-input">
                                                <div id="birthTimeErrorBoy" class="error">Please provide a birth time or select 'Don't know birth time'.</div>
                                            </div>
                                        <div class="checkbox-modern">
                                            <input type="checkbox" id="dontKnowTimeBoy">
                                            <label for="dontKnowTimeBoy">Don't know birth time</label>
                                            </div>
                                        <div class="form-group-modern">
                                            <label>Place of Birth <span class="required">*</span></label>
                                            <input class="form-control-modern ui-autocomplete-input"
                                                placeholder="Enter City" id="boyaddress" name="kundali[0][birthPlace]" 
                                                type="text" autocomplete="off" required>
                                                </div>
                                        <div class="form-group-modern">
                                            <label>Type <span class="required">*</span></label>
                                            <select name="kundali[0][match_type]" class="form-control-modern" required>
                                                <option value="">Select Type</option>
                                                <option value="North">North</option>
                                                <option value="South">South</option>
                                            </select>
                                            </div>

                                            <input type="hidden" value="Male" name="kundali[0][gender]">
                                            <input type="hidden" id="boylatitude" name="kundali[0][latitude]">
                                             <input type="hidden" id="boypdftype" name="kundali[0][pdf_type]" value="basic">
                                            <input type="hidden" id="boylongitude" name="kundali[0][longitude]">
                                            <input type="hidden" id="boytimezone" name="kundali[0][timezone]" value="5.5">
                                            <input type="hidden" value="en" name="kundali[0][lang]">
                                            <input type="hidden" value="1" name="kundali[0][forMatch]">
                                            <input type="hidden" value="true" name="is_match">
                                            <input type="hidden" value="0" name="amount">
                                        </div>

                                    <!-- Girl's Details Section -->
                                    <div class="partner-section">
                                        <div class="partner-section-title">
                                            <i class="fas fa-female mr-2"></i> Girl's Details
                                        </div>
                                        <div class="form-group-modern">
                                            <label>Girl Name <span class="required">*</span></label>
                                            <input class="form-control-modern" name="kundali[1][name]"
                                                placeholder="Enter Girl's Name" type="text" value="" 
                                                pattern="^[a-zA-Z\s]{2,50}$" 
                                                title="Name should contain only letters and be between 2 and 50 characters long." 
                                                required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                                            </div>
                                        <div class="form-group-modern">
                                            <label>Birth Date <span class="required">*</span></label>
                                            <input type="date" name="kundali[1][birthDate]" 
                                                class="form-control-modern ui-autocomplete-input" required>
                                            </div>
                                        <div class="form-group-modern">
                                            <label>Birth Time <span class="required">*</span></label>
                                            <input type="time" id="birthTimeGirl" name="kundali[1][birthTime]" 
                                                class="form-control-modern ui-autocomplete-input">
                                                <div id="birthTimeErrorGirl" class="error">Please provide a birth time or select 'Don't know birth time'.</div>
                                            </div>
                                        <div class="checkbox-modern">
                                            <input type="checkbox" id="dontKnowTimeGirl">
                                            <label for="dontKnowTimeGirl">Don't know birth time</label>
                                            </div>
                                        <div class="form-group-modern">
                                            <label>Place of Birth <span class="required">*</span></label>
                                            <input class="form-control-modern ui-autocomplete-input" 
                                                id="girladdress" name="kundali[1][birthPlace]" 
                                                placeholder="Enter City" type="text" autocomplete="off" required>
                                            </div>
                                        <div class="form-group-modern">
                                            <label>Type <span class="required">*</span></label>
                                            <select name="kundali[1][match_type]" class="form-control-modern" required>
                                                <option value="">Select Type</option>
                                                <option value="North">North</option>
                                                <option value="South">South</option>
                                            </select>
                                            </div>
                                            <input type="hidden" value="Female" name="kundali[1][gender]">
                                            <input type="hidden" id="girllatitude" name="kundali[1][latitude]">
                                            <input type="hidden" id="girlpdftype" name="kundali[1][pdf_type]" value="basic">
                                            <input type="hidden" id="girllongitude" name="kundali[1][longitude]">
                                            <input type="hidden" id="girltimezone" name="kundali[1][timezone]" value="5.5">
                                            <input type="hidden" value="en" name="kundali[1][lang]">
                                            <input type="hidden" value="1" name="kundali[1][forMatch]">
                                                    </div>
                                                </div>

                                <!-- Right Column: Submit Button -->
                                <div class="col-12 col-lg-4">
                                    <div class="submit-button-section">
                                        <div class="submit-button-card">
                                            <div style="margin-bottom: 25px;">
                                                <i class="fas fa-heart fa-3x mb-3" style="color: #ffd700;"></i>
                                                <h3>Get Matching Report</h3>
                                                <p>Fill in all the details and get your compatibility report instantly</p>
                                            </div>
                                            <?php if(authcheck()): ?>
                                                <button class="btn-submit-matching" id="kundalimatchloaderbtn" 
                                                    type="button" style="display:none; background: #fff; color: #6d4ec6;" disabled>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> 
                                                    Generating...
                                                </button>
                                                <button type="submit" id="showKundalimatchbtn" 
                                                    class="btn-submit-matching" 
                                                    style="background: #fff; color: #6d4ec6;">
                                                    <i class="fas fa-heart mr-2"></i> Get Matching Report
                                                </button>
                                            <?php else: ?>
                                                <button type="submit" disabled 
                                                    class="btn-submit-matching" 
                                                    style="opacity: 0.6; background: rgba(255,255,255,0.3); color: #fff;">
                                                    <i class="fas fa-lock mr-2"></i> Login To View
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="info-section">
                <h2>Kundali Matching Analysis</h2>
                <p style="text-align: center;">Got the Patrika Matching analysis, but not sure about what it means. Rest assured, connect with expert Astrologers instantly over call or chat to ensure minute details about your compatibility and also receive recommendations to fix any issues that might hinder in marital life.</p>
                <p style="text-align: center; font-weight: 600; color: #6d4ec6;">Connect with Astrologers now!</p>
            </div>

            <div class="info-section">
                <h2>Online Kundali Matching Process (How it works?)</h2>
                <p>The process for Kundli Milan for marriage works as follows -</p>
                <p><strong>Step 1:</strong> Enter the details of both partners, such as their name, birthdate, birthplace, and birth time. Make sure you enter the correct details for an accurate Janam Kundli matching.</p>
                <p><strong>Step 2:</strong> The system will generate a horoscope matching for marriage based on the details provided.</p>
                <p><strong>Step 3:</strong> Gun Milan by name and other birth-related details are analyzed for both potential partners by the software. The compatibility score is generated based on eight factors, namely Varna, Vashya, Tara, Yoni, Graha Maitri, Gana, Bhakoot, and Nadi.</p>
                <p><strong>Step 4:</strong> Based on the scores of each guna, the compatibility gets calculated. The higher the score, the higher the compatibility, and vice versa. However, other factors are also considered while analyzing, which can be done by expert Astrologers.</p>
                <p><strong>Step 5:</strong> The system then produces a detailed analysis concerning each factor and offers precautions or recommendations if required.</p>
                <p><strong>Step 6:</strong> It is recommended to consult expert Astrologers for further clarifications and insights.</p>
    </div>

            <div class="info-section">
                <h2>Benefits of Online Kundali Matching or Online Horoscope Matching</h2>
                <p>The online free kundali matching site provides the following benefits -</p>
                <ul>
                    <li>Check your compatibility anytime, anywhere! You no longer need to book an appointment with the Astrologers when you can do online kundali matching for marriage.</li>
                    <li>Online kundli matching for marriage helps you save a lot of time and effort, as you don't need to travel to meet the Astrologers traditionally in person.</li>
                    <li>Various online Kundali matching apps offer personalized consultation services, too, and give clarity on compatibility concerns.</li>
                    <li>The online Janam Patrika milan can deliver results in no time, which can present a great help considering arranged marriages.</li>
                    <li>The free kundali matching presents a detailed analysis of all the compatibility factors, thus helping to make informed decisions.</li>
                    <li>Even the best kundli matching apps seem more affordable than the customary methods, thus making them accessible to a wide range of populations.</li>
                    <li>Lesser chances of errors as online free kundali matching uses algorithms established to eliminate human biases and provide transparency.</li>
                    </ul>
                </div>
            <div class="banner-section">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2>ARE YOU <span style="color: #ffd700;">GETTING MARRIED</span> TO THE RIGHT PERSON?</h2>
                        <p>Get answers to all your questions right here.</p>
                        <a href="<?php echo e(route('front.chatList')); ?>" class="btn">
                            <i class="fas fa-comments mr-2"></i> Ask An Astrologer Now
                        </a>
                                    </div>
                    <div class="col-md-4 text-center d-none d-md-block">
                        <img src="<?php echo e(asset('public/frontend/astrowaycdn/astroway/web/content/images/ads/indian-bride-ads.png')); ?>" 
                             alt="Marriage" style="max-width: 100%; height: auto; border-radius: 8px;">
                    </div>
                </div>
                </div>

            <div class="info-section">
                <h2>Finding the Right Partner Through Kundli Matching</h2>
                <p>The Hindu culture has always favored Kundali matching by date of birth to check the compatibility among the prospective partners. Let us explore the reasons why Kundli matching helps to find an ideal partner for having a successful and lasting marriage -</p>
                <ul>
                    <li>The temperament, health, financials, intellect, and family of partners can be evaluated by horoscope matching by name and other birth details.</li>
                    <li>In the Kundali Milan by date of birth, the eight vital aspects are evaluated by considering behavior, personality, and spirituality.</li>
                    <li>A higher gun milan means stronger compatibility and vice between the partners.</li>
                    <li>The Kundali matching by name and other birth details provides an analysis of more than just the compatibility score, such as the potential strengths and weaknesses.</li>
                    <li>Based on the results, one can consult Astrologers to seek personalized guidance, yet clarifying concerns.</li>
                    </ul>
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

    // var autocomplete;

    function initializeAutocomplete(inputId, latitudeId, longitudeId) {
        var input = document.getElementById(inputId);
        var latitude = document.getElementById(latitudeId);
        var longitude = document.getElementById(longitudeId);

        const autocomplete = new google.maps.places.Autocomplete(input);
        

        autocomplete.addListener('place_changed', function(event) {
            var place = autocomplete.getPlace();
            if (place.hasOwnProperty('place_id')) {
                if (!place.geometry) {
                    return;
                }
                latitude.value = place.geometry.location.lat();
                longitude.value = place.geometry.location.lng();
            } else {
                var service = new google.maps.places.PlacesService(document.createElement('div'));
                service.textSearch({
                    query: place.name
                }, function(results, status) {
                    if (status == google.maps.places.PlacesServiceStatus.OK) {
                        latitude.value = results[0].geometry.location.lat();
                        longitude.value = results[0].geometry.location.lng();
                    }
                });
            }
        });
    }
    initializeAutocomplete('boyaddress', 'boylatitude', 'boylongitude');
    initializeAutocomplete('girladdress', 'girllatitude', 'girllongitude');
</script>


<script>
   $(document).ready(function() {
    $('#showKundalimatchbtn').click(function(e) {

        var birthTimeInputBoy = document.getElementById("birthTimeBoy");
        var dontKnowTimeRadioBoy = document.getElementById("dontKnowTimeBoy");
        const birthTimeErrorBoy = document.getElementById('birthTimeErrorBoy');

        
        var birthTimeInputGirl = document.getElementById("birthTimeGirl");
        var dontKnowTimeRadioGirl = document.getElementById("dontKnowTimeGirl");
        const birthTimeErrorGirl = document.getElementById('birthTimeErrorGirl');

        if (!birthTimeInputBoy.value && !dontKnowTimeRadioBoy.checked) {
            birthTimeErrorBoy.style.display = 'block';
            birthTimeInputBoy.style.borderColor = 'red';
            e.preventDefault(); // Prevent form submission
            return;
        } else {
            birthTimeErrorBoy.style.display = 'none';
            birthTimeInputBoy.style.borderColor = '';
        }

        if (!birthTimeInputGirl.value && !dontKnowTimeRadioGirl.checked) {
            birthTimeErrorGirl.style.display = 'block';
                birthTimeInputGirl.style.borderColor = 'red';
                e.preventDefault(); // Prevent form submission
                return;
            } else {
                birthTimeErrorGirl.style.display = 'none';
                birthTimeInputGirl.style.borderColor = '';
        }

        e.preventDefault();

        // var place = autocomplete.getPlace();
        // if (!place || !place.geometry) {
        //     alert("Please select a birthplace from the dropdown.");
        //     return; // Stop further execution
        // }

         var form = document.getElementById('kundalimatchForm');
         if (form.checkValidity() === false) {
             form.reportValidity();
             return; 
         }

        $('#showKundalimatchbtn').hide();
        $('#kundalimatchloaderbtn').show();

        <?php
            use Symfony\Component\HttpFoundation\Session\Session;
            $session = new Session();
            $token = $session->get('token');
        ?>
        var formData = $('#kundalimatchForm').serialize();
        // console.log(formData);

        $.ajax({
            url: "<?php echo e(route('api.addKundali', ['token' => $token])); ?>",
            type: 'POST',
            data: formData,
            success: function(response) {
                toastr.success('Form Submitted Successfully');
                $('#showKundalimatchbtn').show();
                $('#kundalimatchloaderbtn').hide();

                var maleKundliId = response.recordList[0].id;
                var femaleKundliId = response.recordList[1].id;

                var url = "<?php echo e(route('front.kundaliMatchReport')); ?>?male_kundli_id=" + maleKundliId + "&female_kundli_id=" + femaleKundliId;
                window.location.href = url;
            },

            error: function(xhr, status, error) {
                 try {
                    var response = JSON.parse(xhr.responseText);
                    console.log(response);
                    // Check if the error is related to authorization
                    if (xhr.status === 401) {
                        toastr.error(response.error || "Unauthorized access. Please log in.");
                    } else {
                        toastr.error(response.message || "An unexpected error occurred. Please try again later or select location from dropdown.");
                    }
                } catch (e) {
                    toastr.error("An unexpected error occurred. Please try again later or select location from dropdown.");
                }
                
                
                
                // try {
                //     var response = JSON.parse(xhr.responseText);
                //     toastr.error(response.message);
                // } catch (e) {
                //     toastr.error("An unexpected error occurred. Please try again later.");
                // }
                $('#showKundalimatchbtn').show();
                $('#kundalimatchloaderbtn').hide();
            }
        });
    });
});

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/pages/kundali-matching.blade.php ENDPATH**/ ?>