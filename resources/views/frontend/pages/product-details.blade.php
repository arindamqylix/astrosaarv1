@extends('frontend.layout.master')
@section('content')
    <style>
        .product-details-page {
            background-color: #fff9f0;
            min-height: 100vh;
            padding-bottom: 60px;
        }

        .breadcrumb-section {
            background-color: #fff9f0;
            padding: 15px 0;
            border-bottom: 1px solid #e8e8e8;
        }

        .breadcrumb-section .breadcrumb {
            background: transparent;
            margin: 0;
            padding: 0;
        }

        .breadcrumb-section .breadcrumb-item a {
            color: #6d4ec6;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-section .breadcrumb-item a:hover {
            color: #5d3eb6;
        }

        .breadcrumb-section .breadcrumb-item.active {
            color: #666;
        }

        .product-detail-container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            padding: 30px;
            margin-top: 30px;
        }

        .product-image-section {
            position: relative;
            background-color: #f8f0dc;
            border-radius: 12px;
            overflow: hidden;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image-section img {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: contain;
            border-radius: 12px;
        }

        .product-image-placeholder {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 64px;
            border-radius: 12px;
        }

        .product-info-section {
            padding-left: 30px;
        }

        .product-category {
            display: inline-block;
            background-color: #f5f0ff;
            color: #6d4ec6;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 15px;
        }

        .product-title {
            font-size: 32px;
            font-weight: 700;
            color: #2c1f0f;
            margin-bottom: 20px;
            line-height: 1.3;
            font-family: 'Playfair Display', serif;
        }

        .product-price-section {
            background: linear-gradient(135deg, #f5f0ff 0%, #fff 100%);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            border: 2px solid #e8e0ff;
        }

        .product-price-label {
            font-size: 14px;
            color: #666;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .product-price {
            font-size: 36px;
            font-weight: 700;
            color: #6d4ec6;
        }

        .product-price-currency {
            font-size: 24px;
            margin-right: 4px;
        }

        .product-details-card {
            background-color: #f8f0dc;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .product-details-title {
            font-size: 18px;
            font-weight: 700;
            color: #2c1f0f;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .product-details-title i {
            color: #6d4ec6;
        }

        .product-description {
            font-size: 15px;
            color: #555;
            line-height: 1.8;
            margin: 0;
        }

        .delivery-info-card {
            background-color: #fff;
            border: 2px solid #e8e0ff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .delivery-info-title {
            font-size: 16px;
            font-weight: 700;
            color: #2c1f0f;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .delivery-info-title i {
            color: #6d4ec6;
            font-size: 18px;
        }

        .delivery-info-text {
            font-size: 14px;
            color: #666;
            margin: 0;
        }

        .btn-buy-now {
            width: 100%;
            padding: 16px 30px;
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 18px;
            text-decoration: none;
            text-align: center;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(109, 78, 198, 0.3);
        }

        .btn-buy-now:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(109, 78, 198, 0.4);
            color: #fff;
            text-decoration: none;
        }

        .recent-products-section {
            background-color: #fff9f0;
            padding: 60px 0;
            margin-top: 60px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 32px;
            font-weight: 700;
            color: #2c1f0f;
            margin-bottom: 10px;
            font-family: 'Playfair Display', serif;
        }

        .section-header p {
            font-size: 16px;
            color: #666;
            margin: 0;
        }

        .recent-products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
        }

        .recent-product-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .recent-product-card:hover {
            box-shadow: 0 6px 20px rgba(109, 78, 198, 0.12);
            transform: translateY(-5px);
        }

        .recent-product-image {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
            background-color: #f8f0dc;
        }

        .recent-product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .recent-product-card:hover .recent-product-image img {
            transform: scale(1.05);
        }

        .recent-product-image-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 40px;
        }

        .recent-product-body {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .recent-product-name {
            font-size: 16px;
            font-weight: 600;
            color: #2c1f0f;
            margin-bottom: 12px;
            line-height: 1.4;
            min-height: 44px;
        }

        .recent-product-price {
            font-size: 20px;
            font-weight: 700;
            color: #6d4ec6;
            margin-bottom: 15px;
        }

        .recent-product-price-currency {
            font-size: 16px;
            margin-right: 4px;
        }

        .btn-view-details {
            width: 100%;
            padding: 10px 20px;
            background-color: #6d4ec6;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-view-details:hover {
            background-color: #5d3eb6;
            color: #fff;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
        }

        @media (max-width: 991px) {
            .product-info-section {
                padding-left: 0;
                margin-top: 30px;
            }

            .product-title {
                font-size: 26px;
            }

            .product-price {
                font-size: 28px;
            }

            .recent-products-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 20px;
            }
        }

        @media (max-width: 576px) {
            .product-detail-container {
                padding: 20px;
            }

            .product-title {
                font-size: 22px;
            }

            .recent-products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <div class="product-details-page">
        <!-- Breadcrumb Section -->
        <div class="breadcrumb-section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('front.home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('front.getproducts')}}">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="product-detail-container">
                <div class="row">
                    <!-- Product Image Section -->
                    <div class="col-md-5">
                        <div class="product-image-section">
                            @php
                                $product = $getproductdetails['recordList'][0];
                                $hasImage = !empty($product['productImage']);
                            @endphp
                            @if($hasImage)
                                <img src="/{{ $product['productImage'] }}" alt="{{ $product['name'] }}" loading="lazy"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="product-image-placeholder" style="display: none;">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            @else
                                <div class="product-image-placeholder">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Product Info Section -->
                    <div class="col-md-7">
                        <div class="product-info-section">
                            <div class="product-category">
                                <i class="fas fa-tag mr-2"></i> {{ $product['productCategory'] }}
                            </div>

                            <h1 class="product-title">{{ $product['name'] }}</h1>

                            <div class="product-price-section">
                                <div class="product-price-label">Price</div>
                                <div class="product-price">
                                    <span class="product-price-currency">{{$currency['value']}}</span>{{ number_format($product['amount'], 2) }}
                                </div>
                            </div>

                            <div class="product-details-card">
                                <div class="product-details-title">
                                    <i class="fas fa-info-circle"></i> Product Details
                                </div>
                                <p class="product-description">{{ $product['features'] ?? 'No description available.' }}</p>
                            </div>

                            <div class="delivery-info-card">
                                <div class="delivery-info-title">
                                    <i class="fas fa-truck"></i> Delivery Information
                                </div>
                                <p class="delivery-info-text">
                                    <strong>Delivery done in 3 days from date of purchase.</strong> Order now to get this product delivered to your doorstep.
                                </p>
                            </div>

                            @if(!authcheck())
                                <a role="button" data-toggle="modal" data-target="#loginSignUp" class="btn-buy-now">
                                    <i class="fas fa-shopping-cart"></i> Buy Now
                                </a>
                            @else
                                <a href="{{ route('front.checkout', ['id' => $product['id']]) }}" class="btn-buy-now">
                                    <i class="fas fa-shopping-cart"></i> Buy Now
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Recent Products Section -->
        @if(isset($getAstromallProduct['recordList']) && count($getAstromallProduct['recordList']) > 0)
        <div class="recent-products-section">
            <div class="container">
                <div class="section-header">
                    <h2>Related Products</h2>
                    <p>Discover more products that might interest you</p>
                </div>
                <div class="recent-products-grid">
                    @foreach ($getAstromallProduct['recordList'] as $shop)
                        <div class="recent-product-card">
                            <a href="{{route('front.getproductDetails',['id'=>$shop['id']])}}" class="recent-product-image">
                                @php
                                    $hasImage = !empty($shop['productImage']);
                                @endphp
                                @if($hasImage)
                                    <img src="/{{ $shop['productImage'] }}" alt="{{ $shop['name'] }}" loading="lazy"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <div class="recent-product-image-placeholder" style="display: none;">
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                @else
                                    <div class="recent-product-image-placeholder">
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                @endif
                            </a>
                            <div class="recent-product-body">
                                <h3 class="recent-product-name">{{ $shop['name'] }}</h3>
                                <div class="recent-product-price">
                                    <span class="recent-product-price-currency">{{$currency['value']}}</span>{{ number_format($shop['amount'], 2) }}
                                </div>
                                <a href="{{route('front.getproductDetails',['id'=>$shop['id']])}}" class="btn-view-details">
                                    <i class="fas fa-eye mr-2"></i> View Details
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>

    <script>
        $(document).ready(function() {
            // Smooth scroll for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });
        });
    </script>
@endsection
