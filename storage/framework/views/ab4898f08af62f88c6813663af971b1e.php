<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    /* Profile Update Page Styles */
    .profile-update-page {
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
        margin-bottom: 40px;
        border-radius: 0 0 20px 20px;
    }

    .page-header-section h1 {
        font-size: 32px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
        font-family: 'Playfair Display', serif;
    }

    /* Step Progress Indicator */
    .step-progress {
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
    }

    .step-progress-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        margin-bottom: 20px;
    }

    .step-progress-bar::before {
        content: '';
        position: absolute;
        top: 20px;
        left: 0;
        right: 0;
        height: 3px;
        background: #e0e0e0;
        z-index: 1;
    }

    .step-progress-line {
        position: absolute;
        top: 20px;
        left: 0;
        height: 3px;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        z-index: 2;
        transition: width 0.3s ease;
    }

    .step-indicator {
        position: relative;
        z-index: 3;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
    }

    .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #e0e0e0;
        color: #999;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 16px;
        transition: all 0.3s ease;
        margin-bottom: 8px;
    }

    .step-indicator.active .step-circle {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
    }

    .step-indicator.completed .step-circle {
        background: #28a745;
        color: white;
    }

    .step-label {
        font-size: 12px;
        color: #666;
        text-align: center;
        font-weight: 500;
    }

    .step-indicator.active .step-label {
        color: #6d4ec6;
        font-weight: 600;
    }

    /* Form Steps */
    .step {
        display: none;
    }

    .step.active {
        display: block;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-step-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        padding: 30px;
        margin-bottom: 30px;
    }

    .form-step-header {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        padding: 20px;
        border-radius: 12px 12px 0 0;
        margin: -30px -30px 25px -30px;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
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
        background-color: #fff;
    }

    .form-control-modern:focus {
        border-color: #6d4ec6;
        box-shadow: 0 0 0 3px rgba(109, 78, 198, 0.1);
        outline: none;
    }

    .form-control-modern::placeholder {
        color: #aaa;
    }

    .required {
        color: #ee4e5e;
        margin-left: 4px;
    }

    .input-group-modern {
        display: flex;
        gap: 0;
    }

    .input-group-modern input:first-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-right: none;
        max-width: 80px;
    }

    .input-group-modern input:last-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        flex: 1;
    }

    /* Profile Image Upload */
    .profile-image-upload {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .profile-image-preview {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #6d4ec6;
        margin-top: 15px;
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.2);
    }

    .image-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(45deg, #6d4ec6, #8b6fd8);
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 50%;
        width: 150px;
        height: 150px;
        font-size: 48px;
        margin-top: 15px;
        border: 4px solid #6d4ec6;
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.2);
    }

    /* Radio Buttons */
    .radio-group {
        display: flex;
        gap: 20px;
        margin-top: 10px;
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

    /* Textarea */
    textarea.form-control-modern {
        min-height: 100px;
        resize: vertical;
    }

    /* Buttons */
    .btn-step {
        padding: 12px 30px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        text-decoration: none;
        display: inline-block;
    }

    .btn-step-next {
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(109, 78, 198, 0.3);
    }

    .btn-step-next:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(109, 78, 198, 0.4);
        color: white;
        text-decoration: none;
    }

    .btn-step-prev {
        background: #fff;
        color: #6d4ec6;
        border: 2px solid #6d4ec6;
        margin-right: 15px;
    }

    .btn-step-prev:hover {
        background: #f8f9fa;
        color: #6d4ec6;
        text-decoration: none;
    }

    .btn-step-save {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
    }

    .btn-step-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
        color: white;
    }

    /* Info Sidebar */
    .info-sidebar {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        height: fit-content;
        position: sticky;
        top: 20px;
    }

    .info-sidebar h2 {
        font-size: 24px;
        font-weight: 700;
        color: #2c1f0f;
        margin-bottom: 20px;
        font-family: 'Playfair Display', serif;
    }

    .info-sidebar p {
        font-size: 15px;
        color: #555;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .info-card {
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        transition: all 0.3s ease;
        height: 100%;
    }

    .info-card:hover {
        border-color: #6d4ec6;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.15);
    }

    .info-card img {
        max-width: 60px;
        margin-bottom: 10px;
    }

    .info-card .font-weight-bold {
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
    }

    .info-card p {
        font-size: 13px;
        color: #666;
        margin: 0;
    }

    /* Alerts */
    .alert-modern {
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 25px;
        border: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .alert-modern.alert-danger {
        background: #fee;
        color: #c33;
        border-left: 4px solid #dc3545;
    }

    .alert-modern.alert-success {
        background: #efe;
        color: #28a745;
        border-left: 4px solid #28a745;
    }

    /* Select2 Customization */
    .select2-container--default .select2-selection--multiple {
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        min-height: 45px;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple {
        border-color: #6d4ec6;
    }

    /* Availability Section */
    .availability-day {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 15px;
        border: 1px solid #e0e0e0;
    }

    .availability-day label:first-child {
        font-size: 16px;
        font-weight: 600;
        color: #6d4ec6;
        margin-bottom: 15px;
        display: block;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
        .step-progress-bar {
            flex-wrap: wrap;
            gap: 10px;
        }

        .step-indicator {
            flex: 0 0 calc(50% - 10px);
        }

        .info-sidebar {
            position: relative;
            top: 0;
            margin-top: 30px;
        }
    }

    @media (max-width: 768px) {
        .page-header-section {
            padding: 30px 15px;
        }

        .page-header-section h1 {
            font-size: 24px;
        }

        .form-step-card {
            padding: 20px;
        }

        .form-step-header {
            margin: -20px -20px 20px -20px;
            padding: 15px;
            font-size: 18px;
        }

        .step-circle {
            width: 35px;
            height: 35px;
            font-size: 14px;
        }

        .step-label {
            font-size: 11px;
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="profile-update-page">
        <div class="breadcrumb-section d-none d-md-block">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo e(route('front.home')); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                    <i class="fa fa-chevron-right"></i>
                    <span>Astrologer Profile Update</span>
                </div>
            </div>
        </div>

        <div class="page-header-section">
            <div class="container">
                <h1>Update Your Profile</h1>
                <p style="color: rgba(255, 255, 255, 0.9); font-size: 16px;">Complete your profile to become a verified astrologer</p>
            </div>
        </div>

        <div class="container">
            <?php if($errors->any()): ?>
                <div class="alert alert-modern alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul style="margin: 0; padding-left: 20px;">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if(session('success')): ?>
                <div class="alert alert-modern alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-lg-8 col-12 order-lg-1">
                    <!-- Step Progress Indicator -->
                    <div class="step-progress">
                        <div class="step-progress-bar">
                            <div class="step-progress-line" id="progressLine" style="width: 0%;"></div>
                            <div class="step-indicator active" data-step="1">
                                <div class="step-circle">1</div>
                                <div class="step-label">Personal</div>
                            </div>
                            <div class="step-indicator" data-step="2">
                                <div class="step-circle">2</div>
                                <div class="step-label">Skills</div>
                            </div>
                            <div class="step-indicator" data-step="3">
                                <div class="step-circle">3</div>
                                <div class="step-label">Details</div>
                            </div>
                            <div class="step-indicator" data-step="4">
                                <div class="step-circle">4</div>
                                <div class="step-label">More Info</div>
                            </div>
                            <div class="step-indicator" data-step="5">
                                <div class="step-circle">5</div>
                                <div class="step-label">Availability</div>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo e(route('front.updateAstrologer')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="userId" value="<?php echo e($getAstrologer['recordList']['0']['userId']); ?>">
                        <input type="hidden" name="id" value="<?php echo e($getAstrologer['recordList']['0']['id']); ?>">
                        
                        <!-- Step 1 -->
                        <div id="step1" class="form-step-card step active">
                            <div class="form-step-header">
                                <i class="fas fa-user mr-2"></i> Personal Details
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="name">Name<span class="required">*</span></label>
                                        <input type="text" id="name" value="<?php echo e($getAstrologer['recordList']['0']['name']); ?>"
                                            name="name" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="email">Email Address<span class="required">*</span></label>
                                        <input type="email" id="email" value="<?php echo e($getAstrologer['recordList']['0']['email']); ?>"
                                            name="email" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="contactNo">Phone No<span class="required">*</span></label>
                                        <div class="input-group-modern">
                                            <input type="text" id="countryCode" value="<?php echo e($user->countryCode); ?>"
                                                name="countryCode" class="form-control-modern">
                                            <input type="text" value="<?php echo e($getAstrologer['recordList']['0']['contactNo']); ?>"
                                                id="contactNo" name="contactNo" class="form-control-modern" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="profileImage">Profile Image<span class="required">*</span></label>
                                        <input type="file" class="form-control-modern" id="profileImage" name="profileImage" accept="image/*">
                                        <div id="imagePreviewContainer" class="mt-3 text-center">
                                            <?php if($getAstrologer['recordList'][0]['profileImage']): ?>
                                                <?php
                                                    $hasImage = !empty($getAstrologer['recordList'][0]['profileImage']);
                                                    $userName = $getAstrologer['recordList'][0]['name'] ?? 'User';
                                                    $firstLetter = strtoupper(substr($userName, 0, 1));
                                                ?>
                                                <img id="imagePreview" src="/<?php echo e($getAstrologer['recordList'][0]['profileImage']); ?>"
                                                    alt="Current Profile Image" class="profile-image-preview"
                                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                <div class="image-placeholder" style="display: none;">
                                                    <?php echo e($firstLetter); ?>

                                                </div>
                                                <input type="hidden" id="oldProfileImage" name="oldProfileImage" value="<?php echo e($getAstrologer['recordList'][0]['profileImage'] ?? ''); ?>">
                                            <?php else: ?>
                                                <div id="imagePreviewContainer" style="display: none;" class="text-center">
                                                    <img id="imagePreview" src="#" alt="Profile Image Preview" class="profile-image-preview"
                                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                                    <div class="image-placeholder" style="display: none;">
                                                        <?php echo e(strtoupper(substr($getAstrologer['recordList'][0]['name'] ?? 'U', 0, 1))); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a class="btn-step btn-step-next" onclick="nextStep()">Next <i class="fas fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div id="step2" class="form-step-card step">
                            <div class="form-step-header">
                                <i class="fas fa-star mr-2"></i> Skill Details
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="gender">Gender<span class="required">*</span></label>
                                        <select class="form-control-modern" name="gender" id="gender" required>
                                            <option value="Male" <?php echo e($getAstrologer['recordList'][0]['gender'] === 'Male' ? 'selected' : ''); ?>>Male</option>
                                            <option value="Female" <?php echo e($getAstrologer['recordList'][0]['gender'] === 'Female' ? 'selected' : ''); ?>>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="birthDate">Birth Date<span class="required">*</span></label>
                                        <input type="date"
                                            value="<?php echo e(date('Y-m-d', strtotime($getAstrologer['recordList'][0]['birthDate']))); ?>"
                                            name="birthDate" id="birthDate" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="astrologerCategoryId">Category<span class="required">*</span></label>
                                        <select class="form-control-modern select2" name="astrologerCategoryId[]"
                                            id="astrologerCategoryId" multiple required>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category['id']); ?>" <?php echo e(in_array($category['id'], array_column($getAstrologer['recordList'][0]['astrologerCategoryId'], 'id')) ? 'selected' : ''); ?>><?php echo e($category['name']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="primarySkill">Primary Skills<span class="required">*</span></label>
                                        <select class="form-control-modern select2" name="primarySkill[]" id="primarySkill" multiple required>
                                            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($skill['id']); ?>" <?php echo e(in_array($skill['id'], array_column($getAstrologer['recordList'][0]['primarySkill'], 'id')) ? 'selected' : ''); ?>>
                                                    <?php echo e($skill['name']); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="allSkill">All Skills<span class="required">*</span></label>
                                        <select class="form-control-modern select2" name="allSkill[]" id="allSkill" multiple required>
                                            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($skill['id']); ?>" <?php echo e(in_array($skill['id'], array_column($getAstrologer['recordList'][0]['allSkill'], 'id')) ? 'selected' : ''); ?>>
                                                    <?php echo e($skill['name']); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="languageKnown">Language<span class="required">*</span></label>
                                        <select class="form-control-modern select2" name="languageKnown[]" id="languageKnown" multiple required>
                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($language->id); ?>" <?php echo e(in_array($language->id, array_column($getAstrologer['recordList'][0]['languageKnown'], 'id')) ? 'selected' : ''); ?>>
                                                    <?php echo e($language->languageName); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="charge">Add your charge (as per min)<span class="required">*</span></label>
                                        <input type="number" value="<?php echo e($getAstrologer['recordList'][0]['charge']); ?>" id="charge"
                                            name="charge" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="videoCallRate">Add your video charge (as per min)<span class="required">*</span></label>
                                        <input type="number" value="<?php echo e($getAstrologer['recordList'][0]['videoCallRate']); ?>"
                                            id="videoCallRate" name="videoCallRate" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="reportRate">Add your report charge<span class="required">*</span></label>
                                        <input type="number" value="<?php echo e($getAstrologer['recordList'][0]['reportRate']); ?>"
                                            id="reportRate" name="reportRate" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="experienceInYears">Experience in years<span class="required">*</span></label>
                                        <input type="number" value="<?php echo e($getAstrologer['recordList'][0]['experienceInYears']); ?>"
                                            id="experienceInYears" name="experienceInYears" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="dailyContribution">How many hours you can contribute daily?<span class="required">*</span></label>
                                        <input type="number" value="<?php echo e($getAstrologer['recordList'][0]['dailyContribution']); ?>"
                                            id="dailyContribution" name="dailyContribution" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="hearAboutAstroguru">Where did you hear about <?php echo e($appname['value']); ?>?<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['hearAboutAstroguru']); ?>"
                                            id="hearAboutAstroguru" name="hearAboutAstroguru" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label>Are you working on any other platform?<span class="required">*</span></label>
                                        <div class="radio-group">
                                            <div class="radio-option">
                                                <input type="radio" id="working-yes" name="isWorkingOnAnotherPlatform" value="1" <?php echo e(isset($getAstrologer['recordList'][0]['isWorkingOnAnotherPlatform']) && $getAstrologer['recordList'][0]['isWorkingOnAnotherPlatform'] == '1' ? 'checked' : ''); ?> required>
                                                <label for="working-yes">Yes</label>
                                            </div>
                                            <div class="radio-option">
                                                <input type="radio" id="working-no" name="isWorkingOnAnotherPlatform" value="0" <?php echo e(isset($getAstrologer['recordList'][0]['isWorkingOnAnotherPlatform']) && $getAstrologer['recordList'][0]['isWorkingOnAnotherPlatform'] == '0' ? 'checked' : ''); ?> required>
                                                <label for="working-no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a class="btn-step btn-step-prev" onclick="prevStep()"><i class="fas fa-arrow-left mr-2"></i> Previous</a>
                                <a class="btn-step btn-step-next" onclick="nextStep()">Next <i class="fas fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div id="step3" class="form-step-card step">
                            <div class="form-step-header">
                                <i class="fas fa-info-circle mr-2"></i> Other Details
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="whyOnBoard">Why do you think we should onboard you?<span class="required">*</span></label>
                                        <input type="text" id="awhyOnBoard" name="whyOnBoard" class="form-control-modern"
                                            value="<?php echo e($getAstrologer['recordList'][0]['whyOnBoard']); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="interviewSuitableTime">What is suitable time for interview?<span class="required">*</span></label>
                                        <input type="text" id="interviewSuitableTime" name="interviewSuitableTime"
                                            class="form-control-modern"
                                            value="<?php echo e($getAstrologer['recordList'][0]['interviewSuitableTime']); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="currentCity">Which city do you currently live in?<span class="required">*</span></label>
                                        <input type="text" id="currentCity" name="currentCity" class="form-control-modern"
                                            value="<?php echo e($getAstrologer['recordList'][0]['currentCity']); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="mainSourceOfBusiness">Main Source of business (Other than astrology)?<span class="required">*</span></label>
                                        <select class="form-control-modern" name="mainSourceOfBusiness" id="mainSourceOfBusiness" required>
                                            <?php $__currentLoopData = $mainSourceBusiness; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($source->jobName); ?>" <?php echo e($getAstrologer['recordList'][0]['mainSourceOfBusiness'] == $source->jobName ? 'selected' : ''); ?>>
                                                    <?php echo e($source->jobName); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="highestQualification">Select your qualification<span class="required">*</span></label>
                                        <select class="form-control-modern" name="highestQualification" id="highestQualification" required>
                                            <?php $__currentLoopData = $highestQualification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $highest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value='<?php echo e($highest->qualificationName); ?>' <?php echo e($getAstrologer['recordList'][0]['highestQualification'] == $highest->qualificationName ? 'selected' : ''); ?>>
                                                    <?php echo e($highest->qualificationName); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="degree">Degree / Diploma<span class="required">*</span></label>
                                        <select class="form-control-modern" name="degree" id="degree" required>
                                            <?php $__currentLoopData = $qualifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qua): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value='<?php echo e($qua->degreeName); ?>' <?php echo e($getAstrologer['recordList'][0]['degree'] == $qua->degreeName ? 'selected' : ''); ?>>
                                                    <?php echo e($qua->degreeName); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="college">College/School/University name<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['college']); ?>" id="college"
                                            name="college" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="learnAstrology">From where did you learn Astrology?<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['learnAstrology']); ?>"
                                            id="learnAstrology" name="learnAstrology" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="instaProfileLink">Instagram profile link<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['instaProfileLink']); ?>"
                                            id="instaProfileLink" name="instaProfileLink" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="facebookProfileLink">Facebook profile link<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['facebookProfileLink']); ?>"
                                            id="facebookProfileLink" name="facebookProfileLink" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="linkedInProfileLink">LinkedIn profile link<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['linkedInProfileLink']); ?>"
                                            id="linkedInProfileLink" name="linkedInProfileLink" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="youtubeChannelLink">Youtube profile link<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['youtubeChannelLink']); ?>"
                                            id="youtubeChannelLink" name="youtubeChannelLink" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="websiteProfileLink">Website profile link<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['websiteProfileLink']); ?>"
                                            id="websiteProfileLink" name="websiteProfileLink" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label>Did anybody referred you?<span class="required">*</span></label>
                                        <div class="radio-group">
                                            <div class="radio-option">
                                                <input type="radio" id="refer-yes" name="isAnyBodyRefer" value="1" <?php echo e(isset($getAstrologer['recordList'][0]['isAnyBodyRefer']) && $getAstrologer['recordList'][0]['isAnyBodyRefer'] == '1' ? 'checked' : ''); ?> required>
                                                <label for="refer-yes">Yes</label>
                                            </div>
                                            <div class="radio-option">
                                                <input type="radio" id="refer-no" name="isAnyBodyRefer" value="0" <?php echo e(isset($getAstrologer['recordList'][0]['isAnyBodyRefer']) && $getAstrologer['recordList'][0]['isAnyBodyRefer'] == '0' ? 'checked' : ''); ?> required>
                                                <label for="refer-no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a class="btn-step btn-step-prev" onclick="prevStep()"><i class="fas fa-arrow-left mr-2"></i> Previous</a>
                                <a class="btn-step btn-step-next" onclick="nextStep()">Next <i class="fas fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div id="step4" class="form-step-card step">
                            <div class="form-step-header">
                                <i class="fas fa-file-alt mr-2"></i> Additional Information
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="minimumEarning">Minimum Earning Expectation<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['minimumEarning']); ?>"
                                            id="minimumEarning" name="minimumEarning" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="maximumEarning">Maximum Earning Expectation<span class="required">*</span></label>
                                        <input type="text" value="<?php echo e($getAstrologer['recordList'][0]['maximumEarning']); ?>"
                                            id="maximumEarning" name="maximumEarning" class="form-control-modern" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="NoofforeignCountriesTravel">Number of the foreign countries you lived/travel to?<span class="required">*</span></label>
                                        <select class="form-control-modern" name="NoofforeignCountriesTravel"
                                            id="NoofforeignCountriesTravel" required>
                                            <?php $__currentLoopData = $countryTravel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($travel->NoOfCountriesTravell); ?>" <?php echo e($getAstrologer['recordList'][0]['NoofforeignCountriesTravel'] == $travel->NoOfCountriesTravell ? 'selected' : ''); ?>>
                                                    <?php echo e($travel->NoOfCountriesTravell); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="currentlyworkingfulltimejob">Are you currently working a fulltime job?<span class="required">*</span></label>
                                        <select class="form-control-modern" name="currentlyworkingfulltimejob"
                                            id="currentlyworkingfulltimejob" required>
                                            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $working): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($working->workName); ?>" <?php echo e($getAstrologer['recordList'][0]['currentlyworkingfulltimejob'] == $working->workName ? 'selected' : ''); ?>>
                                                    <?php echo e($working->workName); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="loginBio">Long Bio<span class="required">*</span></label>
                                        <textarea id="loginBio" name="loginBio"
                                            class="form-control-modern" required><?php echo e($getAstrologer['recordList'][0]['loginBio']); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="goodQuality">What are some good qualities of perfect astrologer?<span class="required">*</span></label>
                                        <textarea id="goodQuality" name="goodQuality"
                                            class="form-control-modern" required><?php echo e($getAstrologer['recordList'][0]['goodQuality']); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="biggestChallenge">What was the biggest challenge you faced and how did you overcome it?<span class="required">*</span></label>
                                        <textarea id="biggestChallenge" name="biggestChallenge"
                                            class="form-control-modern" required><?php echo e($getAstrologer['recordList'][0]['biggestChallenge']); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label for="whatwillDo">A customer is asking the same question repeatedly: what will you do?<span class="required">*</span></label>
                                        <textarea id="whatwillDo" name="whatwillDo"
                                            class="form-control-modern" required><?php echo e($getAstrologer['recordList'][0]['whatwillDo']); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a class="btn-step btn-step-prev" onclick="prevStep()"><i class="fas fa-arrow-left mr-2"></i> Previous</a>
                                <a class="btn-step btn-step-next" onclick="nextStep()">Next <i class="fas fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                        <!-- Step 5 -->
                        <div id="step5" class="form-step-card step">
                            <div class="form-step-header">
                                <i class="fas fa-calendar-check mr-2"></i> Your Availability
                            </div>
                            <div class="row">
                                <?php
                                    $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                                ?>

                                <?php $__currentLoopData = $daysOfWeek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-12">
                                        <div class="availability-day">
                                            <label><?php echo e($day); ?></label>
                                            <input type="hidden" name="astrologerAvailability[<?php echo e($index); ?>][day]"
                                                value="<?php echo e($day); ?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group-modern">
                                                        <label for="<?php echo e(strtolower($day)); ?>-from">From Time</label>
                                                        <input type="time" id="<?php echo e(strtolower($day)); ?>-from"
                                                            name="astrologerAvailability[<?php echo e($index); ?>][time][0][fromTime]"
                                                            class="form-control-modern"
                                                            value="<?php echo e(isset($getAstrologer['recordList'][0]['astrologerAvailability'][$index]['time'][0]['fromTime']) ? date('H:i', strtotime($getAstrologer['recordList'][0]['astrologerAvailability'][$index]['time'][0]['fromTime'])) : ''); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group-modern">
                                                        <label for="<?php echo e(strtolower($day)); ?>-to">To Time</label>
                                                        <input type="time" id="<?php echo e(strtolower($day)); ?>-to"
                                                            name="astrologerAvailability[<?php echo e($index); ?>][time][0][toTime]"
                                                            class="form-control-modern"
                                                            value="<?php echo e(isset($getAstrologer['recordList'][0]['astrologerAvailability'][$index]['time'][0]['toTime']) ? date('H:i', strtotime($getAstrologer['recordList'][0]['astrologerAvailability'][$index]['time'][0]['toTime'])) : ''); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="text-center mt-4">
                                <a class="btn-step btn-step-prev" onclick="prevStep()"><i class="fas fa-arrow-left mr-2"></i> Previous</a>
                                <button type="submit" class="btn-step btn-step-save" id="btnSave">
                                    <i class="fas fa-save mr-2"></i> Save Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 col-12 order-lg-2">
                    <div class="info-sidebar">
                        <h2>Become "<?php echo e(strtoupper($appname['value'])); ?> Verified" Astrologer</h2>
                        <p>
                            <?php echo e($appname['value']); ?>, one of the best online astrology portals gives you a chance to be a part of its community of best and top-notch Astrologers. Become a part of the team of Astrologers and offer your consultations to clients from all across the globe, &amp; create an online, personalized brand presence.
                        </p>
                        <div class="row">
                            <div class="col-sm-6 col-12 mb-3">
                                <div class="info-card">
                                    <?php
                                        $verifiedIcon = asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/verified-icon.svg');
                                        $hasVerifiedIcon = file_exists(public_path('frontend/astrowaycdn/dashaspeaks/web/content/images/verified-icon.svg'));
                                    ?>
                                    <?php if($hasVerifiedIcon): ?>
                                        <img src="<?php echo e($verifiedIcon); ?>" alt="Verified" class="mb-2"
                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                        <div class="image-placeholder" style="display: none; width: 60px; height: 60px; font-size: 24px; margin: 0 auto 10px;">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                    <?php else: ?>
                                        <div class="image-placeholder" style="width: 60px; height: 60px; font-size: 24px; margin: 0 auto 10px;">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                    <?php endif; ?>
                                    <span class="font-weight-bold">Verified Expert</span>
                                    <p>Astrologers</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 mb-3">
                                <div class="info-card">
                                    <?php
                                        $availabilityIcon = asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/24-availability-icon.svg');
                                        $hasAvailabilityIcon = file_exists(public_path('frontend/astrowaycdn/dashaspeaks/web/content/images/24-availability-icon.svg'));
                                    ?>
                                    <?php if($hasAvailabilityIcon): ?>
                                        <img src="<?php echo e($availabilityIcon); ?>" alt="24/7" class="mb-2"
                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                        <div class="image-placeholder" style="display: none; width: 60px; height: 60px; font-size: 24px; margin: 0 auto 10px;">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    <?php else: ?>
                                        <div class="image-placeholder" style="width: 60px; height: 60px; font-size: 24px; margin: 0 auto 10px;">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    <?php endif; ?>
                                    <span class="font-weight-bold">24/7</span>
                                    <p>Availability</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                width: '100%',
                theme: 'bootstrap4'
            });
        });

        let currentStep = 1;
        const totalSteps = 5;

        function updateProgress() {
            const progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
            document.getElementById('progressLine').style.width = progressPercentage + '%';

            // Update step indicators
            document.querySelectorAll('.step-indicator').forEach((indicator, index) => {
                const stepNum = index + 1;
                indicator.classList.remove('active', 'completed');
                
                if (stepNum < currentStep) {
                    indicator.classList.add('completed');
                } else if (stepNum === currentStep) {
                    indicator.classList.add('active');
                }
            });
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                document.getElementById('step' + currentStep).classList.remove('active');
                currentStep++;
                document.getElementById('step' + currentStep).classList.add('active');
                updateProgress();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                document.getElementById('step' + currentStep).classList.remove('active');
                currentStep--;
                document.getElementById('step' + currentStep).classList.add('active');
                updateProgress();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }

        // Initialize progress on page load
        updateProgress();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const profileImageInput = document.getElementById('profileImage');
            const imagePreview = document.getElementById('imagePreview');
            const imagePreviewContainer = document.getElementById('imagePreviewContainer');

            if (profileImageInput) {
                profileImageInput.addEventListener('change', function () {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            if (imagePreview) {
                                imagePreview.src = e.target.result;
                                imagePreview.style.display = 'block';
                                if (imagePreview.nextElementSibling && imagePreview.nextElementSibling.classList.contains('image-placeholder')) {
                                    imagePreview.nextElementSibling.style.display = 'none';
                                }
                            }
                            if (imagePreviewContainer) {
                                imagePreviewContainer.style.display = 'block';
                            }
                        };
                        reader.readAsDataURL(file);
                    } else {
                        if (imagePreview) {
                            imagePreview.src = '#';
                        }
                        if (imagePreviewContainer) {
                            imagePreviewContainer.style.display = 'none';
                        }
                    }
                });
            }
        });
    </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.astrologers.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/astrologers/pages/profileupdate.blade.php ENDPATH**/ ?>