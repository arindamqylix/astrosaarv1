<style>
    .orders-card {
        background-color: #ffffff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin: 20px 0;
    }

    .table-container {
        max-height: 600px;
        overflow-y: auto;
        border-radius: 8px;
    }

    .table-header {
        background-color: #6d4ec6;
        color: #fff;
    }

    .table-header th {
        padding: 15px 10px;
        font-weight: 600;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border: none;
        text-align: center;
        vertical-align: middle;
    }

    .table tbody tr {
        border-bottom: 1px solid #f0f0f0;
        transition: background-color 0.2s ease;
    }

    .table tbody tr:hover {
        background-color: #f8f8f8;
    }

    .table tbody td {
        padding: 15px 10px;
        vertical-align: middle;
        color: #2c1f0f;
        font-size: 14px;
        text-align: center;
    }

    .product-image {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
        border: 2px solid #f0f0f0;
    }

    .btn-invoice {
        background-color: #dc3545;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 8px 15px;
        font-weight: 600;
        font-size: 13px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .btn-invoice:hover {
        background-color: #c82333;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
        text-decoration: none;
    }

    .btn-cancel {
        background-color: #e5b86a !important;
        color: #2c1f0f !important;
        border: none !important;
        border-radius: 20px !important;
        padding: 8px 20px !important;
        font-size: 13px !important;
        font-weight: 600 !important;
        white-space: nowrap !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 2px 6px rgba(229, 184, 106, 0.3) !important;
    }

    .btn-cancel:hover {
        background-color: #d4a85a !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(229, 184, 106, 0.4) !important;
    }

    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: capitalize;
        display: inline-block;
    }

    .status-pending {
        background-color: #fff3cd;
        color: #856404;
    }

    .status-cancelled {
        background-color: #f8d7da;
        color: #721c24;
    }

    .status-delivered {
        background-color: #d4edda;
        color: #155724;
    }

    .status-completed {
        background-color: #d4edda;
        color: #155724;
    }

    .product-name {
        font-weight: 600;
        color: #2c1f0f;
        max-width: 200px;
        word-wrap: break-word;
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
        .orders-card {
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
            padding: 10px 6px;
            font-size: 11px;
        }

        .product-image {
            width: 50px;
            height: 50px;
        }

        .product-name {
            max-width: 150px;
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
                            <span class="breadcrumbtext">My Orders</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>





    <div class="container" style="background-color: #fff9f0; padding: 30px 15px; min-height: 70vh;">
        <div class="row">
            <div class="col-sm-12">
                <div class="orders-card">
                    <!-- Header Section -->
                    <div class="text-left mb-4">
                        <h1 class="h2 font-weight-bold" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 32px; margin-bottom: 8px;">My Orders</h1>
                        <p style="color: #666; font-size: 15px; margin: 0;">Check your orders history here.</p>
                    </div>


                    <!-- Orders History Section -->
                    <div class="mt-4">
                        <h3 class="font-weight-bold mb-4" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 24px; text-align: center;">Orders History</h3>
                        
                        <div class="table-container">
                            <table class="table table-hover">
                                <thead class="table-header">
                                <tr>
                                    <th class="font-weight-semi-bold text-center">
                                      Invoice
                                    </th>
                                    <th class="font-weight-semi-bold text-center">
                                        Product Name
                                    </th>

                                    <th class="font-weight-semi-bold text-center">
                                        Image

                                    </th>

                                    <th class="font-weight-semi-bold text-center">
                                        Price

                                    </th>
                                    <th class="font-weight-semi-bold text-center">
                                        Tax

                                    </th>
                                    <th class="font-weight-semi-bold text-center">
                                        Total
                                    </th>

                                    <th class="font-weight-semi-bold text-center">
                                        Status
                                    </th>
                                    <th class="font-weight-semi-bold text-center">
                                        Date
                                    </th>
                                    <th class="font-weight-semi-bold text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>


                                    <?php if(isset($getUserById['recordList'][0]['orders']['order']) && count($getUserById['recordList'][0]['orders']['order']) > 0): ?>
                                        <?php $__currentLoopData = $getUserById['recordList'][0]['orders']['order']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($orderdata)): ?>
                                                <tr>
                                                    <td>
                                                        <?php if(isset($orderdata['invoice_link']) && !empty($orderdata['invoice_link'])): ?>
                                                            <a href="<?php echo e($orderdata['invoice_link']); ?>" class="btn-invoice" target="_blank">
                                                                <i class="fa-solid fa-file-pdf"></i>
                                                            </a>
                                                        <?php else: ?>
                                                            <span style="color: #999;">-</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <span class="product-name"><?php echo e($orderdata['productName'] ?? 'N/A'); ?></span>
                                                    </td>
                                                    <td>
                                                        <?php if(isset($orderdata['productImage']) && !empty($orderdata['productImage'])): ?>
                                                            <img src="/<?php echo e($orderdata['productImage']); ?>" alt="<?php echo e($orderdata['productName'] ?? 'Product'); ?>" class="product-image">
                                                        <?php else: ?>
                                                            <span style="color: #999;">-</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <strong><?php echo e($currency['value'] ?? '₹'); ?><?php echo e(number_format($orderdata['productAmount'] ?? 0, 2)); ?></strong>
                                                    </td>
                                                    <td><?php echo e($orderdata['gstPercent'] ?? 0); ?>%</td>
                                                    <td>
                                                        <strong style="color: #6d4ec6;"><?php echo e($currency['value'] ?? '₹'); ?><?php echo e(number_format($orderdata['totalPayable'] ?? 0, 2)); ?></strong>
                                                    </td>
                                                    <td>
                                                        <?php if(isset($orderdata['orderStatus'])): ?>
                                                            <?php if($orderdata['orderStatus'] == 'Pending'): ?>
                                                                <span class="status-badge status-pending"><?php echo e($orderdata['orderStatus']); ?></span>
                                                            <?php elseif($orderdata['orderStatus'] == 'Cancelled'): ?>
                                                                <span class="status-badge status-cancelled"><?php echo e($orderdata['orderStatus']); ?></span>
                                                            <?php elseif($orderdata['orderStatus'] == 'Delivered'): ?>
                                                                <span class="status-badge status-delivered"><?php echo e($orderdata['orderStatus']); ?></span>
                                                            <?php else: ?>
                                                                <span class="status-badge status-completed"><?php echo e($orderdata['orderStatus']); ?></span>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <span style="color: #999;">-</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo e(isset($orderdata['created_at']) ? date('d M Y, h:i A', strtotime($orderdata['created_at'])) : 'N/A'); ?>

                                                    </td>
                                                    <td>
                                                        <?php if(isset($orderdata['orderStatus']) && $orderdata['orderStatus'] != 'Cancelled' && $orderdata['orderStatus'] != 'Delivered'): ?>
                                                            <form class="cancel-form d-inline">
                                                                <input type="hidden" value="<?php echo e($orderdata['id'] ?? ''); ?>" name="id">
                                                                <a class="btn btn-cancel cancel-btn" style="cursor: pointer;">Cancel</a>
                                                            </form>
                                                        <?php else: ?>
                                                            <span style="color: #999;">-</span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="9" class="empty-state">
                                                <i class="fas fa-shopping-bag"></i>
                                                <p style="margin: 10px 0; font-size: 16px;">No orders found</p>
                                                <p style="margin: 5px 0; font-size: 14px; color: #999;">You haven't placed any orders yet.</p>
                                            </td>
                                        </tr>
                                    <?php endif; ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <input type="hidden" value="0" id="flag">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
$(document).ready(function() {
    $('.cancel-btn').click(function(e) {
        e.preventDefault();



        <?php
            use Symfony\Component\HttpFoundation\Session\Session;
            $session = new Session();
            $token = $session->get('token');
        ?>

        Swal.fire({
            title: 'Are you sure you want to cancel the order?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, cancel it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var formData = $(this).closest('.cancel-form').serialize();
                // console.log(formData);

                $.ajax({
                    url: '<?php echo e(route("api.cancelOrder",['token' => $token])); ?>',
                    type: 'POST',
                    data: formData,

                    success: function(response) {
                        toastr.success('Order Cancelled Successfully');
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = JSON.parse(xhr.responseText).error.paymentMethod[0];
                        toastr.error(errorMessage);
                    }
                });
            }
        });
    });
});

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/pages/my-orders.blade.php ENDPATH**/ ?>