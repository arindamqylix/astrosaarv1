<style>
    .table-container {
        max-height: 500px;
        overflow-y: auto;
        border-radius: 8px;
    }

    .reports-card {
        background-color: #ffffff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin: 20px 0;
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

    .table-header th:first-child {
        text-align: left;
    }

    .table-header th:nth-child(2) {
        text-align: center;
    }

    .table-header th:last-child {
        text-align: right;
    }

    .table tbody tr {
        border-bottom: 1px solid #f0f0f0;
        transition: background-color 0.2s ease;
    }

    .table tbody tr:hover {
        background-color: #f8f8f8;
    }

    .table tbody td {
        padding: 20px 15px;
        vertical-align: middle;
        color: #2c1f0f;
        font-size: 14px;
    }

    .report-details {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .report-title {
        font-weight: 600;
        color: #2c1f0f;
        margin: 0;
        font-size: 15px;
        line-height: 1.4;
    }

    .report-date {
        font-size: 12px;
        color: #999;
    }

    .report-status {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .status-completed {
        background-color: #d4edda;
        color: #155724;
    }

    .deduction-amount {
        color: #dc3545;
        font-weight: 700;
        font-size: 16px;
        text-align: center;
    }

    .btn-view-report {
        background-color: #6d4ec6;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 8px 20px;
        font-weight: 600;
        font-size: 13px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-view-report:hover {
        background-color: #5a3aa0;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
        text-decoration: none;
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
        .reports-card {
            padding: 20px;
        }

        .table-container {
            overflow-x: auto;
        }

        .table {
            font-size: 12px;
        }

        .table-header th,
        .table tbody td {
            padding: 12px 8px;
        }

        .report-title {
            font-size: 13px;
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
                            <span class="breadcrumbtext">My Reports</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="background-color: #fff9f0; padding: 30px 15px; min-height: 70vh;">
        <div class="row">
            <div class="col-sm-12">
                <div class="reports-card">
                    <!-- Header Section -->
                    <div class="text-left mb-4">
                        <h1 class="h2 font-weight-bold" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 32px; margin-bottom: 8px;">My Reports</h1>
                        <p style="color: #666; font-size: 15px; margin: 0;">Check your complete report history here.</p>
                    </div>





                    <!-- Report History Section -->
                    <div class="mt-4">
                        <h3 class="font-weight-bold mb-4" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 24px; text-align: center;">Report History</h3>
                        
                        <div class="table-container">
                            <table class="table table-hover">
                                <thead class="table-header">
                                    <tr>
                                        <th>Transaction Details</th>
                                        <th>Deduction</th>
                                        <th>View Report</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($getUserById['recordList'][0]['reportRequest']['reportHistory']) && count($getUserById['recordList'][0]['reportRequest']['reportHistory']) > 0): ?>
                                        <?php $__currentLoopData = $getUserById['recordList'][0]['reportRequest']['reportHistory']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reportdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($reportdata)): ?>
                                                <tr>
                                                    <td>
                                                        <div class="report-details">
                                                            <h5 class="report-title">
                                                                Asked For Report to <?php echo e($reportdata['astrologerName'] ?? 'Astrologer'); ?>

                                                            </h5>
                                                            <div class="report-date">
                                                                <?php echo e(isset($reportdata['created_at']) ? date('j F Y, h:i A', strtotime($reportdata['created_at'])) : 'N/A'); ?>

                                                            </div>
                                                            <div>
                                                                <span class="report-status status-completed">Completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="deduction-amount">
                                                        -<?php echo e($currency['value']); ?><?php echo e(number_format($reportdata['reportRate'] ?? 0, 2)); ?>

                                                    </td>
                                                    <td style="text-align: right;">
                                                        <?php if(isset($reportdata['reportFile']) && !empty($reportdata['reportFile'])): ?>
                                                            <a href="/<?php echo e($reportdata['reportFile']); ?>" class="btn-view-report" target="_blank">
                                                                View Report
                                                            </a>
                                                        <?php else: ?>
                                                            <span style="color: #999;">-</span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="3" class="empty-state">
                                                <i class="fas fa-file-alt"></i>
                                                <p style="margin: 10px 0; font-size: 16px;">No report history found</p>
                                                <p style="margin: 5px 0; font-size: 14px; color: #999;">Request a report from an astrologer to see your history here.</p>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/pages/my-report.blade.php ENDPATH**/ ?>