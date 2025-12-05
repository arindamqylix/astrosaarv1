
<style>
    /* Chats Page Styles */
    .chats-page {
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

    /* Chats Card */
    .chats-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
    }

    .chats-card-header {
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .chats-card-header h3 {
        font-size: 24px;
        font-weight: 600;
        color: #6d4ec6;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Table Styles */
    .table-container {
        max-height: 600px;
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
        padding: 20px 15px;
        color: #333;
        font-size: 14px;
        vertical-align: middle;
    }

    .chat-details {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .chat-title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .chat-title i {
        color: #6d4ec6;
        font-size: 18px;
    }

    .chat-date {
        font-size: 13px;
        color: #999;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .chat-status {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
        background: #d4edda;
        color: #155724;
    }

    .chat-rate {
        font-size: 18px;
        font-weight: 700;
        color: #28a745;
        text-align: right;
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

    .empty-state p {
        font-size: 14px;
        color: #999;
        margin: 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header-section {
            padding: 30px 15px;
        }

        .page-header-section h1 {
            font-size: 24px;
        }

        .chats-card {
            padding: 20px;
        }

        .table-modern thead th,
        .table-modern tbody td {
            padding: 12px 10px;
            font-size: 13px;
        }

        .chat-title {
            font-size: 14px;
        }

        .chat-rate {
            font-size: 16px;
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="chats-page">
        <div class="breadcrumb-section d-none d-md-block">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo e(route('front.astrologerindex')); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                    <i class="fa fa-chevron-right"></i>
                    <a href="<?php echo e(route('front.getAstrologerChat')); ?>">My Chats</a>
                </div>
            </div>
        </div>

        <div class="page-header-section">
            <div class="container">
                <h1>My Chats</h1>
                <p>Check your complete chat history here</p>
            </div>
        </div>

        <div class="container">
            <div class="chats-card">
                <div class="chats-card-header">
                    <h3>
                        <i class="fas fa-comments"></i> Chat History
                    </h3>
                </div>
                <div class="table-container">
                    <table class="table-modern">
                        <thead>
                            <tr>
                                <th>Transaction Details</th>
                                <th class="text-right">Chat Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $getAstrologerChat['recordList'][0]['chatHistory']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chatdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php if(!empty($chatdata)): ?>
                                    <tr>
                                        <td>
                                            <div class="chat-details">
                                                <h5 class="chat-title">
                                                    <i class="fas fa-comment-dots"></i>
                                                    Chat with <?php echo e($chatdata['name']); ?> for <?php echo e($chatdata['totalMin']); ?> minutes
                                                </h5>
                                                <div class="chat-date">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <?php echo e(date('d M Y, h:i A', strtotime($chatdata['created_at']))); ?>

                                                </div>
                                                <div>
                                                    <span class="chat-status">
                                                        <i class="fas fa-check-circle mr-1"></i> Completed
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chat-rate">
                                            <?php echo e($currency['value']); ?><?php echo e(number_format($chatdata['deduction'], 2)); ?>

                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div class="empty-state">
                                            <i class="fas fa-comments"></i>
                                            <h3>No Chat History</h3>
                                            <p>You haven't had any chats yet.</p>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.astrologers.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/astrologers/pages/astrologer-chats.blade.php ENDPATH**/ ?>