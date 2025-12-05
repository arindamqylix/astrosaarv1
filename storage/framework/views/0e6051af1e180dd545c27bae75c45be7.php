
<style>
    /* Modern Horoscope Page Styles */
    .horoscope-page {
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

    .horoscope-intro-section {
        background: #fff;
        border-radius: 12px;
        padding: 40px;
        margin-bottom: 40px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        text-align: center;
    }

    .horoscope-intro-section h2 {
        color: #2c1f0f;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .horoscope-intro-section h2 span {
        color: #6d4ec6;
    }

    .horoscope-intro-section p {
        color: #666;
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 0;
    }

    .zodiac-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 25px;
        margin-top: 30px;
    }

    .zodiac-card {
        background: #fff;
        border-radius: 12px;
        padding: 25px 15px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        border: 2px solid transparent;
        text-decoration: none;
        display: block;
    }

    .zodiac-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(109, 78, 198, 0.15);
        border-color: #6d4ec6;
        text-decoration: none;
    }

    .zodiac-card img {
        width: 110px;
        height: 110px;
        object-fit: contain;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .zodiac-card:hover img {
        transform: scale(1.1);
    }

    .zodiac-placeholder {
        width: 110px;
        height: 110px;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        color: #fff;
        font-size: 48px;
        font-weight: 700;
        transition: transform 0.3s ease;
    }

    .zodiac-card:hover .zodiac-placeholder {
        transform: scale(1.1);
    }

    .zodiac-card h3 {
        color: #6d4ec6;
        font-size: 16px;
        font-weight: 700;
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

    .banner-section h2 span {
        color: #ffd700;
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
        text-decoration: none;
        display: inline-block;
    }

    .banner-section .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        color: #6d4ec6;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .page-header-section h1 {
            font-size: 28px;
        }

        .zodiac-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .zodiac-card {
            padding: 20px 10px;
        }

        .zodiac-card img {
            width: 80px;
            height: 80px;
        }

        .horoscope-intro-section,
        .info-section {
            padding: 25px 20px;
        }
    }

    @media (max-width: 576px) {
        .zodiac-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="horoscope-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb-section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('front.home')); ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Horoscope</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daily Horoscope</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Page Header -->
        <div class="page-header-section">
            <div class="container">
                <h1>Free Horoscope</h1>
                <p>Discover Your Daily Horoscope Predictions</p>
            </div>
        </div>



        <div class="container">
            <div class="horoscope-intro-section">
                <h2>Today's <span>Horoscope</span></h2>
                <p>Confused about how your day would turn out to be? Find out if today is the day to make big decisions. Read your Daily Horoscope forecast and get insights regarding different aspects of your life to plan your day better.</p>
            </div>

            <div class="zodiac-grid">
                <?php $__currentLoopData = $gethoroscopesign['recordList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horoscopesign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('front.dailyHoroscope',['horoscopeSignId' => $horoscopesign['id']])); ?>"
                    title="<?php echo e($horoscopesign['name']); ?>" class="zodiac-card">
                    <?php
                        $firstLetter = strtoupper(substr($horoscopesign['name'], 0, 1));
                        $hasImage = !empty($horoscopesign['image']);
                    ?>
                    <?php if($hasImage): ?>
                        <img src="/<?php echo e($horoscopesign['image']); ?>" alt="<?php echo e($horoscopesign['name']); ?>" 
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="zodiac-placeholder" style="display: none;"><?php echo e($firstLetter); ?></div>
                    <?php else: ?>
                        <div class="zodiac-placeholder"><?php echo e($firstLetter); ?></div>
                    <?php endif; ?>
                    <h3><?php echo e($horoscopesign['name']); ?></h3>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>


        <div class="container">
            <div class="info-section">
                <h2>Why Should You Check Your Horoscope Daily?</h2>
                <p>If today is the right day for new beginnings? Or if this day will have opportunities or challenges in store?</p>
                <p>Every day is like a new page in the book of our life. While some days are for hustle, on some days all you need to do is take a back seat and let situations reveal their outcome. What if there is a way from which you can get clarity about your day ahead and know what needs to be done. The daily Horoscope of an individual is a prediction about what different situations in your life such as regarding career, health, relationship, etc. are going to be like.</p>
                <p>The position of celestial bodies like the Sun, the Moon, and planets change frequently and they often enter into new Houses and Zodiac signs leaving the former ones. With this movement, the life situations of an individual also get affected.</p>
                <p>Daily Horoscope is created by deeply analyzing the position and effect of the celestial bodies on a particular day and how it affects different aspects of the life of an individual.</p>
                <p>Your Daily Horoscope can help you decipher upcoming challenges and reveal opportunities coming towards you. You get better clarity about the roadblocks that are restricting you to get peace of mind and success. These predictions give you greater confidence about your day ahead and help you steer your life in the right direction by making the right decisions.</p>
            </div>

            <div class="banner-section">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2>WILL YOU BE <span>RICH</span> AND <span>SUCCESSFUL</span> IN FUTURE?</h2>
                        <p>Know what's written in your stars!</p>
                        <a href="<?php echo e(route('front.chatList')); ?>" class="btn">
                            <i class="fas fa-comments mr-2"></i> Ask An Astrologer Now
                        </a>
                    </div>
                    <div class="col-md-4 text-center d-none d-md-block">
                        <img src="<?php echo e(asset('public/frontend/astrowaycdn/astroway/web/content/images/ads/success-future.png')); ?>" 
                             alt="Success" style="max-width: 100%; height: auto; border-radius: 8px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.astrologers.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/astrologers/pages/horoscopesign.blade.php ENDPATH**/ ?>