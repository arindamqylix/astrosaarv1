
<style>
    /* Panchang Page Styles */
    .panchang-page {
        background-color: #fff9f0;
        min-height: 100vh;
        padding-bottom: 40px;
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

    .page-header-section {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        padding: 50px 20px;
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

    .page-header-section .subtitle {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 10px;
    }

    .page-header-section p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.8;
        max-width: 900px;
        margin: 0 auto;
    }

    /* Date Selector Section */
    .date-selector-section {
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
    }

    .date-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .btn-date {
        padding: 12px 25px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid #6d4ec6;
        cursor: pointer;
    }

    .btn-date.active {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
    }

    .btn-date:not(.active) {
        background: #fff;
        color: #6d4ec6;
    }

    .btn-date:not(.active):hover {
        background: #f8f9fa;
        transform: translateY(-2px);
    }

    .btn-calendar-toggle {
        padding: 12px 25px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        background: #fff;
        color: #6d4ec6;
        border: 2px solid #6d4ec6;
        text-decoration: none;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-calendar-toggle:hover {
        background: #f8f9fa;
        transform: translateY(-2px);
        text-decoration: none;
        color: #6d4ec6;
    }

    .btn-calendar-toggle i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    /* Calendar Grid */
    .calendar-grid {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        margin-top: 20px;
    }

    .month-selector {
        text-align: center;
        margin-bottom: 20px;
    }

    .month-box {
        display: inline-block;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        padding: 10px 30px;
        border-radius: 8px;
        font-size: 18px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 2px 8px rgba(109, 78, 198, 0.3);
    }

    .days-container {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 8px;
        margin-top: 15px;
    }

    .day-box {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px;
        background: #fff;
        border-radius: 8px;
        text-decoration: none;
        color: #333;
        font-weight: 500;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        min-height: 45px;
    }

    .day-box:hover {
        background: #f0f0f0;
        transform: translateY(-2px);
        text-decoration: none;
        color: #6d4ec6;
    }

    .day-box.active {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        border-color: #6d4ec6;
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
    }

    /* Panchang Cards */
    .panchang-cards-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .panchang-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .panchang-card:hover {
        box-shadow: 0 8px 25px rgba(109, 78, 198, 0.15);
        transform: translateY(-5px);
    }

    .panchang-card-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        padding: 20px;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
    }

    .panchang-card-body {
        padding: 25px;
    }

    .panchang-detail-item {
        display: flex;
        justify-content: space-between;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
        align-items: center;
    }

    .panchang-detail-item:last-child {
        border-bottom: none;
    }

    .panchang-detail-label {
        font-weight: 600;
        color: #333;
        font-size: 15px;
    }

    .panchang-detail-value {
        color: #666;
        font-size: 15px;
        text-align: right;
        flex: 1;
        margin-left: 20px;
    }

    .empty-state {
        text-align: center;
        padding: 80px 20px;
        color: #999;
    }

    .empty-state i {
        font-size: 64px;
        margin-bottom: 20px;
        color: #ddd;
    }

    .empty-state h3 {
        font-size: 24px;
        font-weight: 600;
        color: #666;
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-header-section {
            padding: 30px 15px;
        }

        .page-header-section h2 {
            font-size: 24px;
        }

        .date-buttons {
            flex-direction: column;
        }

        .btn-date,
        .btn-calendar-toggle {
            width: 100%;
        }

        .days-container {
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .day-box {
            padding: 8px;
            min-height: 40px;
            font-size: 14px;
        }

        .panchang-cards-container {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="panchang-page">
        <div class="breadcrumb-section d-none d-md-block">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo e(route('front.astrologerindex')); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                    <i class="fa fa-chevron-right"></i>
                    <a href="#">Panchang</a>
                    <i class="fa fa-chevron-right"></i>
                    Today's Panchang
                </div>
            </div>
        </div>

        <div class="page-header-section">
            <div class="container">
                <h2>Today's Panchang <span style="font-size: 24px; opacity: 0.9;">(Aaj Ka Panchang)</span></h2>
                <p>Panchang is the Hindu calendar followed by Vedic astrology, which provides complete detail on each day's Tithis and auspicious and inauspicious timings. Today's Panchang on Astroway is based on Vijay Vishwa Panchang, which is the rarest of Panchang, used by Astrologers for hundreds of years. Through Daily Panchang, you can get all the information about the time, date, and day to determine the Muhurat for everything. Astrologers suggest people should follow the Day Panchang while doing new work or performing any auspicious event.</p>
            </div>
        </div>


        <div class="container">
            <div class="date-selector-section">
                <div class="date-buttons">
                    <?php
                        $todayActive = !request()->has('panchangDate');
                        $tomorrowActive = request('panchangDate') === date('Y-m-d', strtotime('+1 day'));
                    ?>
                    <a href="<?php echo e(route('front.getPanchang')); ?>" class="btn-date <?php echo e($todayActive ? 'active' : ''); ?>">
                        Today
                    </a>
                    <a href="<?php echo e(route('front.getPanchang', ['panchangDate' => date('Y-m-d', strtotime('+1 day'))])); ?>" class="btn-date <?php echo e($tomorrowActive ? 'active' : ''); ?>">
                        Tomorrow
                    </a>
                    <a class="btn-calendar-toggle" data-toggle="collapse" href="#calendarCollapse" role="button" aria-expanded="false" aria-controls="calendarCollapse">
                        Calendar <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
                <div class="collapse" id="calendarCollapse">
                    <div class="calendar-grid">
                        <div class="month-selector">
                            <a href="<?php echo e(route('front.getPanchang')); ?>" class="month-box"><?php echo e(date('M Y')); ?></a>
                        </div>
                        <div class="days-container">
                            <?php
                                $year = date('Y');
                                $month = date('m');
                                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                $currentDate = request('panchangDate', date('Y-m-d'));
                            ?>
                            <?php for($day = 1; $day <= $daysInMonth; $day++): ?>
                                <?php
                                    $date = sprintf("%02d", $day);
                                    $fullDate = "$year-$month-$date";
                                    $isActive = $currentDate == $fullDate;
                                ?>
                                <a href="<?php echo e(route('front.getPanchang', ['panchangDate' => $fullDate])); ?>" class="day-box <?php echo e($isActive ? 'active' : ''); ?>">
                                    <?php echo e($day); ?>

                                </a>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(!empty($getPanchang['response']['tithi'])): ?>
                <div class="panchang-cards-container">
                    <!-- Panchang Details Card -->
                    <div class="panchang-card">
                        <div class="panchang-card-header">
                            <i class="fas fa-calendar-alt mr-2"></i> Panchang Details
                        </div>
                        <div class="panchang-card-body">
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Tithi</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['tithi']['name'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Nakshatra</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['nakshatra']['name'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Yoga</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['yoga']['name'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Karana</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['karana']['name'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Rasi</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['rasi']['name'] ?? 'N/A'); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information Card -->
                    <div class="panchang-card">
                        <div class="panchang-card-header">
                            <i class="fas fa-info-circle mr-2"></i> Additional Information
                        </div>
                        <div class="panchang-card-body">
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Sunrise</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['advanced_details']['sun_rise'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Sunset</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['advanced_details']['sun_set'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Moonrise</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['advanced_details']['moon_rise'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Moonset</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['advanced_details']['moon_set'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Next Full Moon</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['advanced_details']['next_full_moon'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Next New Moon</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['advanced_details']['next_new_moon'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Amanta Month</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['advanced_details']['masa']['amanta_name'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Paksha</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['advanced_details']['masa']['paksha'] ?? 'N/A'); ?></span>
                            </div>
                            <div class="panchang-detail-item">
                                <span class="panchang-detail-label">Purnimanta</span>
                                <span class="panchang-detail-value"><?php echo e($getPanchang['response']['advanced_details']['masa']['purnimanta_name'] ?? 'N/A'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="empty-state">
                    <i class="fas fa-calendar-times"></i>
                    <h3>Oops! No Panchang Found</h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function() {
        // Toggle calendar icon rotation
        $('#calendarCollapse').on('show.bs.collapse', function() {
            $('.btn-calendar-toggle i.fa-chevron-down').removeClass('fa-chevron-down').addClass('fa-chevron-up');
        });
        $('#calendarCollapse').on('hide.bs.collapse', function() {
            $('.btn-calendar-toggle i.fa-chevron-up').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.astrologers.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/astrologers/pages/panchang.blade.php ENDPATH**/ ?>