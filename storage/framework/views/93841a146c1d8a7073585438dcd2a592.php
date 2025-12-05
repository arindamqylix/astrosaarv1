<style>
    .table-container {
        max-height: 500px;
        overflow-y: auto;
        border-radius: 8px;
    }

    .wallet-card {
        background-color: #ffffff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin: 20px 0;
    }

    .balance-section {
        background: linear-gradient(135deg, #f8f0dc 0%, #fff9f0 100%);
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 30px;
        border: 1px solid #f0e6d2;
    }

    .wallet-icon {
        width: 60px;
        height: 60px;
        background-color: #dc3545;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
    }

    .wallet-icon i {
        color: #fff;
        font-size: 28px;
    }

    .balance-amount {
        font-family: 'Playfair Display', serif;
        font-size: 36px;
        font-weight: 700;
        color: #2c1f0f;
        margin: 0;
        line-height: 1.2;
    }

    .balance-label {
        font-size: 14px;
        color: #666;
        margin-top: 5px;
        font-weight: 500;
    }

    .btn-add-money {
        background-color: #6d4ec6;
        color: #fff;
        border: none;
        border-radius: 10px;
        padding: 12px 30px;
        font-weight: 600;
        font-size: 15px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-add-money:hover {
        background-color: #5a3aa0;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
        text-decoration: none;
    }

    .wallet-tabs {
        border-bottom: 2px solid #e0e0e0;
        margin-bottom: 25px;
    }

    .wallet-tab {
        padding: 12px 24px;
        font-size: 15px;
        font-weight: 600;
        color: #666;
        text-decoration: none;
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
        display: inline-block;
        margin-right: 10px;
    }

    .wallet-tab:hover {
        color: #6d4ec6;
        text-decoration: none;
    }

    .wallet-tab.active {
        color: #6d4ec6;
        border-bottom-color: #6d4ec6;
    }

    .table-header {
        background-color: #6d4ec6;
        color: #fff;
    }

    .table-header th {
        padding: 15px;
        font-weight: 600;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border: none;
    }

    .table tbody tr {
        border-bottom: 1px solid #f0f0f0;
        transition: background-color 0.2s ease;
    }

    .table tbody tr:hover {
        background-color: #f8f8f8;
    }

    .table tbody td {
        padding: 15px;
        vertical-align: middle;
        color: #2c1f0f;
        font-size: 14px;
    }

    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: capitalize;
        display: inline-block;
    }

    .status-success {
        background-color: #d4edda;
        color: #155724;
    }

    .status-failed {
        background-color: #f8d7da;
        color: #721c24;
    }

    .transaction-type {
        font-weight: 600;
        color: #2c1f0f;
        margin-bottom: 5px;
    }

    .transaction-date {
        font-size: 12px;
        color: #999;
    }

    .amount-positive {
        color: #28a745;
        font-weight: 700;
        font-size: 16px;
    }

    .amount-negative {
        color: #dc3545;
        font-weight: 700;
        font-size: 16px;
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: #999;
    }

    .empty-state i {
        font-size: 64px;
        color: #ddd;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .wallet-card {
            padding: 20px;
        }

        .balance-amount {
            font-size: 28px;
        }

        .table-container {
            overflow-x: auto;
        }

        .table {
            font-size: 12px;
        }

        .table-header th,
        .table tbody td {
            padding: 10px 8px;
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
                            <span class="breadcrumbtext">My Wallet</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>





    <div class="container" style="background-color: #fff9f0; padding: 30px 15px; min-height: 70vh;">
        <div class="row">
            <div class="col-sm-12">
                <div class="wallet-card">
                    <!-- Header Section -->
                    <div class="text-left mb-4">
                        <h1 class="h2 font-weight-bold" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 32px; margin-bottom: 8px;">My Wallet</h1>
                        <p style="color: #666; font-size: 15px; margin: 0;">Check your balance, add money and see your complete transaction history here.</p>
                    </div>

                    <!-- Balance Section -->
                    <div class="balance-section">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="d-flex align-items-center">
                                <div class="wallet-icon">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div>
                                    <h3 class="balance-amount" id="wallbalance">
                                        <?php echo e($currency['value']); ?><?php echo e(number_format($getProfile['data']['totalWalletAmount'], 2)); ?>

                                    </h3>
                                    <span class="balance-label">Current Balance</span>
                                </div>
                            </div>
                            <div class="mt-3 mt-md-0">
                                <button class="btn btn-chat chatbrown" id="walletPlanLoader" type="button"
                                    style="display:none;" disabled="">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading..
                                </button>
                                <a href="<?php echo e(route('front.walletRecharge')); ?>" class="btn-add-money" id="btnAddMoney">
                                    Add Money
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tabs Section -->
                    <div class="wallet-tabs">
                        <a data-toggle="tab" id="paymentLog" href="#paymentLogsTable"
                            class="wallet-tab active">
                            Payment Logs
                        </a>
                        <a data-toggle="tab" id="walletTransaction" href="#walletTransactionTable"
                            class="wallet-tab">
                            Wallet Transaction
                        </a>
                    </div>



                    <!-- Tab Content -->
                    <div class="tab-content mt-3">
                        <div class="table-responsive tab-pane fade show active" id="paymentLogsTable">
                            <h3 class="font-weight-bold mb-4" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 24px;">Payment Logs</h3>
                            
                            <div class="table-container">
                                <table class="table table-hover">
                                    <thead class="table-header">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Payment Mode</th>
                                            <th>Amount</th>
                                            <th>Cashback Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($getUserById['recordList'][0]['paymentLogs']['payment']) && count($getUserById['recordList'][0]['paymentLogs']['payment']) > 0): ?>
                                            <?php $__currentLoopData = $getUserById['recordList'][0]['paymentLogs']['payment']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $walletdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(!empty($walletdata)): ?>
                                                    <tr>
                                                        <td><strong><?php echo e($walletdata['orderId'] ?? 'N/A'); ?></strong></td>
                                                        <td><?php echo e($walletdata['paymentMode'] ?? 'N/A'); ?></td>
                                                        <td><strong><?php echo e($currency['value']); ?><?php echo e(number_format($walletdata['amount'] ?? 0, 2)); ?></strong></td>
                                                        <td><?php echo e($currency['value']); ?><?php echo e(number_format($walletdata['cashback_amount'] ?? 0, 2)); ?></td>
                                                        <td>
                                                            <?php if(isset($walletdata['paymentStatus']) && $walletdata['paymentStatus'] == 'success'): ?>
                                                                <span class="status-badge status-success">Success</span>
                                                            <?php else: ?>
                                                                <span class="status-badge status-failed"><?php echo e($walletdata['paymentStatus'] ?? 'Failed'); ?></span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e(isset($walletdata['created_at']) ? date('d M Y, h:i A', strtotime($walletdata['created_at'])) : 'N/A'); ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="6" class="empty-state">
                                                    <i class="fas fa-receipt"></i>
                                                    <p style="margin: 10px 0; font-size: 16px;">No payment logs found</p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="table-responsive tab-pane fade" id="walletTransactionTable">
                            <h3 class="font-weight-bold mb-4" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 24px;">Transaction History</h3>
                            
                            <div class="table-container">
                                <table class="table table-hover">
                                    <thead class="table-header">
                                        <tr>
                                            <th>Transaction Details</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($getUserById['recordList'][0]['walletTransaction']['wallet']) && count($getUserById['recordList'][0]['walletTransaction']['wallet']) > 0): ?>
                                            <?php $__currentLoopData = $getUserById['recordList'][0]['walletTransaction']['wallet']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $walletdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(!empty($walletdata)): ?>
                                                    <tr>
                                                        <td>
                                                            <div class="transaction-type">
                                                                <?php if($walletdata['transactionType'] == 'Call' || $walletdata['transactionType'] == 'Chat'): ?>
                                                                    <?php echo e($walletdata['transactionType']); ?> with <?php echo e($walletdata['name'] ?? 'Astrologer'); ?> for <?php echo e($walletdata['totalMin'] ?? 0); ?> minutes
                                                                <?php elseif($walletdata['transactionType'] == 'astromallOrder' && isset($walletdata['isCredit']) && $walletdata['isCredit']==0): ?>
                                                                    Product Ordered
                                                                <?php elseif($walletdata['transactionType'] == 'astromallOrder' && isset($walletdata['isCredit']) && $walletdata['isCredit']==1): ?>
                                                                    Product Cancelled
                                                                <?php elseif($walletdata['transactionType'] == 'Gift'): ?>
                                                                    Sent <?php echo e($walletdata['transactionType']); ?> to <?php echo e($walletdata['name'] ?? 'Astrologer'); ?>

                                                                <?php else: ?>
                                                                    <?php echo e($walletdata['transactionType']); ?> Received
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="transaction-date">
                                                                <?php echo e(isset($walletdata['created_at']) ? date('j F Y, h:i A', strtotime($walletdata['created_at'])) : 'N/A'); ?>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php if($walletdata['transactionType'] == 'Cashback' || ($walletdata['transactionType'] == 'astromallOrder' && isset($walletdata['isCredit']) && $walletdata['isCredit']==1)): ?>
                                                                <div class="amount-positive">+<?php echo e($currency['value']); ?><?php echo e(number_format($walletdata['amount'] ?? 0, 2)); ?></div>
                                                            <?php else: ?>
                                                                <div class="amount-negative">-<?php echo e($currency['value']); ?><?php echo e(number_format($walletdata['amount'] ?? 0, 2)); ?></div>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="2" class="empty-state">
                                                    <i class="fas fa-exchange-alt"></i>
                                                    <p style="margin: 10px 0; font-size: 16px;">No transactions found</p>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function(){
        // Tab switching functionality
        $("#paymentLog").on('click', function(){
            $('#paymentLog').addClass("active");
            $('#walletTransaction').removeClass("active");
        });

        $("#walletTransaction").on('click', function(){
            $('#walletTransaction').addClass("active");
            $('#paymentLog').removeClass("active");
        });

        // Initialize active tab on page load
        var hash = window.location.hash;
        if (hash === '#walletTransactionTable') {
            $('#walletTransaction').addClass("active");
            $('#paymentLog').removeClass("active");
        } else {
            $('#paymentLog').addClass("active");
            $('#walletTransaction').removeClass("active");
        }
    });
</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/pages/my-wallet.blade.php ENDPATH**/ ?>