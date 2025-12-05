<?php $__env->startSection('content'); ?>
    <style>
        .modal-content {
            background-clip: border-box !important;
            border: none !important;
            border-radius: 12px !important;
        }

        @media (max-width: 400px) {
            .astroway-customer-stories .item {
                max-height: 360px;
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

        .image-placeholder-small {
            font-size: 20px;
        }

        .image-placeholder-medium {
            font-size: 32px;
        }

        .image-placeholder-large {
            font-size: 48px;
        }

        /* Homepage Styles */
        .homepage {
            background-color: #fff9f0;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #fdf5e6 0%, #fff9f0 100%);
            padding: 80px 20px;
            min-height: 550px;
            display: flex;
            align-items: center;
        }

        .hero-content h1 {
            font-weight: 700;
            font-size: 50px;
            font-family: 'Playfair Display', serif;
            color: #6d4ec6;
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .hero-btn {
            padding: 14px 35px;
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(109, 78, 198, 0.3);
            cursor: pointer;
        }

        .hero-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(109, 78, 198, 0.4);
        }

        .hero-img {
            width: 100%;
            max-width: 460px;
            height: auto;
            border-radius: 12px;
        }

        /* Services Section */
        .services-section {
            max-width: 1200px;
            margin: 60px auto;
            padding: 50px 20px;
            text-align: center;
            background-color: #fff9f0;
            border-radius: 16px;
        }

        .services-section h2 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #2c1f0f;
            font-size: 32px;
            margin-bottom: 50px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 30px;
        }

        .service-box {
            background-color: #fff;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .service-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(109, 78, 198, 0.15);
        }

        .service-icon {
            background-color: #fef0c7;
            width: 70px;
            height: 70px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }

        .service-box:hover .service-icon {
            background-color: #6d4ec6;
            transform: scale(1.1);
        }

        .service-box:hover .service-icon i {
            color: #fff;
        }

        .service-icon i {
            font-size: 36px;
            color: #e5b86a;
            transition: color 0.3s ease;
        }

        .service-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        /* Why Choose Us Section */
        .why-section {
            padding: 80px 20px;
            text-align: center;
            background-color: #fff9f0;
        }

        .why-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 50px;
            color: #2c1f0f;
            font-family: 'Playfair Display', serif;
        }

        .why-cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .why-card {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 12px;
            padding: 25px;
            width: 280px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .why-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(109, 78, 198, 0.15);
        }

        .icon-container {
            background-color: #fef0c7;
            padding: 12px;
            border-radius: 50%;
            margin-right: 15px;
            flex-shrink: 0;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .why-card:hover .icon-container {
            background-color: #6d4ec6;
        }

        .why-card:hover .icon-container svg {
            stroke: #fff;
        }

        /* Quick Menu Section */
        .quick-menu-section {
            background-color: #fdf5e6;
            padding: 50px 0;
            margin-top: 60px;
        }

        .quick-menu-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .quick-menu-item {
            margin: 15px;
            text-align: center;
        }

        .quick-menu-item a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }

        .quick-menu-item:hover {
            transform: translateY(-5px);
        }

        .quick-menu-icon {
            transition: transform 0.3s ease;
            position: relative;
            margin: 0 auto;
        }

        .quick-menu-item:hover .quick-menu-icon {
            transform: scale(1.1);
        }

        .quick-menu-icon img {
            transition: transform 0.3s ease;
        }

        .quick-menu-desc {
            color: #2c1f0f;
            font-weight: 600;
            margin-top: 10px;
            font-size: 14px;
        }

        /* Stories Section */
        .stories-section {
            padding: 60px 0;
            background-color: #fff9f0;
        }

        .stories-section .heading {
            font-size: 32px;
            font-weight: 700;
            color: #2c1f0f;
            font-family: 'Playfair Display', serif;
            margin-bottom: 15px;
        }

        .stories-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .story {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 3px solid transparent;
        }

        .story:hover {
            transform: scale(1.1);
            border-color: #6d4ec6;
        }

        .story img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .story p {
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            color: #666;
            font-weight: 600;
        }

        /* Live Sessions Section */
        .live-sessions-section {
            padding: 60px 0;
            background-color: #fff9f0;
        }

        .live-sessions-section .heading {
            font-size: 32px;
            font-weight: 700;
            color: #2c1f0f;
            font-family: 'Playfair Display', serif;
            margin-bottom: 15px;
        }

        /* Astrologer Section */
        .astrologer-section {
            background-color: #fffaf0;
            padding: 80px 20px;
            text-align: center;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #2c1f0f;
            font-size: 32px;
            margin-bottom: 50px;
        }

        .astrologer-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .astrologer-card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 25px;
            width: 280px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .astrologer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(109, 78, 198, 0.15);
        }

        .talk-button {
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            color: white;
            border: none;
            padding: 12px 0;
            width: 100%;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            margin-top: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(109, 78, 198, 0.3);
        }

        .talk-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(109, 78, 198, 0.4);
        }

        /* Testimonial Section */
        .testimonial-section {
            text-align: center;
            padding: 80px 20px;
            background-color: #fff9f0;
        }

        .testimonial-card {
            position: relative;
            max-width: 700px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 16px;
            padding: 40px 50px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            text-align: left;
        }

        .quote-icon {
            font-size: 60px;
            color: #e5b86a;
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .testimonial-text p {
            color: #333;
            font-size: 18px;
            margin: -30px 0 20px 50px;
            line-height: 1.8;
            font-style: italic;
        }

        .testimonial-text h4 {
            font-size: 18px;
            font-weight: 600;
            color: #000;
            margin: 15px 0 5px 50px;
        }

        /* Blogs Section */
        .blogs-section {
            background-color: #f8f0dc;
            padding: 80px 20px;
            text-align: center;
        }

        .blog-cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .blog-card {
            width: 320px;
            height: 220px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(109, 78, 198, 0.15);
        }

        .blog-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .blog-card:hover img {
            transform: scale(1.05);
        }

        /* YouTube Section */
        .youtube-section {
            background-color: #fef9ed;
            padding: 80px 20px;
            text-align: center;
        }

        .youtube-videos {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .video-card {
            position: relative;
            width: 280px;
            height: 170px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #000;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .video-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 60px;
            color: red;
            opacity: 0.9;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .video-card:hover .play-button {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);
        }

        /* Products Section */
        .product-section {
            background-color: #f8f0dc;
            padding: 80px 20px;
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            font-family: 'Poppins', sans-serif;
        }

        .product-section h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 40px;
            font-family: 'Playfair Display', serif;
            color: #2c1f0f;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 40px;
        }

        .product-grid a {
            display: block;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .product-grid a:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(109, 78, 198, 0.15);
        }

        .product-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .product-grid a:hover img {
            transform: scale(1.05);
        }

        .see-more {
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            color: #fff;
            border: none;
            padding: 14px 40px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(109, 78, 198, 0.3);
        }

        .see-more:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(109, 78, 198, 0.4);
        }

        /* Publishers Section */
        .publishers-section {
            background-color: #2c1f0f;
            padding: 60px 0;
        }

        .publishers-section .heading {
            font-size: 32px;
            font-weight: 700;
            color: #fff;
            font-family: 'Playfair Display', serif;
        }

        .publishers-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }

        .publisher {
            transition: all 0.3s ease;
        }

        .publisher:hover {
            transform: translateY(-3px);
        }

        /* About Section */
        .about-section {
            max-width: 1400px;
            margin: 80px auto;
            padding: 50px 80px;
            background-color: #fff9f0;
            border-radius: 16px;
        }

        .about-section h2 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #2c1f0f;
            font-size: 32px;
            margin-bottom: 30px;
        }

        .about-section p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
        }

        /* FAQ Section */
        .faq-section {
            max-width: 900px;
            margin: 0 auto;
            padding: 80px 20px;
            background-color: #fff9f0;
        }

        .faq-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 32px;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #2c1f0f;
        }

        .faq-details {
            background-color: #fff;
            padding: 20px 25px;
            margin: 15px auto;
            max-width: 800px;
            border-radius: 12px;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .faq-details:hover {
            box-shadow: 0 4px 12px rgba(109, 78, 198, 0.12);
        }

        .faq-details summary {
            display: flex;
            justify-content: space-between;
            list-style: none;
            font-size: 16px;
            font-weight: 600;
            color: #2c1f0f;
            cursor: pointer;
        }

        .faq-details summary::-webkit-details-marker {
            display: none;
        }

        .faq-details summary .icon {
            font-size: 14px;
            transition: transform 0.3s ease;
            color: #6d4ec6;
        }

        .faq-details[open] summary .icon {
            transform: rotate(180deg);
        }

        .faq-details p {
            margin-top: 15px;
            font-size: 14px;
            color: #666;
            line-height: 1.8;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .hero-content h1 {
                font-size: 36px;
            }

            .services-grid {
                grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
                gap: 20px;
            }

            .why-cards {
                flex-direction: column;
                align-items: center;
            }

            .why-card {
                width: 100%;
                max-width: 400px;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .about-section {
                padding: 40px 30px;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 50px 20px;
                min-height: 450px;
            }

            .hero-content h1 {
                font-size: 28px;
            }

            .services-section h2,
            .section-title,
            .why-title {
                font-size: 26px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .astrologer-cards {
                flex-direction: column;
                align-items: center;
            }

            .astrologer-card {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>

    <div class="ds-head-body">
        <!-- Hero Section -->
        <section class="hero" style="background-color: #fdf5e6; display: flex; justify-content: space-between; align-items: center; padding: 60px 20px; min-height: 500px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" style="text-align: left;">
                            <h1 style="font-weight: 700; font-size: 50px; font-family: 'Playfair Display', serif; color: #6d4ec6; margin-bottom: 30px; line-height: 1.2;">
                                Unlock the power<br />
                                of the stars with<br />
                                AstroSaar
                            </h1>
                            <a href="<?php echo e(route('front.chatList')); ?>">
                                <button class="hero-btn" style="padding: 12px 30px; background-color: #6d4ec6; color: #fff; border: none; border-radius: 10px; cursor: pointer; font-size: 18px; font-weight: 600; margin-top: 20px; transition: background-color 0.3s ease;">
                                    Get Your First Chat Free
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="<?php echo e(asset('public/assets-front/image/baba-image.png')); ?>" alt="Astrology" class="hero-img" style="width: 100%; max-width: 460px; height: auto;" 
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                        <div class="image-placeholder image-placeholder-large" style="display: none; width: 100%; max-width: 460px; height: 300px; margin: 0 auto;">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Offer Section -->
        <section class="services-section" style="max-width: 1200px; margin: 60px auto; padding: 20px; text-align: center; background-color: #fff9f0;">
            <h2 style="font-family: 'Playfair Display', serif; font-weight: 700; color: #2c1f0f; font-size: 28px; margin-bottom: 40px;">What We Offer</h2>
            <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 30px;">
                <div class="service-box" style="background-color: #fff; padding: 25px 10px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08); transition: transform 0.2s ease;">
                    <div style="background-color: #fef0c7; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                        <i class="fas fa-scroll" style="font-size: 32px; color: #e5b86a;"></i>
                    </div>
                    <div class="service-title" style="font-size: 16px; font-weight: 600; color: #333;">Kundli Analysis</div>
                </div>

                <div class="service-box" style="background-color: #fff; padding: 25px 10px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08); transition: transform 0.2s ease;">
                    <div style="background-color: #fef0c7; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                        <i class="fas fa-comments" style="font-size: 32px; color: #e5b86a;"></i>
                    </div>
                    <div class="service-title" style="font-size: 16px; font-weight: 600; color: #333;">Live Chat</div>
                </div>

                <div class="service-box" style="background-color: #fff; padding: 25px 10px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08); transition: transform 0.2s ease;">
                    <div style="background-color: #fef0c7; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                        <i class="fas fa-heart" style="font-size: 32px; color: #e5b86a;"></i>
                    </div>
                    <div class="service-title" style="font-size: 16px; font-weight: 600; color: #333;">Love & Career</div>
                </div>

                <div class="service-box" style="background-color: #fff; padding: 25px 10px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08); transition: transform 0.2s ease;">
                    <div style="background-color: #fef0c7; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                        <i class="fas fa-calendar-alt" style="font-size: 32px; color: #e5b86a;"></i>
                    </div>
                    <div class="service-title" style="font-size: 16px; font-weight: 600; color: #333;">Panchang & Muhurat</div>
                </div>

                <div class="service-box" style="background-color: #fff; padding: 25px 10px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08); transition: transform 0.2s ease;">
                    <div style="background-color: #fef0c7; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                        <i class="fas fa-chart-bar" style="font-size: 32px; color: #e5b86a;"></i>
                    </div>
                    <div class="service-title" style="font-size: 16px; font-weight: 600; color: #333;">Numerology & Vastu</div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-section" style="padding: 60px 20px; text-align: center; background-color: #fff9f0;">
            <h2 class="why-title" style="font-size: 28px; font-weight: 700; margin-bottom: 40px; color: #2c1f0f; font-family: 'Playfair Display', serif;">Why Choose Us</h2>
            <div class="why-cards" style="display: flex; justify-content: center; gap: 30px; max-width: 1000px; margin: 0 auto; flex-wrap: wrap;">
                <div class="why-card" style="display: flex; align-items: center; background-color: #fff; border-radius: 12px; padding: 20px; width: 280px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
                    <div class="icon-container" style="background-color: #fef0c7; padding: 12px; border-radius: 50%; margin-right: 15px; flex-shrink: 0; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="9 12 11 14 15 10"></polyline>
                        </svg>
                    </div>
                    <div class="card-content">
                        <h3 style="margin: 0; font-size: 16px; font-weight: 600; color: #2c1f0f;">Verified Astrologers</h3>
                        <p style="margin: 4px 0 0; font-size: 14px; color: #555;">Experience and Expertise</p>
                    </div>
                </div>

                <div class="why-card" style="display: flex; align-items: center; background-color: #fff; border-radius: 12px; padding: 20px; width: 280px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
                    <div class="icon-container" style="background-color: #fef0c7; padding: 12px; border-radius: 50%; margin-right: 15px; flex-shrink: 0; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <rect x="8" y="11" width="8" height="6" rx="1"></rect>
                            <path d="M10 11V8a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v3"></path>
                        </svg>
                    </div>
                    <div class="card-content">
                        <h3 style="margin: 0; font-size: 16px; font-weight: 600; color: #2c1f0f;">Privacy First</h3>
                        <p style="margin: 4px 0 0; font-size: 14px; color: #555;">Confidential and Secure</p>
                    </div>
                </div>

                <div class="why-card" style="display: flex; align-items: center; background-color: #fff; border-radius: 12px; padding: 20px; width: 280px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
                    <div class="icon-container" style="background-color: #fef0c7; padding: 12px; border-radius: 50%; margin-right: 15px; flex-shrink: 0; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2l8 4v6c0 5.55-3.84 10.74-8 12-4.16-1.26-8-6.45-8-12V6l8-4z"></path>
                        </svg>
                    </div>
                    <div class="card-content">
                        <h3 style="margin: 0; font-size: 16px; font-weight: 600; color: #2c1f0f;">Secure Payment</h3>
                        <p style="margin: 4px 0 0; font-size: 14px; color: #555;">Accurate and Trustable</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Quick Menu Section (Optional - can be hidden or styled differently) -->
        <div class="astroway-menu bg-pink mt-5" style="background-color: #fdf5e6 !important; padding: 30px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-unstyled d-flex mb-0 px-lg-4 px-xl-5 mx-xl-5 pt-3 pb-lg-3" style="justify-content: space-around; flex-wrap: wrap;">

                            <li class="today-panchang" style="margin: 10px;">
                                <a href="<?php echo e(route('front.getPanchang')); ?>" style="text-decoration: none; color: inherit;">
                                    <div class="text-center mb-2 mb-md-0">
                                        <div class="icon" style="transition: transform 0.3s ease; position: relative;">
                                            <?php
                                                $hasImage = !empty($panchang['value']);
                                            ?>
                                            <?php if($hasImage): ?>
                                                <img src="/<?php echo e($panchang['value']); ?>" alt="" height="55"
                                                    width="55" style="transition: transform 0.3s ease;"
                                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="display: none; width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                            <?php else: ?>
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <span class="d-block icon-desc" style="color: #2c1f0f; font-weight: 600; margin-top: 8px;">Today&#39;s Panchang</span>
                                    </div>
                                </a>
                            </li>


                            <li class="cheating-and-affairs" style="margin: 10px;">
                                <a href="<?php echo e(route('front.getkundali')); ?>" style="text-decoration: none; color: inherit;">
                                    <div class="text-center mb-2 mb-md-0">
                                        <div class="icon" style="transition: transform 0.3s ease; position: relative;">
                                            <?php
                                                $hasImage = !empty($freekundali['value']);
                                            ?>
                                            <?php if($hasImage): ?>
                                                <img src="/<?php echo e($freekundali['value']); ?>" alt="" height="55"
                                                    width="55" style="transition: transform 0.3s ease;"
                                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="display: none; width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            <?php else: ?>
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <span class="d-block icon-desc" style="color: #2c1f0f; font-weight: 600; margin-top: 8px;">Free Janam Kundali</span>
                                    </div>
                                </a>
                            </li>
                            <li class="kundali-matching" style="margin: 10px;">
                                <a href="<?php echo e(route('front.kundaliMatch')); ?>" style="text-decoration: none; color: inherit;">
                                    <div class="text-center mb-2 mb-md-0">
                                        <div class="icon" style="transition: transform 0.3s ease; position: relative;">
                                            <?php
                                                $hasImage = !empty($kundali_matching['value']);
                                            ?>
                                            <?php if($hasImage): ?>
                                                <img src="/<?php echo e($kundali_matching['value']); ?>" alt="" height="55"
                                                    width="55" style="transition: transform 0.3s ease;"
                                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="display: none; width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                            <?php else: ?>
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <span class="d-block icon-desc" style="color: #2c1f0f; font-weight: 600; margin-top: 8px;">Kundali Matching</span>
                                    </div>
                                </a>
                            </li>

                            <li class="Online-Puja" style="margin: 10px;">
                                <a href="<?php echo e(route('front.getproducts')); ?>" style="text-decoration: none; color: inherit;">
                                    <div class="text-center mb-2 mb-md-0">
                                        <div class="icon" style="transition: transform 0.3s ease; position: relative;">
                                            <?php
                                                $hasImage = !empty($shop['value']);
                                            ?>
                                            <?php if($hasImage): ?>
                                                <img src="/<?php echo e($shop['value']); ?>" alt="" height="55" width="55" style="transition: transform 0.3s ease;"
                                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="display: none; width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-shopping-bag"></i>
                                                </div>
                                            <?php else: ?>
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-shopping-bag"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <span class="d-block icon-desc merital-life" style="color: #2c1f0f; font-weight: 600; margin-top: 8px;">Products</span>
                                    </div>
                                </a>
                            </li>

                            <li class="daily-horoscope" style="margin: 10px;">
                                <a href="<?php echo e(route('front.horoScope')); ?>" style="text-decoration: none; color: inherit;">
                                    <div class="text-center mb-2 mb-md-0">
                                        <div class="icon" style="transition: transform 0.3s ease; position: relative;">
                                            <?php
                                                $hasImage = !empty($daily_horoscope['value']);
                                            ?>
                                            <?php if($hasImage): ?>
                                                <img src="/<?php echo e($daily_horoscope['value']); ?>" alt="" height="55"
                                                    width="55" style="transition: transform 0.3s ease;"
                                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="display: none; width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-sun"></i>
                                                </div>
                                            <?php else: ?>
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-sun"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <span class="d-block icon-desc" style="color: #2c1f0f; font-weight: 600; margin-top: 8px;">Free Daily Horoscope</span>
                                    </div>
                                </a>
                            </li>

                            <li class="astroway-blog mr-0" style="margin: 10px;">
                                <a href="<?php echo e(route('front.getBlog')); ?>" style="text-decoration: none; color: inherit;">
                                    <div class="text-center mb-2 mb-md-0">
                                        <div class="icon" style="transition: transform 0.3s ease; position: relative;">
                                            <?php
                                                $hasImage = !empty($blog['value']);
                                            ?>
                                            <?php if($hasImage): ?>
                                                <img src="/<?php echo e($blog['value']); ?>" alt="" height="55" width="55" style="transition: transform 0.3s ease;"
                                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="display: none; width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-blog"></i>
                                                </div>
                                            <?php else: ?>
                                                <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="width: 55px; height: 55px; margin: 0 auto;">
                                                    <i class="fas fa-blog"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <span class="d-block icon-desc" style="color: #2c1f0f; font-weight: 600; margin-top: 8px;">Astrology Blog</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php if(isset($stories) && count($stories)>0): ?>
        <div class="container mt-5 <?php echo e(empty($liveastro['recordList']) ? 'mb-5' : ''); ?>">
            <h2 class="text-md-center heading mb-3">Stories</h2>
            <p class="text-md-center mb-4">See Stories of top-rated Astrologers</p>
            <div class="stories-container">
                <?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="story <?php echo e($story->allStoriesViewed > 0 ? 'viewed' : ''); ?>" data-astrologer-id="<?php echo e($story->astrologerId); ?>" data-astrologer-name="<?php echo e($story->name); ?>" data-astrologer-profile="<?php echo e($story->profileImage); ?>">
                    <?php
                        $firstLetter = strtoupper(substr($story->name, 0, 1));
                        $hasImage = !empty($story->profileImage);
                    ?>
                    <?php if($hasImage): ?>
                        <img src="/<?php echo e($story->profileImage); ?>" alt="<?php echo e($story->name); ?>"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="display: none; width: 60px; height: 60px; margin: 0 auto;">
                            <?php echo e($firstLetter); ?>

                        </div>
                    <?php else: ?>
                        <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png')); ?>" alt="<?php echo e($story->name); ?>"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="image-placeholder image-placeholder-circle image-placeholder-small" style="display: none; width: 60px; height: 60px; margin: 0 auto;">
                            <?php echo e($firstLetter); ?>

                        </div>
                    <?php endif; ?>
                    <p><?php echo e($story->name); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Story Modal -->
        <div class="modal fade" id="storyModal" tabindex="-1" aria-labelledby="storyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img id="astrologerProfileImage" src="" alt="Astrologer Profile Image" class="rounded-circle" style="height: 40px;width:40px">
                        <span class="modal-title mt-2 ml-2" id="astrologerName"></span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" id="carouselIndicators"></ol>
                            <div class="carousel-inner" id="carouselInner"></div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        

        <?php if(isset($liveastro['recordList'] ) && count($liveastro['recordList'] )>0): ?>
        <div class="astroway-live-astrologers slider-bullets py-2 my-md-5 pt-md-5">
            <div class="container">
                <div class="row pb-2">
                    <div class="col-sm-12">
                        <h2 class="text-md-center heading">LIVE SESSIONS</h2>
                        <p class="text-md-center mb-1">Connect with top-rated Astrologers through live sessions for
                            instant solutions</p>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme owl-blur owl-mobile">
                            <?php $__currentLoopData = $liveastro['recordList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $live): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item gif-animation-enable mb-3"
                                    style="background:url('<?php echo e($live['profileImage'] ? '/' . $live['profileImage'] : asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png')); ?>')">
                                    <a href="<?php echo e(route('front.LiveAstroDetails', ['astrologerId' => $live['astrologerId']])); ?>"
                                        class="text-white">
                                        <div class="position-relative live-expert">
                                            <div class="position-absolute top-part">
                                                <span
                                                    class="bg-red px-2 text-white d-inline-flex align-items-center rounded font-12"><i
                                                        class="fa fa-circle font-11 mr-1"></i>Live</span>
                                            </div>
                                            <div class="position-absolute bottom-part w-100 p-2">
                                                <div class="d-flex h-100 align-items-center">
                                                    <div
                                                        class="position-relative profile-pic bg-white d-none d-md-flex align-items-center justify-content-center">
                                                        <?php
                                                            $firstLetter = strtoupper(substr($live['name'], 0, 1));
                                                            $hasImage = !empty($live['profileImage']);
                                                        ?>
                                                        <?php if($hasImage): ?>
                                                            <img src="/<?php echo e($live['profileImage']); ?>" width="38"
                                                                height="38" loading="lazy"
                                                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                                                            <div class="image-placeholder image-placeholder-circle" style="display: none; width: 38px; height: 38px; font-size: 16px;">
                                                                <?php echo e($firstLetter); ?>

                                                            </div>
                                                        <?php else: ?>
                                                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png')); ?>"
                                                                width="38" height="38" loading="lazy"
                                                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                                                            <div class="image-placeholder image-placeholder-circle" style="display: none; width: 38px; height: 38px; font-size: 16px;">
                                                                <?php echo e($firstLetter); ?>

                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class=" ml-2">
                                                        <p class="mb-0 pb-0 text-white font-16 text-capitalize">
                                                            <?php echo e($live['name']); ?>

                                                        </p>
                                                        <p class="mb-0 pb-0 text-yellow  font-12 text-capitalize">Tarot
                                                            Reading</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="text-center pt-2">
                            <a href="<?php echo e(route('front.getLiveAstro')); ?>"
                                class="btn view-more colorblack font-weight-semi-bold">
                                View More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <!-- Talk to an Astrologer Section -->
        <?php if(isset($getAstrologer['recordList']) && count($getAstrologer['recordList'] )>0): ?>
        <section class="astrologer-section" style="background-color: #fffaf0; padding: 50px 20px; text-align: center;">
            <h2 class="section-title" style="font-family: 'Playfair Display', serif; font-weight: 700; color: #2c1f0f; font-size: 28px; margin-bottom: 40px;">Talk to an Astrologer</h2>
            <div class="astrologer-cards" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 25px; max-width: 1200px; margin: 0 auto;">
                <?php $__currentLoopData = array_slice($getAstrologer['recordList'], 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $astrologer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="astrologer-card" style="background-color: #ffffff; border-radius: 12px; padding: 20px; width: 240px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06); transition: transform 0.3s ease;">
                    <div class="card-header" style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div class="avatar" style="width: 48px; height: 48px; background-color: #ddd; border-radius: 50%; margin-right: 12px; overflow: hidden; position: relative;">
                            <?php
                                $firstLetter = strtoupper(substr($astrologer['name'], 0, 1));
                                $hasImage = !empty($astrologer['profileImage']);
                            ?>
                            <?php if($hasImage): ?>
                                <img src="/<?php echo e($astrologer['profileImage']); ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="<?php echo e($astrologer['name']); ?>"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="image-placeholder image-placeholder-circle" style="display: none; width: 48px; height: 48px; font-size: 20px;">
                                    <?php echo e($firstLetter); ?>

                                </div>
                            <?php else: ?>
                                <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png')); ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="<?php echo e($astrologer['name']); ?>"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="image-placeholder image-placeholder-circle" style="display: none; width: 48px; height: 48px; font-size: 20px;">
                                    <?php echo e($firstLetter); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="info">
                            <h3 style="margin: 0; font-size: 16px; font-weight: 600; color: #1f1f1f;"><?php echo e($astrologer['name']); ?></h3>
                            <div class="rating" style="display: flex; align-items: center; font-size: 14px; margin: 2px 0;">
                                <span class="stars" style="color: #ffc107; font-size: 16px; margin-right: 6px; letter-spacing: 1px;">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <?php if($i <= ($astrologer['rating'] ?? 4.9)): ?>
                                            ★
                                        <?php else: ?>
                                            ☆
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </span>
                                <span class="score" style="font-weight: 500; color: #333;"><?php echo e(number_format($astrologer['rating'] ?? 4.9, 1)); ?></span>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #777;">Vedic Astrology</p>
                        </div>
                    </div>
                    <a href="<?php echo e(route('front.astrologerDetails', ['id' => $astrologer['id']])); ?>">
                        <button class="talk-button" style="background-color: #6d4ec6; color: white; border: none; padding: 10px 0; width: 100%; border-radius: 8px; font-weight: 600; font-size: 14px; cursor: pointer; margin-top: 10px; transition: background 0.3s ease;">
                            Talk Now
                        </button>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- What Our Customers Say Section -->
        <section class="testimonial-section" style="text-align: center; padding: 60px 20px; background-color: #fff9f0;">
            <h2 class="section-title" style="font-size: 28px; font-weight: 700; color: #2c1f0f; margin-bottom: 40px; font-family: 'Playfair Display', serif;">What Our Customers Say</h2>
            <div class="testimonial-card" style="position: relative; max-width: 600px; margin: 0 auto; background-color: #fff; border-radius: 10px; padding: 30px 40px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.05); text-align: left;">
                <div class="quote-icon" style="font-size: 48px; color: #e5b86a; margin-bottom: 10px; opacity: 0.8;">
                    <i class="fas fa-quote-left"></i>
                </div>
                <div class="testimonial-text">
                    <p style="color: #333; font-size: 16px; margin: -20px 0 5px 40px;">
                        It is Almost accurate and helpful. <br />
                        Highly recommended!
                    </p>
                    <h4 style="font-size: 16px; font-weight: 600; color: #000; margin: 10px 0 5px 40px;">Neha Gupta</h4>
                </div>
            </div>
        </section>

        <!-- Astro Blogs Section -->
        <?php if(isset($home_data['blog'] ) && count($home_data['blog'] )>0): ?>
        <section class="blogs-section" style="background-color: #f8f0dc; padding: 60px 20px; text-align: center;">
            <h2 class="section-title" style="font-size: 28px; font-weight: 700; margin-bottom: 30px; color: #2c1f0f; font-family: 'Playfair Display', serif;">Astro Blogs</h2>
            <div class="blog-cards" style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; max-width: 1200px; margin: 0 auto;">
                <?php $__currentLoopData = array_slice($home_data['blog'], 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="blog-card" style="width: 300px; height: 200px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); overflow: hidden; position: relative;">
                    <a href="<?php echo e(route('front.getBlogDetails', ['id' => $blog['id']])); ?>">
                        <?php
                            $hasImage = !empty($blog['blogImage']);
                        ?>
                        <?php if($hasImage): ?>
                            <img src="/<?php echo e($blog['blogImage']); ?>" alt="<?php echo e($blog['title']); ?>" style="width: 100%; height: 100%; object-fit: cover;"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                            <div class="image-placeholder image-placeholder-medium" style="display: none; width: 100%; height: 100%;">
                                <i class="fas fa-blog"></i>
                            </div>
                        <?php else: ?>
                            <div class="image-placeholder image-placeholder-medium" style="width: 100%; height: 100%;">
                                <i class="fas fa-blog"></i>
                            </div>
                        <?php endif; ?>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
        <?php endif; ?>



        <!-- From Youtube Section -->
        <?php if(isset($home_data['astrologyVideo'] ) && count($home_data['astrologyVideo'] )>0): ?>
        <section class="youtube-section" style="background-color: #fef9ed; padding: 60px 20px; text-align: center;">
            <h2 class="section-title" style="font-size: 28px; font-weight: 700; margin-bottom: 30px; color: #2c1f0f; font-family: 'Playfair Display', serif;">From Youtube</h2>
            <div class="youtube-videos" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; max-width: 1200px; margin: 0 auto;">
                <?php $__currentLoopData = array_slice($home_data['astrologyVideo'], 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $astrologyVideo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="video-card" style="position: relative; width: 250px; height: 150px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); background-color: #000; cursor: pointer;">
                    <a href="<?php echo e($astrologyVideo['youtubeLink']); ?>" target="_blank">
                        <?php
                            $hasImage = !empty($astrologyVideo['coverImage']);
                        ?>
                        <?php if($hasImage): ?>
                            <img src="/<?php echo e($astrologyVideo['coverImage']); ?>" alt="<?php echo e($astrologyVideo['videoTitle']); ?>" style="width: 100%; height: 100%; object-fit: cover; display: block;"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                            <div class="image-placeholder image-placeholder-medium" style="display: none; width: 100%; height: 100%;">
                                <i class="fa-brands fa-youtube" style="font-size: 50px; color: red;"></i>
                            </div>
                        <?php else: ?>
                            <div class="image-placeholder image-placeholder-medium" style="width: 100%; height: 100%;">
                                <i class="fa-brands fa-youtube" style="font-size: 50px; color: red;"></i>
                            </div>
                        <?php endif; ?>
                        <div class="play-button" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 50px; color: red; opacity: 0.85; pointer-events: none;">
                            <i class="fa-brands fa-youtube"></i>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- Our Products Section -->
        <?php if(isset($getAstromallProduct['recordList']) && count($getAstromallProduct['recordList'] )>0): ?>
        <section class="product-section" style="background-color: #f8f0dc; padding: 60px 20px; position: relative; overflow: hidden; border-radius: 8px; font-family: 'Poppins', sans-serif;">
            <div class="container" style="max-width: 1100px; margin: auto; text-align: center;">
                <h2 style="font-size: 28px; font-weight: 700; margin-bottom: 30px; font-family: 'Playfair Display', serif; color: #2c1f0f;">Our Products</h2>
                <div class="product-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px;">
                    <?php $__currentLoopData = array_slice($getAstromallProduct['recordList'], 0, 6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('front.getproductDetails', ['id' => $shop['id']])); ?>" style="display: block; position: relative;">
                        <?php
                            $hasImage = !empty($shop['productImage']);
                        ?>
                        <?php if($hasImage): ?>
                            <img src="/<?php echo e($shop['productImage']); ?>" alt="<?php echo e($shop['name']); ?>" style="width: 100%; height: 180px; object-fit: cover; border-radius: 10px; transition: transform 0.3s ease;" 
                                 onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                            <div class="image-placeholder image-placeholder-medium" style="display: none; width: 100%; height: 180px; border-radius: 10px;">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        <?php else: ?>
                            <div class="image-placeholder image-placeholder-medium" style="width: 100%; height: 180px; border-radius: 10px;">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        <?php endif; ?>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a href="<?php echo e(route('front.getproducts')); ?>">
                    <button class="see-more" style="background-color: #6d4ec6; color: #fff; border: none; padding: 12px 30px; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease;">
                        See More
                    </button>
                </a>
            </div>
        </section>
        <?php endif; ?>

<?php if(isset($home_data['astrotalkInNews'] ) && count($home_data['astrotalkInNews'] )>0): ?>
        <div class="astroway-publishers py-4 py-md-5 bg-brwon-extra-dark">
            <div class="container">
                <div class="row pb-2">
                    <div class="col-sm-12">
                        <h2 class="text-md-center heading text-white">As Seen On</h2>
                    </div>
                </div>
                <div class="row pt-md-3">
                    <div class="col-sm-12">
                        <div class="d-flex flex-wrap justify-content-center publishers-list">

                            <?php $__currentLoopData = $home_data['astrotalkInNews']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $astrotalkInNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($astrotalkInNews['link']); ?>" target="_blank">
                                    <div class="publisher row-1" style="position: relative;">
                                        <?php
                                            $hasImage = !empty($astrotalkInNews['bannerImage']);
                                        ?>
                                        <?php if($hasImage): ?>
                                            <img src="/<?php echo e($astrotalkInNews['bannerImage']); ?>"
                                                alt="abp_live" class="img-fluid" width="173" height="42"
                                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                            <div class="image-placeholder" style="display: none; width: 173px; height: 42px; font-size: 14px;">
                                                <i class="fas fa-newspaper"></i>
                                            </div>
                                        <?php else: ?>
                                            <div class="image-placeholder" style="width: 173px; height: 42px; font-size: 14px;">
                                                <i class="fas fa-newspaper"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>


        <!-- Who are we? Section -->
        <section class="about" style="max-width: 1400px; margin: 60px auto; padding: 40px 80px; background-color: #fff9f0;">
            <h2 style="font-family: 'Playfair Display', serif; font-weight: 700; color: #2c1f0f; font-size: 28px; margin-bottom: 30px;">Who are we?</h2>
            <p style="max-width: 1400px; margin: 24px auto; padding: 0; font-size: 16px; line-height: 1.8; color: #333;">
                Astrology is a predictive science with its own sets of methods, claims and findings that have forever inspired and allowed people with insights into different aspects of their life. Astrology, with its wows and hows, is contentful and approving enough to make people a believer of the same. And thankfully, it continues to do so despite the world shifting bases from what they believe in and what they don't. If one has to go into the technicalities of astrology, it is the study of different cosmic objects, which are usually stars and planets, that have an effect on the lives of the people. You must be aware that there are as many as 8 planets in the solar system. However, If I ask an online astrologer near me about the planets in astrology, they will tell me that there are as many as 9 planets in astrology also called Navagrahas. And surprisingly, the planet Earth, in astrology, is not counted among the nine planets. The 9 planets in astrology are Sun (Surya), Moon (Chandra), Mars (Mangala), Mercury (Budha), Jupiter (Brihaspati), Venus (Shukra), Saturn (Shani), Rahu (north node of the moon), and Ketu (south node of the moon).<br /><br />It all depends on which houses these planets are sitting in. If you ever had the opportunity to talk to an astrologer online, then s/he must have told you about houses in astrology and the movements of planets in the same. There are as many as 12 houses in Kundli. And all of these houses represent one thing or the other. You can check your free excel. Likewise, if Rahu is camping in the same house, then you might feel the need for online astrology consultation to deal with the woes. Then there are other things in astrology like elements, the Moon sign of an individual, numerology, tarot and so much more that is impossible to wind up here. Online Astrology Consultation & Services
            </p>
        </section>

        <!-- Frequently Asked Questions Section -->
        <section class="faq" style="max-width: 800px; margin: 0 auto; padding: 60px 20px; background-color: #fff9f0;">
            <h2 style="text-align: center; margin-bottom: 30px; font-size: 28px; font-family: 'Playfair Display', serif; font-weight: 700; color: #2c1f0f;">Frequently Asked Questions</h2>

            <details style="background-color: #fff; padding: 15px 20px; margin: 10px auto; max-width: 700px; border-radius: 6px; cursor: pointer; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
                <summary style="display: flex; justify-content: space-between; list-style: none; font-size: 15px; font-weight: 500; color: #2c1f0f;">
                    <span>Is Astrology Prediction True?</span>
                    <span class="icon" style="font-size: 14px; transition: transform 0.6s ease;">▼</span>
                </summary>
                <p style="margin-top: 10px; font-size: 13px; color: #444;">Astrology predictions are based on the position and movements of planets and celestial bodies. While some consider it a science, others view it as a belief system. The accuracy depends on various factors including the astrologer's expertise and the methods used.</p>
            </details>

            <details style="background-color: #fff; padding: 15px 20px; margin: 10px auto; max-width: 700px; border-radius: 6px; cursor: pointer; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
                <summary style="display: flex; justify-content: space-between; list-style: none; font-size: 15px; font-weight: 500; color: #2c1f0f;">
                    <span>How can I get my Kundli made?</span>
                    <span class="icon" style="font-size: 14px; transition: transform 0.6s ease;">▼</span>
                </summary>
                <p style="margin-top: 10px; font-size: 13px; color: #444;">You can get your Kundli made online by providing your birth details including date, time, and place of birth. Our platform offers free Kundli generation services that will help you understand your astrological chart.</p>
            </details>

            <details style="background-color: #fff; padding: 15px 20px; margin: 10px auto; max-width: 700px; border-radius: 6px; cursor: pointer; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
                <summary style="display: flex; justify-content: space-between; list-style: none; font-size: 15px; font-weight: 500; color: #2c1f0f;">
                    <span>What services do you offer?</span>
                    <span class="icon" style="font-size: 14px; transition: transform 0.6s ease;">▼</span>
                </summary>
                <p style="margin-top: 10px; font-size: 13px; color: #444;">We offer a wide range of astrology services including Kundli Analysis, Live Chat with astrologers, Love & Career guidance, Panchang & Muhurat, Numerology & Vastu, and much more. All our services are available online 24/7.</p>
            </details>

            <details style="background-color: #fff; padding: 15px 20px; margin: 10px auto; max-width: 700px; border-radius: 6px; cursor: pointer; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
                <summary style="display: flex; justify-content: space-between; list-style: none; font-size: 15px; font-weight: 500; color: #2c1f0f;">
                    <span>How do I talk to an astrologer?</span>
                    <span class="icon" style="font-size: 14px; transition: transform 0.6s ease;">▼</span>
                </summary>
                <p style="margin-top: 10px; font-size: 13px; color: #444;">You can talk to our verified astrologers through live chat or call. Simply select an astrologer from our list, choose your preferred method of communication, and start your consultation. Your first chat is free!</p>
            </details>
        </section>

        <!-- Keep existing expanded FAQ section for desktop (optional) -->
        <div class="py-5 bg-pink-light d-none d-md-block" style="background-color: #f8f0dc !important;">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-12">
                        <h2 class="heading text-center" style="font-family: 'Playfair Display', serif; font-weight: 700; color: #2c1f0f;">What Is Astrology?<span class="ml-3" data-toggle="collapse"
                                href="#collapse-faq" role="button" aria-expanded="false"
                                aria-controls="collapse-faq"><i class="fa fa-chevron-down" style="color: #e5b86a;"></i></span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="collapse py-4 font-14" id="collapse-faq" style="color: #333;">
                            <h3 class="font-weight-bold">Astrology Is The Language Of The Universe</h3>
                            <p>Astrology predictions are based on the position and movements of planets and
                                celestial bodies in the Universe that impact our life quality. This can be studied
                                by creating an offline or online horoscope of individuals. This affects not only the
                                people but also controls the occurrence of certain events happening in the sublunar
                                world.</p>
                            <p>Some may call it pseudo-science, and others call it predictive science. The science
                                that is Astrology inspires people to know the various aspects of their life and take
                                it in the right direction. From making life predictions on the basis of a detailed
                                Kundali or telling you about the near future through daily, weekly and monthly
                                horoscopes, Astrology is the medium through which you can get a glimpse of what the
                                future will bring for you.</p>
                            <p>There is one aspect of offline and online Astrology prediction where the impacts of
                                planetary transition can be seen. And when it is related to the Zodiacs, it happens
                                as various planets cross the sectors of each zodiac in the sky. It impacts the
                                natives of different zodiacs differently. And one more way is by analyzing the
                                planetary position in various houses of one&#39;s Kundli.</p>
                            <p>Astrology reading is quite extensive. It is all about studying the 9 planets placed
                                in the twelve houses of one&#39;s Kundli and their impact on their life. These
                                planets are the Sun, Moon, Mercury, Venus, Mars, Jupiter, Saturn, Rahu, and Ketu.
                                Some of these planets positively impact human life, and others affect it adversely.
                                It depends on their house placement.</p>
                            <p>For example, it is not always a compulsion that Saturn will bring negative impacts or
                                Jupiter will be a positive one.</p>
                            <p>Every house in the Kundli represents a different aspect of one&#39;s life. Similarly,
                                Sun Signs, Moon Signs, Ascendants, and Descendants have their own significance. So
                                it is not a confined subject, and the best way to know your future through the power
                                of Astrology is to talk to an online Astrologer and get a detailed analysis of your
                                online horoscope covering every aspect of your life.</p>

                            <h3 class="font-weight-bold">Astrology Predictions And Its Benefits</h3>
                            <p>Offline and online Astrology predictions have the power to forecast the future by
                                analyzing the positions of the planets as they move and studying their impact on
                                your life.</p>
                            <p>An online horoscope is essentially a blueprint of your life that can help you gain
                                clarity about the different aspects of your life, your personality and your future.
                                Although there are several benefits of Astrological predictions, the best one
                                remains timely guidance, and remedial suggestions to help avoid any unfavorable
                                events coming your way. Or even if not eliminate them altogether, the offline and
                                online Astro remedies can at least minimize their impacts. It is best if the
                                guidance comes from the best Astrologer in India.</p>
                            <p>You can take advantage of staying a step ahead of time in every aspect of your life,
                                be it love, money, career, marriage, family, or anything else. Online Astrology has
                                the power to show you the right path that will lead you towards a successful and
                                happy life.</p>

                            <h3 class="font-weight-bold">How Online Astrology Services Can Benefit You</h3>
                            <p>You know how well you can take your life in the right direction with right Astro
                                guidance, so why not get it from the comfort of your home.</p>

                            <p>Keeping the convenience, comfort and flexibility in mind, Astroway has
                                introduced the best online Astrology consultation services. You can choose from
                                online Astrologers, numerologists, palmists, and <a href="#" target="_blank">tarot
                                    reading experts</a> to get answers for your concerns.
                                This has been done while keeping various factors in mind that can benefit you.</p>
                            <ul class="pl-3">
                                <li>It is the most hassle-free way to connect with the best Astrologers.</li>
                                <li>Online Astrology services are the most time-saving and affordable way to connect
                                    with top Astrologers and get consultations, anytime and anywhere.</li>
                                <li>It makes it convenient for people to talk to an Astrologer openly as your
                                    privacy and confidentiality is strictly maintained.</li>
                                <li>You can choose the best Astrologer online among nearly 100+ Astrologers that you
                                    think matches your requirements perfectly.</li>
                            </ul>


                            <h3 class="font-weight-bold">Online Astrology Consultation Services By Astroway
                            </h3>
                            <p>Astroway has established its footprints in the online Astrology services,
                                helping people get through their life problems. This is done by the best online
                                Astrologers who are experienced and renowned in this domain. Our Astrologers are
                                available 24/7 to help people with their Astro advice on the best website for
                                Astrology.</p>
                            <p>Astroway strives to provide the best Astrology consultation services by the best
                                Astrologers. Our professional Astrologers are not only limited to providing guidance
                                and insights into various aspects of your life. They are also your friend and
                                partner to get you through difficult situations. Another thing is that they are not
                                only traditional Astrologers. There are also tarot reading experts and <a href="#"
                                    target="_blank">numerologists</a> to give you a range of Astrology services.
                            </p>
                            <p>You know that you need an online Astrology reading session at Astroway, so you
                                should understand how it works.</p>
                            <p>Here are the steps you can follow to reach the expert Astrologers on the best
                                Astrologer site.</p>
                            <ul class="pl-3">
                                <li>Download the Astroway app</li>
                                <li>Sign up with your basic details</li>
                                <li>Enjoy your free session of online Astrology consultation</li>
                                <li>Recharge your wallet</li>
                                <li>Choose the best Astrologer online with whom you want to consult</li>
                                <li>Enjoy your live chat/call session with the best online Astrologers</li>
                            </ul>
                            <p>So are you now confused about how you can choose the best Astrologer for your
                                session? The one who can make the most accurate online horoscope? Here are the
                                things to consider.</p>
                            <p>First of all, categorize your query based on various issues like love, finance,
                                family, etc. Then look for the expert Astrologers of that particular aspect and
                                choose them based on the ratings they get from their clients. These ratings are
                                based on the quality of the session. Or you can go a step further and read their
                                descriptions where their experience and expertise are mentioned.</p>
                            <p>That&#39;s how you will get in touch with the expert Astrologer that will provide the
                                guidance you need for all your life problems along with the most effective
                                solutions.</p>


                            <h3 class="font-weight-bold">Online Astrologers Of Astroway</h3>
                            <p>Astroway connects you with India&#39;s top astrologers!</p>
                            <p>We at Astroway consider it our responsibility to connect you with India&#39;s
                                best online astrologers. And to make sure that you get the most satisfactory
                                experience after each session, whether through live chat or call, we are highly
                                particular about choosing our Astrologers.</p>
                            <p>There are a lot of factors that we consider before an Astrologer comes on board with
                                us.</p>
                            <ul class="pl-3">
                                <li>Educational qualifications</li>
                                <li>Area of expertise</li>
                                <li>Years of experience</li>
                                <li>Method of practice (Astrology, numerology, tarot card reading, etc.)</li>
                            </ul>
                            <p>We make sure that our clients get what they expect. So, we ensure that only the best
                                and the most knowledgeable Astrologers are associated with us. Astrologers go
                                through a multi-layer screening process to become a part of our community. And they
                                come from all over the country. All the Astrologers who are associated with us are
                                certified and verified for their area of expertise. We leave no stone unturned to
                                ensure you get the best guidance by the best Astrologers.</p>
                            <p>You can get their guidance regarding <a href="#" target="_blank">your online
                                    horoscope</a>, Kundli matching, general online
                                predictions, etc.</p>
                            <p>Search for the phrase &#39;the best astrologer near me,&#39; and you will get the
                                relevant results wherever you are. But with Astroway, you will still find the
                                best astrologers and get their guidance from the comfort of your home.</p>
                            <p>So whenever you consult with an expert astrologer at Astroway, you get only the
                                best!</p>


                            <h3 class="font-weight-bold">Online Astrology Predictions Categories</h3>
                            <p>You can discuss anything troubling you with a professional Astrologer. Still, in case
                                you need clarity, here are the buckets of specific categories in which you can put
                                your queries.</p>

                            <ul class="pl-3">
                                <li>
                                    <p class="font-weight-bold mb-0">Love and relationships</p>
                                    <p>Here, you can <a href="#" target="_blank">ask an Astrologer any question
                                            related to your
                                            relationship</a>, whether past, present, or future. It also answers the
                                        question about your ex's feelings or maybe issues related to cheating, etc.
                                    </p>
                                </li>
                                <li>
                                    <p class="font-weight-bold mb-0">Marriage and family</p>

                                    <p><a href="#" target="_blank">Ask questions related to your married life</a>.
                                        It
                                        taps the issues related to infidelity, general future, or even second
                                        marriage.</p>
                                </li>
                                <li>
                                    <p class="font-weight-bold mb-0">Career and job</p>
                                    <p>Under this category, all the questions related to your work will be placed.
                                        It can be anything from workplace conflicts to promotions to being confused
                                        between two options.</p>
                                </li>
                                <li>
                                    <p class="font-weight-bold mb-0">Money and finance</p>
                                    <p>This category will have questions that concern money. It may be related to
                                        your current financial position or the future, or maybe the reasons
                                        affecting it or how you can improve.</p>
                                </li>
                            </ul>
                            <p>These are the four primary and basic categories under which almost every question can
                                be put. Then it will be convenient for you to choose the expert Astrologers who will
                                answer your question. It will be done through Vedic Astrology predictions, tarot
                                reading, numerology, and palmistry to give you the best insights.</p>
                            <p>Astroway is your ultimate destination for all your online Astrology consultation
                                needs. Here you can get the best guidance from the top Astrologers who will help you
                                make the best and the most beneficial decisions in life.</p>

                            <h3 class="font-weight-bold pt-4 pb-3">FAQs Related To Astrology &amp; Astroway
                            </h3>
                            <div itemscope itemtype='https://schema.org/FAQPage'>
                                <ol class="pl-3">
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">What are Astrology
                                                predictions based on?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">Astrology predictions are basically the
                                                    analysis of the position of planets and stars and how they move
                                                    to impact the world and each individual existing there. So the
                                                    basis of offline and online Astrology predictions is the
                                                    movement and transits of the planets in the Universe.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">What are Astrology
                                                and zodiac?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">Zodiac signs are the signs that develop the
                                                    internal and external personality of someone, and Astrology
                                                    defines the changes in that personality concerning the planetary
                                                    movements.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">How do Astrology
                                                predictions help me to deal with my problems?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">Astrology predictions can keep you a step ahead
                                                    of time where you can know what is waiting for you in the
                                                    future. And with proper guidance, you can be better prepared to
                                                    deal with the problems and challenges you might face in the
                                                    future.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">How can online
                                                Astrology predictions be so accurate? Is there any scientific reason
                                                behind it?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">Astrology services are based on
                                                    pseudo-scientific practice that provides Astrology predictions
                                                    to individuals based on the movements of planets. These offline
                                                    and online Astrology predictions can be general and specific
                                                    depending on the type of reading.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">How reliable are
                                                the Astroway Astrologers?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">The credibility of Astroway&#39;s
                                                    Astrologers can be seen through the reviews and the ratings they
                                                    get from people like you after their session with them. All our
                                                    Astrologers are verified for their experience and expertise.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">Can I ask personal
                                                questions?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">Astroway&#39;s Astrologers have expertise
                                                    in every aspect of life. This includes both personal and general
                                                    queries. So you can very well ask an Astrologer online any
                                                    question related to the issue that is troubling you.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">What type of a
                                                question can I ask an Astrologer?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">A good Astrologer is there to solve all your
                                                    queries and concerns regarding life. So you can ask an
                                                    Astrologer any question except those that break the sanctity of
                                                    this spiritual practice. It includes queries related to black
                                                    magic, death, afterlife, etc.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">Can I speak to the
                                                same Astrologer when I call again?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">Yes, you can always choose the Astrologer of
                                                    your choice. And if you want to talk to the same Astrologer
                                                    again, you have to select them again for your session through
                                                    the defined process.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">Can I talk to an
                                                Astrologer for free?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">You can connect with the best Astrologers
                                                    without paying anything for your first session. After that, you
                                                    need to recharge your wallet with a basic amount to connect with
                                                    them. You can either chat with an Astrologer or call them.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">How much does it
                                                cost to see an Astrologer?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <div itemprop="text">
                                                    <p>You can connect with the Astrologers through live chat or
                                                        call. You need to sign up and register absolutely for free
                                                        to get there. After that, you can also avail your first free
                                                        chat session but moving forward, you need to recharge your
                                                        wallet.</p>
                                                    <p>The rates of each Astrologer vary. These are based on their
                                                        expertise, experience, and exposure. So how much you will
                                                        pay will depend on the Astrologer you choose.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <p itemprop="name" class="font-weight-bold mb-0">Who is the best
                                                online Astrologer?</p>
                                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <p itemprop="text">Every Astrologer at Astroway is the best.
                                                    Still, the one who can cater to your specific requirements based
                                                    on the area of expertise will be the best for you. At Anytime
                                                    Astro, you can connect with the best Astrologers in India.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="astroway-about d-none d-md-block py-4 py-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-md-center heading">WHY ASTROWAY?</h2>
                        <p class="text-md-center">One of the best online Astrology platforms to connect with
                            experienced and verified Astrologers</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="accordion" id="faq">
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <h3 class="panel-title mb-0">
                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#verified-astrologers" aria-expanded="true"
                                            aria-controls="verified-astrologers">

                                            Verified Astrologers
                                        </a>
                                    </h3>
                                </div>

                                <div id="verified-astrologers" class="collapse" aria-labelledby="faqhead1"
                                    data-parent="#faq">
                                    <div class="card-body">
                                        Astroway helps you connect with the best online Astrologers in India
                                        who will guide you through all the problems of your life and provide answers
                                        to all your queries through accurate Astrology predictions. Be it your love
                                        problems or money problems, our Astrologers can give you guidance on each
                                        and every aspect of your life You can chat with our Astrologers Live or on
                                        call and ask all your concerns. Whether it is Vedic Astrology, Tarot
                                        Reading, Psychic Reading, Horoscope or Numerology, we have certified online
                                        Astrologers who can provide you with the most accurate astro advice for your
                                        concern and give you effective solutions and remedies to resolve your
                                        problems.

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <h3 class="panel-title mb-0">
                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#multiple-ways-to-connect" aria-expanded="true"
                                            aria-controls="multiple-ways-to-connect">Ask An
                                            Astrologer Via Multiple Ways</a>
                                    </h3>
                                </div>

                                <div id="multiple-ways-to-connect" class="collapse" aria-labelledby="faqhead2"
                                    data-parent="#faq">
                                    <div class="card-body">
                                        <p> By offering you multiple ways to connect with online Astrologers, we
                                            make sure that you get the guidance you seek, anytime and anywhere.
                                        </p>
                                        <p>We offer Online Astrology consultation, through which you can connect
                                            with our Astrologers LIVE through a one-on-one chat or a call session.
                                            You can also opt to send a message to your chosen Astrologer and book a
                                            live session with them for online Astrology reading according to your
                                            concern, time and flexibility.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <h3 class="panel-title mb-0">
                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                            data-target="#privacy-guaranteed" aria-expanded="true"
                                            aria-controls="privacy-guaranteed">100% Privacy
                                            Guaranteed</a>
                                    </h3>
                                </div>

                                <div id="privacy-guaranteed" class="collapse" aria-labelledby="faqhead3"
                                    data-parent="#faq">
                                    <div class="card-body">
                                        At Astroway, your privacy and security is our top priority. We adopt
                                        the highest security standards to keep your data and information secure. We
                                        ensure complete anonymity of your personal data, and any other information
                                        that you share with our Astrologers. Our platform operates in a 100% secure
                                        setting, so you can connect online with Astrologers without worrying about
                                        anything.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="astroway-about-mobile d-md-none bg-pink py-4">
            <div class="container">
                <h2 class="heading text-center">WHY ASTROWAY?</h2>
                <div class="row pt-4 pb-2">
                    <div class="col-4 text-center">
                        <div style="position: relative; display: inline-block;">
                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/about1.svg')); ?>"
                                class="img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                            <div class="image-placeholder image-placeholder-small" style="display: none; width: 60px; height: 60px; margin: 0 auto;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <p class="font-weight-semi-bold pt-3 font-14">Verified Astrologers</p>
                    </div>
                    <div class="col-4 text-center">
                        <div style="position: relative; display: inline-block;">
                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/about2.svg')); ?>"
                                class="img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                            <div class="image-placeholder image-placeholder-small" style="display: none; width: 60px; height: 60px; margin: 0 auto;">
                                <i class="fas fa-comments"></i>
                            </div>
                        </div>
                        <p class="font-weight-semi-bold pt-3 font-14">Ask An Astrologer Via Multiple Ways</p>
                    </div>
                    <div class="col-4 text-center">
                        <div style="position: relative; display: inline-block;">
                            <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/about3.svg')); ?>"
                                class="img-fluid"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
                            <div class="image-placeholder image-placeholder-small" style="display: none; width: 60px; height: 60px; margin: 0 auto;">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <p class="font-weight-semi-bold pt-3 font-14">100% Privacy Guaranteed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            var owl = $('.astroway-astrologers .owl-carousel');

            if ($(window).width() > 767) {
                owl.owlCarousel({
                    margin: 0,
                    responsive: {
                        0: {
                            items: 2,
                            slideBy: 2
                        },
                        370: {
                            items: 2.3,
                            slideBy: 2
                        },
                        768: {
                            items: 2.4,
                            slideBy: 2,
                            nav: true
                        },
                        992: {
                            nav: true,
                            items: 3
                        },
                        1199: {
                            nav: true,
                            items: 5
                        }
                    }
                });
            }
            owl.removeClass('owl-blur');

            $('#main_nav').on('shown.bs.collapse', function() {
                $('#navbarDropdown').dropdown('toggle');
            });


            $('.owl-youtube.owl-theme').owlCarousel({
                loop: true,
                nav: true,
                margin: 0,
                responsive: {
                    0: {
                        margin: 5,
                        items: 1
                    },
                    600: {
                        items: 2,
                        margin: 15,
                    },
                    991: {
                        center: true,
                        nav: true,
                    },

                }
            })


            var owl = $('.astroway-live-astrologers .owl-carousel');
            if ($(window).width() > 767) {
                owl.owlCarousel({
                    margin: 0,
                    responsive: {
                        0: {
                            items: 2,
                            slideBy: 2
                        },
                        370: {
                            items: 3.3,
                            slideBy: 2
                        },
                        768: {
                            items: 3,
                            slideBy: 2,
                            nav: true
                        },
                        992: {
                            nav: true,
                            items: 4
                        },
                        1199: {
                            nav: true,
                            items: 5
                        }
                    }
                });
            }
            owl.removeClass('owl-blur');

            $('#main_nav').on('shown.bs.collapse', function() {
                $('#navbarDropdown').dropdown('toggle');
            });


            $('.astroway-blog .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                // autoplay: true,
                // autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });


            $('.astroway-customer-stories .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                // autoplay: true,
                // autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });



        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let slides = document.querySelectorAll('.slide');
            let currentIndex = 0;

            document.querySelector('.bannerbtn-next').addEventListener('click', function() {
                slides[currentIndex].style.left = '-100%';
                currentIndex = (currentIndex + 1) % slides.length;
                slides[currentIndex].style.left = '0';
            });

            document.querySelector('.bannerbtn-prev').addEventListener('click', function() {
                slides[currentIndex].style.left = '100%';
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                slides[currentIndex].style.left = '0';
            });

            // Initially position all slides
            slides.forEach((slide, index) => {
                slide.style.left = index === 0 ? '0' : '100%';
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.story').on('click', function() {
                var astrologerId = $(this).data('astrologer-id');
                var astrologerName = $(this).data('astrologer-name');
                var astrologerProfile = $(this).data('astrologer-profile');
                // console.log(astrologerProfile);

                if (!astrologerProfile) {
                    astrologerProfile = 'public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png';
                }
                // Make an AJAX request to get the stories
                $.ajax({
                    url: '/astrologer/' + astrologerId + '/stories',
                    method: 'GET',
                    success: function(response) {
                        openStoryModal(response, astrologerName,astrologerProfile);
                    },
                    error: function(error) {
                        console.error('Error fetching stories:', error);
                    }
                });
            });
        });

        function openStoryModal(stories, name , profileImage) {
            var modal = $('#storyModal');
            var astrologerProfileImage = $('#astrologerProfileImage');
            var astrologerName = $('#astrologerName');
            var carouselIndicators = $('#carouselIndicators');
            var carouselInner = $('#carouselInner');
            var modalTitle=$('#astrologerName');

            // Clear existing slides and indicators
            carouselIndicators.empty();
            carouselInner.empty();

            // Add new slides and indicators
            stories.forEach((story, index) => {
                var indicator = $('<li>')
                    .attr('data-target', '#carouselExampleIndicators')
                    .attr('data-slide-to', index);
                if (index === 0) {
                    indicator.addClass('active');
                }
                carouselIndicators.append(indicator);

                var carouselItem = $('<div>')
                    .addClass('carousel-item');
                if (index === 0) {
                    carouselItem.addClass('active');
                }

                if (story.mediaType === 'image') {
                    var img = $('<img>')
                        .addClass('d-block w-100')
                        .attr('src', story.media);
                    carouselItem.append(img);
                } else if (story.mediaType === 'video') {
                    var video = $('<video>')
                        .addClass('d-block w-100')
                        .attr('controls', true);
                    var source = $('<source>')
                        .attr('src', story.media)
                        .attr('type', 'video/mp4');
                    video.append(source);
                    carouselItem.append(video);
                } else if (story.mediaType === 'text') {
                    var text = $('<div>')
                        .addClass('d-block w-100 text-center')
                        .css({
                            'padding': '20px',
                            'font-size': calculateFontSize(story.media)
                        })
                        .text(story.media);
                    carouselItem.append(text);
                }
                <?php if(authcheck()): ?>
                trackStoryView(story.id);
                <?php endif; ?>
                carouselInner.append(carouselItem);
            });

            modalTitle.text(name);
            astrologerProfileImage.attr('src', profileImage);

            modal.modal('show');

            // Stop auto sliding
                $('.carousel').carousel('pause');


            function calculateFontSize(text) {
                var baseFontSize = 30;
                var maxLength = 200;
                var fontSize = baseFontSize;

                if (text.length > maxLength) {
                    fontSize = baseFontSize - ((text.length - maxLength) / 10);
                }

                return fontSize + 'px';
            }


            function trackStoryView(storyId) {
                $.ajax({
                    url: 'astrologer/viewstory',
                    method: 'POST',
                    data: {
                        storyId: storyId
                    },
                    success: function(response) {
                        console.log(response.message);
                    },
                    error: function(error) {
                        console.error('Error viewing story:', error);
                    }
                });
         }
    }


    </script>

</script>
<?php if(request('error')): ?>
 <script>

           toastr.error("<?php echo e(request('error')); ?>");

       if (window.history.replaceState) {
           window.history.replaceState(null, null, window.location.pathname);
       }
   </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/pages/index.blade.php ENDPATH**/ ?>