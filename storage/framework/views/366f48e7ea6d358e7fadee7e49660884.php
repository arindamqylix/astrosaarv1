
<style>
    /* Wallet Recharge Page Styles */
    .recharge-page {
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
        padding: 40px 20px;
        text-align: center;
        margin-bottom: 30px;
        border-radius: 0 0 20px 20px;
    }

    .page-header-section h1 {
        font-size: 32px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    .page-header-section p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 16px;
        margin: 0;
    }

    /* Balance Card */
    .balance-card {
        background: #fff;
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
        text-align: center;
    }

    .balance-card .balance-label {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

    .balance-card .balance-amount {
        font-size: 32px;
        font-weight: 700;
        color: #6d4ec6;
    }

    /* Recharge Cards Grid */
    .recharge-cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .recharge-card {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        border: 2px solid #e0e0e0;
        transition: all 0.3s ease;
        position: relative;
        cursor: pointer;
        text-align: center;
    }

    .recharge-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(109, 78, 198, 0.15);
        border-color: #6d4ec6;
    }

    .recharge-card.selected {
        border-color: #6d4ec6;
        background: linear-gradient(135deg, rgba(109, 78, 198, 0.1) 0%, rgba(139, 111, 216, 0.1) 100%);
        box-shadow: 0 4px 15px rgba(109, 78, 198, 0.2);
    }

    .cashback-badge {
        position: absolute;
        top: -8px;
        right: -8px;
        background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
        color: white;
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 600;
        box-shadow: 0 2px 8px rgba(255, 193, 7, 0.3);
    }

    .recharge-amount {
        font-size: 24px;
        font-weight: 700;
        color: #333;
        margin: 10px 0;
    }

    .recharge-card button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .recharge-card button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
    }

    .recharge-card.selected button {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    }

    /* Order Summary */
    .order-summary-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
        position: sticky;
        top: 20px;
    }

    .order-summary-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        padding: 15px 20px;
        border-radius: 12px 12px 0 0;
        margin: -30px -30px 25px -30px;
        font-size: 18px;
        font-weight: 600;
        text-align: center;
    }

    .order-summary-item {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .order-summary-item:last-of-type {
        border-bottom: none;
    }

    .order-summary-item .label {
        color: #666;
        font-weight: 500;
    }

    .order-summary-item .value {
        color: #333;
        font-weight: 600;
    }

    .order-summary-item.total {
        border-top: 2px solid #e0e0e0;
        margin-top: 10px;
        padding-top: 15px;
    }

    .order-summary-item.total .label {
        font-size: 18px;
        color: #333;
    }

    .order-summary-item.total .value {
        font-size: 20px;
        color: #6d4ec6;
    }

    .cashback-section {
        background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(255, 152, 0, 0.1) 100%);
        border-radius: 12px;
        padding: 15px;
        margin-top: 15px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .cashback-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
        border-radius: 50%;
        color: white;
        font-size: 24px;
        flex-shrink: 0;
    }

    .cashback-info h4 {
        margin: 0;
        font-size: 16px;
        color: #333;
        font-weight: 600;
    }

    .cashback-info p {
        margin: 5px 0 0 0;
        font-size: 14px;
        color: #666;
    }

    .btn-proceed {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 8px;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 20px;
        box-shadow: 0 4px 15px rgba(109, 78, 198, 0.3);
    }

    .btn-proceed:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(109, 78, 198, 0.4);
    }

    .btn-proceed:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .terms-text {
        text-align: center;
        font-size: 12px;
        color: #999;
        margin-top: 15px;
        line-height: 1.6;
    }

    .terms-text a {
        color: #6d4ec6;
        text-decoration: none;
    }

    .terms-text a:hover {
        text-decoration: underline;
    }

    /* Secure Payment Section */
    .secure-payment-section {
        background: linear-gradient(135deg, rgba(109, 78, 198, 0.05) 0%, rgba(139, 111, 216, 0.05) 100%);
        padding: 40px 20px;
        margin-top: 40px;
        border-radius: 20px 20px 0 0;
    }

    .secure-payment-section h2 {
        font-size: 24px;
        font-weight: 700;
        color: #333;
        text-align: center;
        margin-bottom: 10px;
    }

    .secure-payment-section p {
        text-align: center;
        color: #666;
        font-size: 14px;
    }

    .image-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(45deg, #6d4ec6, #8b6fd8);
        color: white;
        font-weight: bold;
        border-radius: 8px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header-section {
            padding: 30px 15px;
        }

        .page-header-section h1 {
            font-size: 24px;
        }

        .recharge-cards-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .order-summary-card {
            position: relative;
            top: 0;
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="recharge-page">
        <div class="breadcrumb-section d-none d-md-block">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo e(route('front.astrologerindex')); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                    <i class="fa fa-chevron-right"></i>
                    <a href="<?php echo e(route('front.getAstrologerWallet')); ?>">My Wallet</a>
                    <i class="fa fa-chevron-right"></i>
                    <span>Recharge Wallet</span>
                </div>
            </div>
        </div>

        <div class="page-header-section">
            <div class="container">
                <h1>Recharge Your Wallet</h1>
                <p>Add money to your wallet and get exclusive cashback offers</p>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <!-- Balance Card -->
                <div class="col-12 mb-4">
                    <div class="balance-card">
                        <div class="balance-label">Available Balance</div>
                        <div class="balance-amount"><?php echo e($currency['value']); ?><?php echo e(number_format($getProfile['data']['totalWalletAmount'], 2)); ?></div>
                    </div>
                </div>

                <!-- Recharge Amounts -->
                <div class="col-lg-8">
                    <div class="recharge-cards-grid" id="plan-item">
                        <?php $__currentLoopData = $getRechargeAmount['recordList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $amount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="recharge-card <?php echo e($index == 0 ? 'selected' : ''); ?>" data-amount="<?php echo e($amount['amount']); ?>" data-cashback="<?php echo e($amount['cashback']); ?>">
                                <div class="cashback-badge"><?php echo e($amount['cashback']); ?>% Extra</div>
                                <div class="recharge-amount"><?php echo e($currency['value']); ?><?php echo e(number_format($amount['amount'], 2)); ?></div>
                                <button class="btn add-plan" type="button">
                                    Select Plan
                                </button>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="order-summary-card">
                        <div class="order-summary-header">
                            <i class="fas fa-shopping-cart mr-2"></i> Order Summary
                        </div>
                        <form id="prcdtopayform">
                            <div class="order-summary-item">
                                <span class="label" id="planText">Plan Value</span>
                                <span class="value" id="total_plan_amount"><?php echo e($currency['value']); ?><?php echo e(number_format($selectedamount['amount'], 2)); ?></span>
                            </div>
                            
                            <div class="order-summary-item d-none" id="discount-div">
                                <span class="label">
                                    <span id="total_plan_discount_percent"></span>% Discount
                                </span>
                                <span class="value" id="total_plan_discount_amount"></span>
                            </div>

                            <div class="order-summary-item" id="gst_details">
                                <span class="label">
                                    <span id="gstval"><?php echo e($gstvalue['value']); ?></span>% GST (+)
                                </span>
                                <span class="value" id="total_plan_gst_amount"><?php echo e($currency['value']); ?><?php echo e(number_format($selectedamount['amount'] * ($gstvalue['value'] / 100), 2)); ?></span>
                            </div>

                            <div class="order-summary-item total">
                                <span class="label">Total</span>
                                <span class="value total_plan_amount_with_gst"><?php echo e($currency['value']); ?><?php echo e(number_format($selectedamount['amount'] + $selectedamount['amount'] * ($gstvalue['value'] / 100), 2)); ?></span>
                            </div>

                            <div class="cashback-section" id="total-cashback-amount">
                                <?php
                                    $cashbackIcon = asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/cashback-icon.svg');
                                    $hasCashbackIcon = file_exists(public_path('frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/cashback-icon.svg'));
                                ?>
                                <?php if($hasCashbackIcon): ?>
                                    <img src="<?php echo e($cashbackIcon); ?>" alt="Cashback" class="cashback-icon"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <div class="cashback-icon" style="display: none;">
                                        <i class="fas fa-gift"></i>
                                    </div>
                                <?php else: ?>
                                    <div class="cashback-icon">
                                        <i class="fas fa-gift"></i>
                                    </div>
                                <?php endif; ?>
                                <div class="cashback-info">
                                    <h4>
                                        <span id="total_plan_cashback_percent"><?php echo e($selectedamount['cashback']); ?>% Extra</span>
                                    </h4>
                                    <p>
                                        <span id="total_plan_cashback_amount"><?php echo e($currency['value']); ?><?php echo e(number_format(($selectedamount['amount'] * $selectedamount['cashback']) / 100, 2)); ?> cashback</span>
                                    </p>
                                </div>
                            </div>

                            <input type="hidden" id="payamount" name="amount" value="<?php echo e(number_format($selectedamount['amount'] + $selectedamount['amount'] * ($gstvalue['value'] / 100), 2)); ?>">
                            <input type="hidden" id="paycashback" name="cashback_amount" value="<?php echo e(number_format(($selectedamount['amount'] * $selectedamount['cashback']) / 100, 2)); ?>">

                            <button type="button" class="btn-proceed" id="proceedbtn">
                                <i class="fas fa-lock mr-2"></i> Proceed To Pay <?php echo e($currency['value']); ?><?php echo e(number_format($selectedamount['amount'] + $selectedamount['amount'] * ($gstvalue['value'] / 100), 2)); ?>

                            </button>

                            <p class="terms-text">
                                By confirming this payment, you agree to our 
                                <a href="/privacy-policy/" target="_blank">Privacy Policy</a> 
                                and <a href="/terms-of-use/" target="_blank">Terms Of Use</a>.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="secure-payment-section">
            <div class="container">
                <h2>100% SECURE & SAFE PAYMENT</h2>
                <p>Your details are secure with 3rd party payment gateway</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            var currencySymbol = "<?php echo e($currency['value']); ?>";
            var gstPercent = <?php echo e($gstvalue['value']); ?>;

            function updateOrderValues(planAmount, gstPercent, currencySymbol, cashbackPercent, cashbackAmount) {
                var gstAmount = (parseFloat(planAmount) * parseFloat(gstPercent)) / 100;
                var totalAmount = parseFloat(planAmount) + gstAmount;

                // Update display values
                $('#total_plan_amount').text(currencySymbol + parseFloat(planAmount).toFixed(2));
                $('#total_plan_gst_amount').text(currencySymbol + gstAmount.toFixed(2));
                $('.total_plan_amount_with_gst').text(currencySymbol + totalAmount.toFixed(2));

                $('#total_plan_cashback_percent').text(cashbackPercent + "% Extra");
                $('#total_plan_cashback_amount').text(currencySymbol + cashbackAmount.toFixed(2) + " cashback");

                // Set values for hidden input fields
                $('#payamount').val(totalAmount.toFixed(2));
                $('#paycashback').val(cashbackAmount.toFixed(2));
                $('#proceedbtn').html('<i class="fas fa-lock mr-2"></i> Proceed To Pay ' + currencySymbol + totalAmount.toFixed(2));
            }

            // Handle recharge card selection
            $('.recharge-card').on('click', function() {
                // Remove selected class from all cards
                $('.recharge-card').removeClass('selected');
                
                // Add selected class to clicked card
                $(this).addClass('selected');
                
                // Update button text
                $('.recharge-card button').text('Select Plan');
                $(this).find('button').text('Selected');
                
                // Get amount and cashback from data attributes
                var planAmount = parseFloat($(this).data('amount'));
                var cashbackPercent = parseFloat($(this).data('cashback'));
                var cashbackAmount = (planAmount * cashbackPercent) / 100;

                // Update order summary
                updateOrderValues(planAmount, gstPercent, currencySymbol, cashbackPercent, cashbackAmount);
            });

            // Also handle button click (for backward compatibility)
            $('.add-plan').on('click', function(e) {
                e.stopPropagation();
                $(this).closest('.recharge-card').trigger('click');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#proceedbtn').on('click', function(e) {
                e.preventDefault();

                // Disable button and show loading
                $(this).prop('disabled', true);
                var originalHtml = $(this).html();
                $(this).html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span> Processing...');

                <?php
                    use Symfony\Component\HttpFoundation\Session\Session;
                    $session = new Session();
                    $token = $session->get('astrotoken');
                ?>

                var formData = $('#prcdtopayform').serialize();

                $.ajax({
                    url: '<?php echo e(route('user.addpayment', ['token' => $token])); ?>',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        window.location.href = response.url;
                    },
                    error: function(xhr, status, error) {
                        toastr.error(xhr.responseText || 'An error occurred. Please try again.');
                        $('#proceedbtn').prop('disabled', false).html(originalHtml);
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.astrologers.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/astrologers/pages/astrologer-wallet-recharge.blade.php ENDPATH**/ ?>