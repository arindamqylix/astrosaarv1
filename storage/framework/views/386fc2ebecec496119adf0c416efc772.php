<?php $__env->startSection('content'); ?>
    <div class="pt-1 pb-1 bg-red d-none d-md-block astroway-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    <span style="text-transform: capitalize; ">
                        <span class="text-white breadcrumbs">
                            <a href="<?php echo e(route('front.home')); ?>" style="color:white;text-decoration:none">
                                <i class="fa fa-home font-18"></i>
                            </a>
                            <i class="fa fa-chevron-right"></i> <a href="<?php echo e(route('front.getLiveAstro')); ?>"
                                style="color:white;text-decoration:none">My Account</a>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <style>
        .account-page-wrapper {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: calc(100vh - 200px);
            padding: 30px 0;
        }
        .account-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 30px;
        }
        .account-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .account-header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }
        .account-header p {
            margin: 10px 0 0 0;
            opacity: 0.9;
            font-size: 14px;
        }
        .profile-picture-section {
            text-align: center;
            padding: 30px;
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
        }
        .profile-picture-wrapper {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }
        .profile-picture-preview {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .profile-picture-upload {
            position: absolute;
            bottom: 0;
            right: 0;
            background: #667eea;
            color: white;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .profile-picture-upload:hover {
            background: #5568d3;
            transform: scale(1.1);
        }
        .profile-picture-upload input {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        .form-section {
            padding: 30px;
        }
        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
            padding-bottom: 12px;
            border-bottom: 2px solid #667eea;
            display: flex;
            align-items: center;
        }
        .section-title i {
            margin-right: 10px;
            color: #667eea;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            font-size: 14px;
        }
        .form-label i {
            margin-right: 8px;
            color: #667eea;
            width: 18px;
        }
        .form-control {
            border: 1.5px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 14px;
            transition: all 0.3s ease;
            height: auto;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
            outline: none;
        }
        .input-group-icon {
            position: relative;
        }
        .input-group-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #667eea;
            z-index: 10;
        }
        .input-group-icon .form-control {
            padding-left: 45px;
        }
        .req {
            color: #dc3545;
            margin-left: 3px;
        }
        .btn-update {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 14px 40px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }
        .btn-update:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }
        .btn-update:active {
            transform: translateY(0);
        }
        .btn-update i {
            margin-right: 8px;
        }
        .form-actions {
            text-align: center;
            padding: 30px;
            background: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }
        .field-validation-valid {
            font-size: 12px;
            margin-top: 5px;
            display: block;
        }
        @media (max-width: 768px) {
            .account-header {
                padding: 20px;
            }
            .account-header h1 {
                font-size: 24px;
            }
            .form-section {
                padding: 20px;
            }
            .profile-picture-preview {
                width: 120px;
                height: 120px;
            }
        }
    </style>

    <div class="account-page-wrapper">
        <div class="container-fluid container-xl">
            <div class="account-card">
                <div class="account-header">
                    <h1><i class="fas fa-user-circle"></i> My Account</h1>
                    <p>Manage your profile information and preferences</p>
                </div>

                <form id="frmUpdateProfile" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    
                    <!-- Profile Picture Section -->
                    <div class="profile-picture-section">
                        <div class="profile-picture-wrapper">
                            <img id="profilePreview" src="<?php echo e(isset($getuserdetails['userDetails']['profilepic']) && $getuserdetails['userDetails']['profilepic'] ? asset('public/storage/' . $getuserdetails['userDetails']['profilepic']) : asset('public/frontend/images/default-avatar.png')); ?>" 
                                 alt="Profile Picture" class="profile-picture-preview">
                            <div class="profile-picture-upload">
                                <i class="fas fa-camera"></i>
                                <input type="file" id="profilepic" name="profilepic" accept="image/*">
                            </div>
                        </div>
                        <p class="text-muted mb-0" style="font-size: 13px;">Click the camera icon to upload a new profile picture</p>
                        <span class="field-validation-valid text-danger" data-valmsg-for="profilepic" data-valmsg-replace="true"></span>
                    </div>

                    <!-- Personal Information Section -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="fas fa-user"></i>
                            Personal Information
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-user"></i>
                                        Full Name <b class="req">*</b>
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-user"></i>
                                        <input autocomplete="off" class="form-control" id="FirstName" 
                                               maxlength="30" name="name" placeholder="Enter your full name"
                                               type="text" value="<?php echo e($getuserdetails['userDetails']['name']); ?>">
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-envelope"></i>
                                        Email Address <b class="req">*</b>
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-envelope"></i>
                                        <input autocomplete="off" class="form-control" id="EmailAddress"
                                               maxlength="50" name="email" placeholder="Enter your email"
                                               type="email" value="<?php echo e($getuserdetails['userDetails']['email']); ?>">
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="EmailAddress" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-phone"></i>
                                        Mobile Number <b class="req">*</b>
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-phone"></i>
                                        <input autocomplete="off" class="form-control" id="ContactMobile"
                                               maxlength="12" name="contactNo" placeholder="Enter mobile number"
                                               type="tel" value="<?php echo e($getuserdetails['userDetails']['contactNo']); ?>">
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="ContactMobile" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-venus-mars"></i>
                                        Gender
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-venus-mars"></i>
                                        <select class="form-control" id="Gender" name="gender">
                                            <option value="" <?php echo e($getuserdetails['userDetails']['gender'] == 0 ? 'selected' : ''); ?>>--Select Gender--</option>
                                            <option value="Male" <?php echo e($getuserdetails['userDetails']['gender'] == 'Male' ? 'selected' : ''); ?>>Male</option>
                                            <option value="Female" <?php echo e($getuserdetails['userDetails']['gender'] == 'Female' ? 'selected' : ''); ?>>Female</option>
                                            <option value="Other" <?php echo e($getuserdetails['userDetails']['gender'] == 'Other' ? 'selected' : ''); ?>>Other</option>
                                        </select>
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Gender" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Birth Information Section -->
                    <div class="form-section" style="background: #f8f9fa;">
                        <div class="section-title">
                            <i class="fas fa-birthday-cake"></i>
                            Birth Information
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-calendar"></i>
                                        Birth Date
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-calendar"></i>
                                        <input type="date" name="birthDate" class="form-control" 
                                               value="<?php echo e(date("Y-m-d", strtotime($getuserdetails['userDetails']['birthDate']))); ?>">
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="birthDate" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-clock"></i>
                                        Birth Time
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-clock"></i>
                                        <input type="time" name="birthTime" class="form-control" 
                                               value="<?php echo e($getuserdetails['userDetails']['birthTime']); ?>">
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="birthTime" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Place Of Birth
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <input autocomplete="off" name="birthPlace" class="form-control"
                                               id="POB" placeholder="Enter place of birth"
                                               type="text" value="<?php echo e($getuserdetails['userDetails']['birthPlace']); ?>">
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="POB" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Address Information Section -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="fas fa-home"></i>
                            Address Information
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Current Address
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <input class="form-control" id="CurrentAddress" 
                                               value="<?php echo e($getuserdetails['userDetails']['addressLine1']); ?>" 
                                               maxlength="300" name="addressLine1" 
                                               placeholder="Enter your current address" type="text">
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="CurrentAddress" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-city"></i>
                                        Location (City/State/Country)
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-city"></i>
                                        <input autocomplete="off" class="form-control" id="CurrentPlace" 
                                               name="location" placeholder="Enter city, state, country"
                                               type="text" value="<?php echo e($getuserdetails['userDetails']['location']); ?>">
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="CurrentPlace" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i class="fas fa-mail-bulk"></i>
                                        Pin Code
                                    </label>
                                    <div class="input-group-icon">
                                        <i class="fas fa-mail-bulk"></i>
                                        <input autocomplete="off" class="form-control" id="PinCode"
                                               maxlength="12" name="pincode" placeholder="Enter pin code"
                                               type="text" value="<?php echo e($getuserdetails['userDetails']['pincode']); ?>">
                                    </div>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="PinCode" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button type="button" id="btnSave" class="btn-update">
                            <i class="fas fa-save"></i>
                            Update Profile
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function() {
        // Profile Picture Preview
        $('#profilepic').on('change', function(e) {
            var file = e.target.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#profilePreview').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });

        // Form Validation
        function validateForm() {
            var isValid = true;
            var name = $('#FirstName').val().trim();
            var email = $('#EmailAddress').val().trim();
            var mobile = $('#ContactMobile').val().trim();

            // Remove previous error styling
            $('.form-control').removeClass('is-invalid');

            // Validate Name
            if (name === '') {
                $('#FirstName').addClass('is-invalid');
                isValid = false;
            }

            // Validate Email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === '' || !emailRegex.test(email)) {
                $('#EmailAddress').addClass('is-invalid');
                isValid = false;
            }

            // Validate Mobile
            if (mobile === '' || mobile.length < 10) {
                $('#ContactMobile').addClass('is-invalid');
                isValid = false;
            }

            return isValid;
        }

        // Update Profile
        $('#btnSave').click(function(e) {
            e.preventDefault();

            if (!validateForm()) {
                toastr.error('Please fill in all required fields correctly.');
                return;
            }

            <?php
            $id = authcheck()['id'];
            ?>

            var formData = new FormData($('#frmUpdateProfile')[0]);
            
            // Disable button during submission
            var $btn = $(this);
            var originalText = $btn.html();
            $btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Updating...');

            $.ajax({
                url: '<?php echo e(route("user.update", ['id' => $id])); ?>',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    toastr.success('Profile Updated Successfully!', '', {
                        timeOut: 2000,
                        progressBar: true
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    var errorMessage = 'An error occurred. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    } else if (xhr.responseText) {
                        try {
                            var response = JSON.parse(xhr.responseText);
                            if (response.message) {
                                errorMessage = response.message;
                            }
                        } catch (e) {
                            errorMessage = xhr.responseText.substring(0, 100);
                        }
                    }
                    toastr.error(errorMessage, '', {
                        timeOut: 3000,
                        progressBar: true
                    });
                    $btn.prop('disabled', false).html(originalText);
                }
            });
        });

        // Number key validation for mobile
        $('#ContactMobile').on('keypress', function(e) {
            var charCode = e.which || e.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
        });

        // Remove invalid class on input
        $('.form-control').on('input', function() {
            $(this).removeClass('is-invalid');
        });
    });

    function isNumberKey(evt) {
        var e = event || evt;
        var CharCode = e.which || e.keyCode;
        if (CharCode == 13) {
            $("#btnVerify").click();
            return false;
        }
        if (CharCode > 31 && (CharCode < 48 || CharCode > 57))
            return false;
    }

    function confirmDelete(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo e(route('front.deleteAccount')); ?>";
            }
        });
    }
</script>

<style>
    .form-control.is-invalid {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.15);
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/pages/my-account.blade.php ENDPATH**/ ?>