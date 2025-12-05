<?php $__env->startSection('content'); ?>
    <style>
        .products-page {
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

        .page-header-section {
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            padding: 50px 20px;
            text-align: center;
            color: #fff;
            margin-bottom: 40px;
        }

        .page-header-section h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
            font-family: 'Playfair Display', serif;
        }

        .page-header-section p {
            font-size: 16px;
            opacity: 0.95;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .search-filter-section {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            margin-bottom: 30px;
        }

        .search-filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .search-filter-header h2 {
            font-size: 24px;
            font-weight: 700;
            color: #2c1f0f;
            margin: 0;
        }

        .filter-toggle-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background-color: #6d4ec6;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-toggle-btn:hover {
            background-color: #5d3eb6;
        }

        .search-filter-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            align-items: end;
        }

        .search-box-modern {
            position: relative;
        }

        .search-box-modern input {
            width: 100%;
            padding: 12px 50px 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .search-box-modern input:focus {
            border-color: #6d4ec6;
            box-shadow: 0 0 0 3px rgba(109, 78, 198, 0.2);
            outline: none;
        }

        .search-box-modern button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #6d4ec6;
            font-size: 18px;
            cursor: pointer;
            padding: 5px 10px;
        }

        .filter-select-modern {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            background-color: #fff;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-select-modern:focus {
            border-color: #6d4ec6;
            box-shadow: 0 0 0 3px rgba(109, 78, 198, 0.2);
            outline: none;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .product-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            box-shadow: 0 6px 20px rgba(109, 78, 198, 0.12);
            transform: translateY(-5px);
        }

        .product-image-container {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            background-color: #f8f0dc;
        }

        .product-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image-container img {
            transform: scale(1.05);
        }

        .product-image-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 48px;
        }

        .product-card-body {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-name {
            font-size: 18px;
            font-weight: 600;
            color: #2c1f0f;
            margin-bottom: 15px;
            line-height: 1.4;
            min-height: 50px;
        }

        .product-price {
            font-size: 24px;
            font-weight: 700;
            color: #6d4ec6;
            margin-bottom: 15px;
        }

        .product-price-currency {
            font-size: 18px;
            margin-right: 4px;
        }

        .btn-view-details {
            width: 100%;
            padding: 12px 20px;
            background-color: #6d4ec6;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
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

        .pagination-section {
            margin-top: 50px;
            text-align: center;
        }

        .pagination-info {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .pagination-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-pagination {
            padding: 12px 30px;
            background-color: #6d4ec6;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-pagination:hover {
            background-color: #5d3eb6;
            color: #fff;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
        }

        .btn-pagination:disabled,
        .btn-pagination.disabled {
            background-color: #ddd;
            color: #999;
            cursor: not-allowed;
            transform: none;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .empty-state i {
            font-size: 64px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            color: #666;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .empty-state p {
            color: #999;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .page-header-section h1 {
                font-size: 28px;
            }

            .search-filter-content {
                grid-template-columns: 1fr;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 20px;
            }

            .product-image-container {
                height: 200px;
            }
        }

        @media (max-width: 576px) {
            .products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="products-page">
        <!-- Breadcrumb Section -->
        <div class="breadcrumb-section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('front.home')); ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Page Header -->
        <div class="page-header-section">
            <div class="container">
                <h1>Our Products</h1>
                <p>Discover our collection of premium astrology products designed to enhance your spiritual journey and bring positive energy into your life.</p>
            </div>
        </div>


        <div class="container">
            <!-- Search and Filter Section -->
            <div class="search-filter-section">
                <div class="search-filter-header">
                    <h2><i class="fas fa-filter mr-2"></i> Search & Filter</h2>
                    <button class="filter-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#filterCollapse" aria-expanded="false" aria-controls="filterCollapse">
                        <i class="fas fa-sliders-h"></i> Filters
                    </button>
                </div>
                <div class="collapse d-md-block" id="filterCollapse">
                    <div class="search-filter-content">
                        <div class="search-box-modern">
                            <form action="<?php echo e(route('front.getproducts')); ?>" method="GET">
                                <?php if(isset($productCategoryId) && $productCategoryId != '0'): ?>
                                    <input type="hidden" name="productCategoryId" value="<?php echo e($productCategoryId); ?>">
                                <?php endif; ?>
                                <input value="<?php echo e(isset($searchTerm) ? $searchTerm : ''); ?>" name="s" placeholder="Search products by name..." type="search" autocomplete="off">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div>
                            <select name="productCategoryId" onchange="onFilterProductCategoryList()" class="filter-select-modern" id="psychicCategories">
                                <option value="0" <?php echo e($productCategoryId == '0' ? 'selected' : ''); ?>>All Categories</option>
                                <?php $__currentLoopData = $getproductCategory['recordList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category['id']); ?>" <?php echo e($productCategoryId == $category['id'] ? 'selected' : ''); ?>>
                                        <?php echo e($category['name']); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <?php if(isset($getAstromallProduct['recordList']) && count($getAstromallProduct['recordList']) > 0): ?>
            <div class="products-grid">
                <?php $__currentLoopData = $getAstromallProduct['recordList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product-card">
                        <a href="<?php echo e(route('front.getproductDetails', ['id' => $shop['id']])); ?>" class="product-image-container">
                            <?php
                                $hasImage = !empty($shop['productImage']);
                            ?>
                            <?php if($hasImage): ?>
                                <img src="/<?php echo e($shop['productImage']); ?>" alt="<?php echo e($shop['name']); ?>" loading="lazy"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="product-image-placeholder" style="display: none;">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            <?php else: ?>
                                <div class="product-image-placeholder">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            <?php endif; ?>
                        </a>
                        <div class="product-card-body">
                            <h3 class="product-name"><?php echo e($shop['name']); ?></h3>
                            <div class="product-price">
                                <span class="product-price-currency"><?php echo e($currency['value']); ?></span><?php echo e(number_format($shop['amount'], 2)); ?>

                            </div>
                            <a href="<?php echo e(route('front.getproductDetails', ['id' => $shop['id']])); ?>" class="btn-view-details">
                                <i class="fas fa-eye mr-2"></i> View Details
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Pagination -->
            <?php if(isset($totalRecords) && $totalRecords > 0): ?>
                <div class="pagination-section">
                    <div class="pagination-info">
                        Showing page <?php echo e($currentPage); ?> of <?php echo e(ceil($totalRecords / $perPage)); ?> (<?php echo e($totalRecords); ?> products)
                    </div>
                    <div class="pagination-buttons">
                        <?php if($currentPage > 1): ?>
                            <a class="btn-pagination" href="<?php echo e(route('front.getproducts', array_merge(request()->except('page'), ['page' => $currentPage - 1]))); ?>">
                                <i class="fas fa-chevron-left"></i> Previous
                            </a>
                        <?php else: ?>
                            <span class="btn-pagination disabled">
                                <i class="fas fa-chevron-left"></i> Previous
                            </span>
                        <?php endif; ?>
                        <?php if($currentPage < ceil($totalRecords / $perPage)): ?>
                            <a class="btn-pagination" href="<?php echo e(route('front.getproducts', array_merge(request()->except('page'), ['page' => $currentPage + 1]))); ?>">
                                Next <i class="fas fa-chevron-right"></i>
                            </a>
                        <?php else: ?>
                            <span class="btn-pagination disabled">
                                Next <i class="fas fa-chevron-right"></i>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php else: ?>
            <!-- Empty State -->
            <div class="empty-state">
                <i class="fas fa-shopping-bag"></i>
                <h3>No Products Found</h3>
                <p>We couldn't find any products matching your search criteria. Please try adjusting your filters or search terms.</p>
            </div>
            <?php endif; ?>
        </div>
    </div>


    <script>
        function onFilterProductCategoryList() {
            var productCategoryId = $('#psychicCategories').val();
            var url = new URL(window.location.href);
            
            // Preserve search term if exists
            var searchTerm = url.searchParams.get('s');
            
            // Reset to page 1 when filtering
            url.searchParams.set('productCategoryId', productCategoryId);
            url.searchParams.delete('page');
            
            if (searchTerm) {
                url.searchParams.set('s', searchTerm);
            }
            
            window.location.href = url.toString();
        }

        $(document).ready(function() {
            // Handle filter collapse on mobile
            $('#filterCollapse').on('show.bs.collapse', function() {
                $('.filter-toggle-btn i').removeClass('fa-sliders-h').addClass('fa-times');
            });

            $('#filterCollapse').on('hide.bs.collapse', function() {
                $('.filter-toggle-btn i').removeClass('fa-times').addClass('fa-sliders-h');
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/pages/products.blade.php ENDPATH**/ ?>