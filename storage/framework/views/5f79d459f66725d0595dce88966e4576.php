<style>
    /* Wallet Page Styles */
    .wallet-page {
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

    /* Wallet Card */
    .wallet-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
    }

    .balance-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 25px;
    }

    .balance-item {
        text-align: center;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 12px;
        border: 2px solid #e0e0e0;
        transition: all 0.3s ease;
    }

    .balance-item:hover {
        border-color: #6d4ec6;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.15);
    }

    .balance-item .balance-icon {
        width: 50px;
        height: 50px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        border-radius: 50%;
        color: white;
        font-size: 24px;
    }

    .balance-item .balance-amount {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .balance-item .balance-label {
        font-size: 14px;
        color: #666;
        font-weight: 500;
    }

    .balance-item.current .balance-amount {
        color: #ee4e5e;
    }

    .balance-item.earning .balance-amount {
        color: #17a2b8;
    }

    .balance-item.withdrawal .balance-amount {
        color: #28a745;
    }

    .balance-item.pending .balance-amount {
        color: #ffc107;
    }

    .wallet-actions {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-wallet {
        padding: 12px 30px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-withdraw {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(109, 78, 198, 0.3);
    }

    .btn-withdraw:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(109, 78, 198, 0.4);
        color: white;
        text-decoration: none;
    }

    .btn-add-money {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
    }

    .btn-add-money:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
        color: white;
        text-decoration: none;
    }

    /* Tabs */
    .wallet-tabs {
        background: #fff;
        border-radius: 12px;
        padding: 0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        margin-bottom: 25px;
        display: flex;
        overflow-x: auto;
    }

    .wallet-tabs a {
        padding: 15px 25px;
        text-decoration: none;
        color: #666;
        font-weight: 500;
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
        white-space: nowrap;
        flex: 1;
        text-align: center;
    }

    .wallet-tabs a:hover {
        color: #6d4ec6;
        background: #f8f9fa;
    }

    .wallet-tabs a.active {
        color: #6d4ec6;
        border-bottom-color: #6d4ec6;
        font-weight: 600;
    }

    /* Tables */
    .table-container {
        max-height: 500px;
        overflow-y: auto;
        border-radius: 12px;
    }

    .table-container::-webkit-scrollbar {
        width: 8px;
    }

    .table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .table-container::-webkit-scrollbar-thumb {
        background: #6d4ec6;
        border-radius: 10px;
    }

    .table-container::-webkit-scrollbar-thumb:hover {
        background: #5a3fa8;
    }

    .table-modern {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background: #fff;
    }

    .table-modern thead {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        position: sticky;
        top: 0;
        z-index: 10;
    }

    .table-modern thead th {
        padding: 15px;
        font-weight: 600;
        text-align: left;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .table-modern tbody tr {
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .table-modern tbody tr:hover {
        background: #f8f9fa;
        transform: scale(1.01);
    }

    .table-modern tbody td {
        padding: 15px;
        color: #333;
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
        background: #d4edda;
        color: #155724;
    }

    .status-danger {
        background: #f8d7da;
        color: #721c24;
    }

    .status-warning {
        background: #fff3cd;
        color: #856404;
    }

    .status-pending {
        background: #fff3cd;
        color: #856404;
    }

    .btn-edit {
        padding: 6px 15px;
        background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(255, 193, 7, 0.3);
        color: white;
        text-decoration: none;
    }

    /* Modal Styles */
    .modal-content {
        border-radius: 16px;
        border: none;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        border-radius: 16px 16px 0 0;
        padding: 20px 25px;
        border: none;
    }

    .modal-header .modal-title {
        font-size: 20px;
        font-weight: 600;
        margin: 0;
    }

    .modal-header .close {
        color: white;
        opacity: 0.9;
        font-size: 28px;
        font-weight: 300;
    }

    .modal-header .close:hover {
        opacity: 1;
    }

    .modal-body {
        padding: 25px;
    }

    .form-group-modern {
        margin-bottom: 20px;
    }

    .form-group-modern label {
        display: block;
        font-size: 14px;
        color: #333;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .form-control-modern {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 15px;
        color: #333;
        transition: all 0.3s ease;
    }

    .form-control-modern:focus {
        border-color: #6d4ec6;
        box-shadow: 0 0 0 3px rgba(109, 78, 198, 0.1);
        outline: none;
    }

    .required {
        color: #ee4e5e;
        margin-left: 4px;
    }

    .radio-group {
        display: flex;
        gap: 20px;
        margin-top: 10px;
        flex-wrap: wrap;
    }

    .radio-option {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .radio-option input[type="radio"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: #6d4ec6;
    }

    .radio-option label {
        margin: 0;
        cursor: pointer;
        font-weight: 500;
        color: #333;
    }

    .btn-submit {
        padding: 12px 30px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        width: 100%;
        box-shadow: 0 4px 15px rgba(109, 78, 198, 0.3);
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(109, 78, 198, 0.4);
    }

    .btn-submit:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    /* Image Placeholder */
    .image-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(45deg, #6d4ec6, #8b6fd8);
        color: white;
        font-weight: bold;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        font-size: 20px;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: #999;
    }

    .empty-state i {
        font-size: 64px;
        margin-bottom: 20px;
        color: #ddd;
    }

    .empty-state h3 {
        font-size: 20px;
        margin-bottom: 10px;
        color: #666;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header-section {
            padding: 30px 15px;
        }

        .page-header-section h1 {
            font-size: 24px;
        }

        .balance-section {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .wallet-actions {
            flex-direction: column;
        }

        .btn-wallet {
            width: 100%;
            justify-content: center;
        }

        .wallet-tabs {
            flex-direction: column;
        }

        .wallet-tabs a {
            border-bottom: 1px solid #e0e0e0;
            border-right: none;
        }

        .wallet-tabs a.active {
            border-bottom-color: #6d4ec6;
            border-left: 3px solid #6d4ec6;
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="wallet-page">
        <div class="breadcrumb-section d-none d-md-block">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo e(route('front.astrologerindex')); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                    <i class="fa fa-chevron-right"></i>
                    <a href="<?php echo e(route('front.getAstrologerWallet')); ?>">My Wallet</a>
                </div>
            </div>
        </div>

        <div class="page-header-section">
            <div class="container">
                <h1>My Wallet</h1>
                <p>Check your balance, add money and see your complete transaction history here</p>
            </div>
        </div>

        <!-- Withdraw Modal -->
        <div class="modal fade" id="withdraw" tabindex="-1" role="dialog" aria-labelledby="withdrawModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fas fa-money-bill-wave mr-2"></i> Withdrawal Form
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="withdrawForm">
                            <input type="hidden" name="astrologerId" value="<?php echo e(astroauthcheck()['astrologerId']); ?>">
                            
                            <div class="form-group-modern">
                                <label for="Amount">Amount<span class="required">*</span></label>
                                <input class="form-control-modern" id="Amount" name="withdrawAmount" placeholder="Enter Amount" type="text" required>
                            </div>

                            <div class="form-group-modern">
                                <label for="Method">Payment Method<span class="required">*</span></label>
                                <div class="radio-group">
                                    <?php $__currentLoopData = $withdrawMethod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="radio-option">
                                            <input type="radio" name="paymentMethod" value="<?php echo e($method->method_id); ?>" id="method_<?php echo e($method->id); ?>" class="method-radio" data-method-id="<?php echo e($method->method_id); ?>" required>
                                            <label for="method_<?php echo e($method->id); ?>"><?php echo e($method->method_name); ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                            <div id="bankDetails" class="form-group-modern" style="display: none;">
                                <div class="form-group-modern">
                                    <label for="AccountNumber">Account Number<span class="required">*</span></label>
                                    <input class="form-control-modern" id="AccountNumber" name="accountNumber" placeholder="Enter Account Number" type="text">
                                </div>
                                <div class="form-group-modern">
                                    <label for="IFSCCode">IFSC Code<span class="required">*</span></label>
                                    <input class="form-control-modern" id="IFSCCode" name="ifscCode" placeholder="Enter IFSC Code" type="text">
                                </div>
                                <div class="form-group-modern">
                                    <label for="HolderName">Holder Name<span class="required">*</span></label>
                                    <input class="form-control-modern" id="HolderName" name="accountHolderName" placeholder="Enter Holder Name" type="text">
                                </div>
                            </div>

                            <div id="upiDetails" class="form-group-modern" style="display: none;">
                                <div class="form-group-modern">
                                    <label for="UPIId">UPI Id<span class="required">*</span></label>
                                    <input class="form-control-modern" id="UPIId" name="upiId" placeholder="Enter UPI Id" type="text">
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn-submit" id="withdrawalloader" type="button" style="display:none;" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...
                                </button>
                                <button type="submit" class="btn-submit" id="withdrawalbtn">
                                    <i class="fas fa-paper-plane mr-2"></i> Send Withdraw Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Withdraw Modal -->
        <div class="modal fade" id="editwithdraw" tabindex="-1" role="dialog" aria-labelledby="editWithdrawModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fas fa-edit mr-2"></i> Edit Withdrawal Form
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="editwithdrawForm">
                            <input type="hidden" name="astrologerId" value="<?php echo e(astroauthcheck()['astrologerId']); ?>">
                            <input type="hidden" name="id" id="editWithdrawId" value="">
                            
                            <div class="form-group-modern">
                                <label for="editAmount">Amount<span class="required">*</span></label>
                                <input class="form-control-modern" id="editAmount" name="withdrawAmount" placeholder="Enter Amount" type="text" required>
                            </div>

                            <div class="form-group-modern">
                                <label for="editMethod">Payment Method<span class="required">*</span></label>
                                <div class="radio-group">
                                    <?php $__currentLoopData = $withdrawMethod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="radio-option">
                                            <input type="radio" name="paymentMethod" value="<?php echo e($method->method_id); ?>" id="edit_method_<?php echo e($method->id); ?>" class="method-radio" data-method-id="<?php echo e($method->method_id); ?>" required>
                                            <label for="edit_method_<?php echo e($method->id); ?>"><?php echo e($method->method_name); ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                            <div id="editBankDetails" class="form-group-modern" style="display: none;">
                                <div class="form-group-modern">
                                    <label for="editAccountNumber">Account Number<span class="required">*</span></label>
                                    <input class="form-control-modern" id="editAccountNumber" name="accountNumber" placeholder="Enter Account Number" type="text">
                                </div>
                                <div class="form-group-modern">
                                    <label for="editIFSCCode">IFSC Code<span class="required">*</span></label>
                                    <input class="form-control-modern" id="editIFSCCode" name="ifscCode" placeholder="Enter IFSC Code" type="text">
                                </div>
                                <div class="form-group-modern">
                                    <label for="editHolderName">Holder Name<span class="required">*</span></label>
                                    <input class="form-control-modern" id="editHolderName" name="accountHolderName" placeholder="Enter Holder Name" type="text">
                                </div>
                            </div>

                            <div id="editUpiDetails" class="form-group-modern" style="display: none;">
                                <div class="form-group-modern">
                                    <label for="editUPIId">UPI Id<span class="required">*</span></label>
                                    <input class="form-control-modern" id="editUPIId" name="upiId" placeholder="Enter UPI Id" type="text">
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn-submit" id="editwithdrawalloader" type="button" style="display:none;" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...
                                </button>
                                <button type="submit" class="btn-submit" id="editwithdrawalbtn">
                                    <i class="fas fa-save mr-2"></i> Update Withdraw Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="wallet-card">
                <div class="balance-section">
                    <div class="balance-item current">
                        <div class="balance-icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="balance-amount"><?php echo e($currency['value']); ?><?php echo e(number_format($getProfile['data']['totalWalletAmount'], 2)); ?></div>
                        <div class="balance-label">Current Balance</div>
                    </div>
                    <div class="balance-item earning">
                        <div class="balance-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="balance-amount"><?php echo e($currency['value']); ?><?php echo e(number_format($withdrawlrequest['recordList']['totalEarning'], 2)); ?></div>
                        <div class="balance-label">Total Earning</div>
                    </div>
                    <div class="balance-item withdrawal">
                        <div class="balance-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="balance-amount"><?php echo e($currency['value']); ?><?php echo e(number_format($withdrawlrequest['recordList']['withdrawAmount'], 2)); ?></div>
                        <div class="balance-label">Total Withdrawal</div>
                    </div>
                    <div class="balance-item pending">
                        <div class="balance-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="balance-amount"><?php echo e($currency['value']); ?><?php echo e(number_format($withdrawlrequest['recordList']['totalPending'], 2)); ?></div>
                        <div class="balance-label">Total Pending</div>
                    </div>
                </div>
                <div class="wallet-actions">
                    <a class="btn-wallet btn-withdraw" data-toggle="modal" data-target="#withdraw" id="btnWithdrawMoney">
                        <i class="fas fa-money-bill-wave"></i> Withdraw Money
                    </a>
                    <a href="<?php echo e(route('front.AstrologerWalletRecharge')); ?>" class="btn-wallet btn-add-money" id="btnAddMoney">
                        <i class="fas fa-plus-circle"></i> Add Money
                    </a>
                </div>
            </div>

            <div class="wallet-tabs">
                <a href="#paymentLogsTable" id="paymentLog" class="active" data-tab="paymentLogsTable">
                    <i class="fas fa-receipt mr-2"></i> Payment Logs
                </a>
                <a href="#walletTransactionTable" id="walletTransaction" data-tab="walletTransactionTable">
                    <i class="fas fa-exchange-alt mr-2"></i> Wallet Transaction
                </a>
                <a href="#withdrawTransactionTable" id="withdrawTransaction" data-tab="withdrawTransactionTable">
                    <i class="fas fa-history mr-2"></i> Withdraw Request
                </a>
            </div>



            <div class="tab-content">
                <div class="tab-pane fade show active" id="paymentLogsTable">
                    <div class="wallet-card">
                        <h3 class="mb-4" style="color: #6d4ec6; font-weight: 600;">
                            <i class="fas fa-receipt mr-2"></i> Payment Logs
                        </h3>
                        <div class="table-container">
                            <table class="table-modern">
                                <thead>
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
                                    <?php $__empty_1 = true; $__currentLoopData = $getAstrologer['recordList'][0]['payment']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $walletdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if(!empty($walletdata)): ?>
                                            <tr>
                                                <td><?php echo e($walletdata['orderId']); ?></td>
                                                <td><?php echo e($walletdata['paymentMode']); ?></td>
                                                <td><strong><?php echo e($currency['value']); ?><?php echo e(number_format($walletdata['amount'], 2)); ?></strong></td>
                                                <td><?php echo e($currency['value']); ?><?php echo e(number_format($walletdata['cashback_amount'], 2)); ?></td>
                                                <td>
                                                    <?php if($walletdata['paymentStatus'] == 'success'): ?>
                                                        <span class="status-badge status-success"><?php echo e($walletdata['paymentStatus']); ?></span>
                                                    <?php else: ?>
                                                        <span class="status-badge status-danger"><?php echo e($walletdata['paymentStatus']); ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e(date('d M Y, h:i A', strtotime($walletdata['created_at']))); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <div class="empty-state">
                                                    <i class="fas fa-inbox"></i>
                                                    <h3>No Payment Logs</h3>
                                                    <p>You haven't made any payments yet.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="walletTransactionTable">
                    <div class="wallet-card">
                        <h3 class="mb-4" style="color: #6d4ec6; font-weight: 600;">
                            <i class="fas fa-exchange-alt mr-2"></i> Transaction History
                        </h3>
                        <div class="table-container">
                            <table class="table-modern">
                                <thead>
                                    <tr>
                                        <th>Transaction Details</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $getAstrologer['recordList'][0]['wallet']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $walletdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if(!empty($walletdata)): ?>
                                            <tr>
                                                <td>
                                                    <div style="font-weight: 600; color: #333; margin-bottom: 5px;">
                                                        <?php if($walletdata['transactionType'] == 'Call' || $walletdata['transactionType'] == 'Chat'): ?>
                                                            <i class="fas fa-phone-alt mr-2" style="color: #6d4ec6;"></i>
                                                            <?php echo e($walletdata['transactionType']); ?> with <?php echo e($walletdata['name']); ?> for <?php echo e($walletdata['totalMin']); ?> minutes
                                                        <?php elseif($walletdata['transactionType'] == 'astromallOrder' && $walletdata['isCredit']==0): ?>
                                                            <i class="fas fa-shopping-bag mr-2" style="color: #6d4ec6;"></i>
                                                            Product Ordered
                                                        <?php elseif($walletdata['transactionType'] == 'astromallOrder' && $walletdata['isCredit']==1): ?>
                                                            <i class="fas fa-times-circle mr-2" style="color: #ee4e5e;"></i>
                                                            Product Cancelled
                                                        <?php elseif($walletdata['transactionType'] == 'Gift'): ?>
                                                            <i class="fas fa-gift mr-2" style="color: #6d4ec6;"></i>
                                                            Received <?php echo e($walletdata['transactionType']); ?> From <?php echo e($walletdata['name']); ?>

                                                        <?php else: ?>
                                                            <i class="fas fa-coins mr-2" style="color: #6d4ec6;"></i>
                                                            <?php echo e($walletdata['transactionType']); ?> Received
                                                        <?php endif; ?>
                                                    </div>
                                                    <div style="font-size: 12px; color: #999;">
                                                        <i class="fas fa-calendar-alt mr-1"></i>
                                                        <?php echo e(date('d M Y, h:i A', strtotime($walletdata['created_at']))); ?>

                                                    </div>
                                                </td>
                                                <td>
                                                    <?php if($walletdata['transactionType'] == 'Cashback' || ($walletdata['transactionType'] == 'astromallOrder' && $walletdata['isCredit']==1) || $walletdata['transactionType'] != 'KundliView'): ?>
                                                        <div style="color: #28a745; font-weight: 600; font-size: 16px;">
                                                            +<?php echo e($currency['value']); ?><?php echo e(number_format($walletdata['amount'], 2)); ?>

                                                        </div>
                                                    <?php elseif($walletdata['transactionType'] == 'KundliView'): ?>
                                                        <div style="color: #ee4e5e; font-weight: 600; font-size: 16px;">
                                                            -<?php echo e($currency['value']); ?><?php echo e(number_format($walletdata['amount'], 2)); ?>

                                                        </div>
                                                    <?php else: ?>
                                                        <div style="color: #28a745; font-weight: 600; font-size: 16px;">
                                                            +<?php echo e($currency['value']); ?><?php echo e(number_format($walletdata['amount'], 2)); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="2" class="text-center">
                                                <div class="empty-state">
                                                    <i class="fas fa-inbox"></i>
                                                    <h3>No Transactions</h3>
                                                    <p>You haven't made any transactions yet.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="withdrawTransactionTable">
                    <div class="wallet-card">
                        <h3 class="mb-4" style="color: #6d4ec6; font-weight: 600;">
                            <i class="fas fa-history mr-2"></i> Withdrawal History
                        </h3>
                        <div class="table-container">
                            <table class="table-modern">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $withdrawlrequest['recordList']['withdrawl']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if(!empty($withdrawl)): ?>
                                            <tr>
                                                <td>
                                                    <strong style="font-size: 16px; color: #333;">
                                                        <?php echo e($currency['value']); ?><?php echo e(number_format($withdrawl['withdrawAmount'], 2)); ?>

                                                    </strong>
                                                </td>
                                                <td><?php echo e(date('d M Y, h:i A', strtotime($withdrawl['created_at']))); ?></td>
                                                <td>
                                                    <?php if($withdrawl['status'] == 'Pending'): ?>
                                                        <span class="status-badge status-warning"><?php echo e($withdrawl['status']); ?></span>
                                                    <?php else: ?>
                                                        <span class="status-badge status-success"><?php echo e($withdrawl['status']); ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php if($withdrawl['status'] == 'Pending'): ?>
                                                        <a data-toggle="modal" data-target="#editwithdraw" class="btn-edit editwithdraw" data-field='<?php echo json_encode($withdrawl, 15, 512) ?>'>
                                                            <i class="fas fa-edit mr-1"></i> Edit
                                                        </a>
                                                    <?php else: ?>
                                                        <span style="color: #999;">-</span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                <div class="empty-state">
                                                    <i class="fas fa-inbox"></i>
                                                    <h3>No Withdrawal Requests</h3>
                                                    <p>You haven't made any withdrawal requests yet.</p>
                                                </div>
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

<?php $__env->stopSection(); ?>

    <?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function(){
            // Tab switching
            $('.wallet-tabs a').on('click', function(e) {
                e.preventDefault();
                
                var tabId = $(this).data('tab');
                var targetPane = $(this).attr('href');
                
                // Remove active class from all tabs and panes
                $('.wallet-tabs a').removeClass('active');
                $('.tab-pane').removeClass('show active');
                
                // Add active class to clicked tab and corresponding pane
                $(this).addClass('active');
                $(targetPane).addClass('show active');
            });

            // Payment method selection for withdraw modal
            $('#withdraw input[name="paymentMethod"]').change(function() {
                var methodId = $(this).data('method-id');
                $('#withdraw #bankDetails').hide();
                $('#withdraw #upiDetails').hide();

                if (methodId == '1') {
                    $('#withdraw #bankDetails').show();
                } else if (methodId == '2') {
                    $('#withdraw #upiDetails').show();
                }
            });

            // Payment method selection for edit withdraw modal
            $('#editwithdraw input[name="paymentMethod"]').change(function() {
                var methodId = $(this).data('method-id');
                $('#editwithdraw #editBankDetails').hide();
                $('#editwithdraw #editUpiDetails').hide();

                if (methodId == '1') {
                    $('#editwithdraw #editBankDetails').show();
                } else if (methodId == '2') {
                    $('#editwithdraw #editUpiDetails').show();
                }
            });
        });
    </script>

<script>
    $(document).ready(function() {
        $('#withdrawalbtn').click(function(e) {
            e.preventDefault();
            $('#withdrawalbtn').hide();
                $('#withdrawalloader').show();
                setTimeout(function() {
                    $('#withdrawalbtn').show();
                    $('#withdrawalloader').hide();
                }, 3000);

            <?php
                use Symfony\Component\HttpFoundation\Session\Session;
                use Illuminate\Support\Facades\DB;

                $session = new Session();
                $token = $session->get('astrotoken');

            ?>

            var formData = $('#withdrawForm').serialize();

            $.ajax({
                url: '<?php echo e(route('api.sendWithdrawRequest', ['token' => $token])); ?>',
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Withdrawal Request Sent Successfully')
                    window.location.reload();
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
        $(document).on('click','.editwithdraw',function(e){
            var fields = $(this).data('field');
            $('#editwithdraw #editAmount').val(fields.withdrawAmount);
            $('#editwithdraw #editWithdrawId').val(fields.id);
            $('#editwithdraw [name="astrologerId"]').val(fields.astrologerId);
            
            // Set payment method
            $('#editwithdraw [name="paymentMethod"][value="'+fields.paymentMethod+'"]').prop('checked', true).trigger('change');
            
            // Set bank details if method is bank
            if (fields.paymentMethod == '1') {
                $('#editwithdraw #editAccountNumber').val(fields.accountNumber);
                $('#editwithdraw #editIFSCCode').val(fields.ifscCode);
                $('#editwithdraw #editHolderName').val(fields.accountHolderName);
            } else if (fields.paymentMethod == '2') {
                $('#editwithdraw #editUPIId').val(fields.upiId);
            }
        });
    </script>
<script>
    $(document).ready(function() {
        $('#editwithdrawalbtn').click(function(e) {
            e.preventDefault();
            $('#editwithdrawalbtn').hide();
                $('#editwithdrawalloader').show();
                setTimeout(function() {
                    $('#editwithdrawalbtn').show();
                    $('#editwithdrawalloader').hide();
                }, 3000);

            <?php
                $session = new Session();
                $token = $session->get('astrotoken');

            ?>

            var formData = $('#editwithdrawForm').serialize();
            // console.log(formData);return false;

            $.ajax({
                url: '<?php echo e(route('api.updateWithdrawRequest', ['token' => $token])); ?>',
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success('Withdrawal Request Updated Successfully')
                    window.location.reload();
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

<?php echo $__env->make('frontend.astrologers.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/astrologers/pages/astrologer-wallet.blade.php ENDPATH**/ ?>