<style>
    .recharge-container {
        background-color: #fff9f0;
        padding: 30px 15px;
        min-height: 70vh;
    }

    .recharge-card {
        background-color: #ffffff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
    }

    .page-title {
        font-family: 'Playfair Display', serif;
        color: #2c1f0f;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .balance-display {
        background: linear-gradient(135deg, #f8f0dc 0%, #fff9f0 100%);
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 30px;
        text-align: center;
        border: 1px solid #f0e6d2;
    }

    .balance-display span {
        font-size: 16px;
        color: #2c1f0f;
        font-weight: 600;
    }

    .recharge-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .recharge-card-item {
        background-color: #ffffff;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 0;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .recharge-card-item:hover {
        border-color: #6d4ec6;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.15);
    }

    .recharge-card-item.selected {
        border-color: #6d4ec6;
        border-width: 3px;
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.25);
    }

    .recharge-amount {
        padding: 20px 15px;
        text-align: center;
    }

    .recharge-amount-value {
        font-family: 'Playfair Display', serif;
        font-size: 28px;
        font-weight: 700;
        color: #2c1f0f;
        margin: 0;
    }

    .recharge-badge {
        background-color: #e5b86a;
        color: #2c1f0f;
        padding: 8px 0;
        text-align: center;
        font-weight: 600;
        font-size: 13px;
        border-radius: 0 0 10px 10px;
    }

    .order-summary-box {
        background-color: #ffffff;
        border: 2px solid #e0e0e0;
        border-radius: 16px;
        padding: 25px;
        position: relative;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
    }

    .pay-safely-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        display: flex;
        align-items: center;
        gap: 5px;
        background-color: #28a745;
        color: #fff;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
    }

    .order-title {
        font-family: 'Playfair Display', serif;
        font-size: 20px;
        font-weight: 700;
        color: #2c1f0f;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .order-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .order-row:last-of-type {
        border-bottom: 2px solid #f0f0f0;
    }

    .order-label {
        color: #666;
        font-size: 14px;
    }

    .order-value {
        color: #2c1f0f;
        font-weight: 600;
        font-size: 14px;
    }

    .order-total {
        font-size: 18px;
        font-weight: 700;
        color: #2c1f0f;
    }

    .cashback-info {
        background-color: #f0f9f4;
        border-radius: 10px;
        padding: 15px;
        margin: 20px 0;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .cashback-icon {
        width: 40px;
        height: 40px;
        background-color: #28a745;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .cashback-icon i {
        color: #fff;
        font-size: 20px;
    }

    .cashback-text {
        flex: 1;
    }

    .cashback-percent {
        font-weight: 700;
        color: #2c1f0f;
        font-size: 14px;
        margin-bottom: 3px;
    }

    .cashback-amount {
        color: #28a745;
        font-size: 13px;
        font-weight: 600;
    }

    .btn-proceed {
        width: 100%;
        background-color: #6d4ec6;
        color: #fff;
        border: none;
        border-radius: 12px;
        padding: 15px 30px;
        font-weight: 600;
        font-size: 16px;
        transition: all 0.3s ease;
        margin-top: 20px;
        cursor: pointer;
    }

    .btn-proceed:hover {
        background-color: #5a3aa0;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
    }

    .legal-text {
        text-align: center;
        font-size: 12px;
        color: #666;
        margin-top: 15px;
        line-height: 1.6;
    }

    .legal-text a {
        color: #6d4ec6;
        text-decoration: none;
        font-weight: 600;
    }

    .legal-text a:hover {
        text-decoration: underline;
    }

    .secure-payment-section {
        background-color: #fff9f0;
        padding: 50px 15px;
        text-align: center;
    }

    .secure-payment-title {
        font-family: 'Playfair Display', serif;
        font-size: 28px;
        font-weight: 700;
        color: #2c1f0f;
        margin-bottom: 10px;
    }

    .secure-payment-desc {
        color: #666;
        font-size: 15px;
        margin: 0;
    }

    .secure-payment-line {
        width: 100px;
        height: 3px;
        background: linear-gradient(90deg, #6d4ec6 0%, #e5b86a 100%);
        margin: 15px auto;
        border-radius: 2px;
    }

    @media (max-width: 768px) {
        .recharge-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .recharge-card {
            padding: 20px;
        }

        .order-summary-box {
            margin-top: 30px;
        }
    }

    @media (max-width: 480px) {
        .recharge-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="pt-2 pb-2 d-none d-md-block astroway-breadcrumb" style="background-color: #6d4ec6;">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    <span style="text-transform: capitalize;">
                        <span class="text-white breadcrumbs" style="font-size: 14px;">
                            <a href="<?php echo e(route('front.home')); ?>" style="color:white;text-decoration:none; transition: color 0.3s ease;" onmouseover="this.style.color='#e5b86a'" onmouseout="this.style.color='white'">
                                <i class="fa fa-home font-18"></i>
                            </a>
                            <i class="fa fa-chevron-right mx-2"></i> 
                            <a href="<?php echo e(route('front.getMyWallet')); ?>" style="color:white;text-decoration:none; transition: color 0.3s ease;" onmouseover="this.style.color='#e5b86a'" onmouseout="this.style.color='white'">My Wallet</a>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="recharge-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="recharge-card">
                        <!-- Title Section -->
                        <h1 class="page-title">Add Money To Your Wallet</h1>
                        
                        <!-- Balance Display -->
                        <div class="balance-display">
                            <span>Available Balance: <strong style="color: #6d4ec6;"><?php echo e($currency['value']); ?><?php echo e(number_format($getProfile['data']['totalWalletAmount'], 2)); ?></strong></span>
                        </div>

                        <!-- Recharge Amount Grid -->
                        <div class="recharge-grid" id="plan-item">
                            <?php $__currentLoopData = $getRechargeAmount['recordList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $amount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="recharge-card-item add-plan" data-amount="<?php echo e($amount['amount']); ?>" data-cashback="<?php echo e($amount['cashback']); ?>" 
                                     style="<?php echo e($index == 0 ? 'border-color: #6d4ec6; border-width: 3px;' : ''); ?>">
                                    <div class="recharge-amount">
                                        <p class="recharge-amount-value"><?php echo e($currency['value']); ?><?php echo e(number_format($amount['amount'], 0)); ?></p>
                                    </div>
                                    <div class="recharge-badge">
                                        <?php echo e($amount['cashback']); ?>% Extra
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Box -->
                <div class="col-lg-4">
                    <div class="order-summary-box">
                        <!-- Pay Safely Badge -->
                        <div class="pay-safely-badge">
                            <i class="fas fa-lock"></i>
                            <span>PAY SAFELY</span>
                        </div>

                        <form id="prcdtopayform">
                            <h3 class="order-title">Your Order</h3>
                            
                            <div class="order-row">
                                <span class="order-label" id="planText">Plan Value</span>
                                <span class="order-value" id="total_plan_amount"><?php echo e($currency['value']); ?><?php echo e(number_format($selectedamount['amount'], 2)); ?></span>
                            </div>

                            <div class="order-row d-none" id="discount-div">
                                <span class="order-label">
                                    <span id="total_plan_discount_percent"></span>% Discount
                                </span>
                                <span class="order-value" id="total_plan_discount_amount"></span>
                            </div>

                            <div class="order-row" id="gst_details">
                                <span class="order-label">
                                    <span id="gstval"><?php echo e($gstvalue['value']); ?></span>% GST(+)
                                </span>
                                <span class="order-value" id="total_plan_gst_amount"><?php echo e($currency['value']); ?><?php echo e(number_format($selectedamount['amount'] * ($gstvalue['value'] / 100), 2)); ?></span>
                            </div>

                            <div class="order-row">
                                <span class="order-label order-total">Total</span>
                                <span class="order-value order-total total_plan_amount_with_gst"><?php echo e($currency['value']); ?><?php echo e(number_format($selectedamount['amount'] + $selectedamount['amount'] * ($gstvalue['value'] / 100), 2)); ?></span>
                            </div>

                            <!-- Cashback Info -->
                            <div class="cashback-info" id="total-cashback-amount">
                                <div class="cashback-icon">
                                    <i class="fas fa-gift"></i>
                                </div>
                                <div class="cashback-text">
                                    <div class="cashback-percent" id="total_plan_cashback_percent"><?php echo e($selectedamount['cashback']); ?>% Extra</div>
                                    <div class="cashback-amount" id="total_plan_cashback_amount"><?php echo e($currency['value']); ?><?php echo e(number_format(($selectedamount['amount'] * $selectedamount['cashback']) / 100, 2)); ?> cashback</div>
                                </div>
                            </div>

                            <input type="hidden" id="payamount" name="amount" value="<?php echo e(number_format($selectedamount['amount'] + $selectedamount['amount'] * ($gstvalue['value'] / 100), 2)); ?>">
                            <input type="hidden" id="paycashback" name="cashback_amount" value="<?php echo e(number_format(($selectedamount['amount'] * $selectedamount['cashback']) / 100, 2)); ?>">

                            <!-- Proceed Button -->
                            <button type="button" class="btn-proceed" id="proceedbtn">
                                Proceed To Pay <?php echo e($currency['value']); ?><?php echo e(number_format($selectedamount['amount'] + $selectedamount['amount'] * ($gstvalue['value'] / 100), 2)); ?>

                            </button>

                            <!-- Legal Text -->
                            <p class="legal-text">
                                By confirming this payment, you agree to our 
                                <a href="/privacy-policy/" target="_blank">Privacy Policy</a> 
                                and <a href="/terms-of-use/" target="_blank">Terms Of Use</a>.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Secure Payment Section -->
        <div class="secure-payment-section">
            <div class="container">
                <h2 class="secure-payment-title">100% SECURE & SAFE PAYMENT</h2>
                <div class="secure-payment-line"></div>
                <p class="secure-payment-desc">Your details are secure with 3rd party payment</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            var currencySymbol = "<?php echo e($currency['value']); ?>";
            var gstPercent = <?php echo e($gstvalue['value']); ?>;

            // Select first card by default
            $('.recharge-card-item').first().addClass('selected');

            function updateOrderValues(planAmount, gstPercent, currencySymbol, cashbackPercent, cashbackAmount) {
                var gstAmount = (parseFloat(planAmount) * parseFloat(gstPercent)) / 100;
                var totalAmount = parseFloat(planAmount) + gstAmount;
                var cashback = (parseFloat(planAmount) * parseFloat(cashbackPercent)) / 100;

                $('#total_plan_amount').text(currencySymbol + planAmount.toFixed(2));
                $('#total_plan_gst_amount').text(currencySymbol + gstAmount.toFixed(2));
                $('.total_plan_amount_with_gst').text(currencySymbol + totalAmount.toFixed(2));

                $('#total_plan_cashback_percent').text(cashbackPercent + "% Extra");
                $('#total_plan_cashback_amount').text(currencySymbol + cashbackAmount.toFixed(2) + " cashback");

                // Set values for hidden input fields
                $('#payamount').val(totalAmount.toFixed(2));
                $('#paycashback').val(cashbackAmount.toFixed(2));
                $('#proceedbtn').text('Proceed To Pay ' + currencySymbol + totalAmount.toFixed(2));
            }

            $('.recharge-card-item').click(function() {
                // Remove selected class from all cards
                $('.recharge-card-item').removeClass('selected');
                
                // Add selected class to clicked card
                $(this).addClass('selected');

                // Get amount and cashback from data attributes
                var planAmount = parseFloat($(this).data('amount'));
                var cashbackPercent = parseFloat($(this).data('cashback'));
                var cashbackAmount = (parseFloat(planAmount) * parseFloat(cashbackPercent)) / 100;

                updateOrderValues(planAmount, gstPercent, currencySymbol, cashbackPercent, cashbackAmount);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#proceedbtn').click(function(e) {
                e.preventDefault();

                <?php
                    use Symfony\Component\HttpFoundation\Session\Session;
                    $session = new Session();
                    $token = $session->get('token');

                ?>
                var formData = $('#prcdtopayform').serialize();
                // console.log(formData);
                // return false;

                $.ajax({
                    url: '<?php echo e(route('user.addpayment', ['token' => $token])); ?>',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        window.location.href = response.url;
                        // console.log(response);
                    },

                    error: function(xhr, status, error) {
                        toastr.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/pages/wallet-recharge.blade.php ENDPATH**/ ?>