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
                            <i class="fa fa-chevron-right"></i> <span
                                class="breadcrumbtext"><?php echo e($getAstrologer['recordList'][0]['name']); ?></span>
                        </span>

                    </span>

                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade rounded mt-2 mt-md-5 " id="intake" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(135deg, #6d4ec6 0%, #5a3aa0 100%); border-radius: 8px 8px 0 0;">
                    <h4 class="modal-title font-weight-bold text-white">
                        <i class="fas fa-file-alt mr-2"></i>Intake Form
                    </h4>
                    <button type="button" class="close text-white" data-dismiss="modal" 
                            style="opacity: 1; text-shadow: none;">&times;</button>
                </div>
                <div class="modal-body pt-0 pb-0">
                    <div class="bg-white body">
                        <div class="row ">

                            <div class="col-lg-12 col-12 ">
                                <div class="mb-3 ">

                                    <form class="px-3 font-14" method="post" id="intakeForm">

                                        <?php if(authcheck()): ?>
                                            <input type="hidden" name="userId" value="<?php echo e(authcheck()['id']); ?>">
                                            <input type="hidden" name="countryCode"
                                                value="<?php echo e(authcheck()['countryCode']); ?>">
                                        <?php endif; ?>
                                        <input type="hidden" name="astrologerId"
                                            value="<?php echo e($getAstrologer['recordList'][0]['id']); ?>">
                                        <div class="row">
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="Name">Name<span class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="Name" name="name" placeholder="Enter Name"
                                                        type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['name'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="PhoneNumber">Phone No<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="PhoneNumber" name="phoneNumber" placeholder="Enter Phone"
                                                        type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['phoneNumber'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group">
                                                    <label for="Gender">Gender <span class="color-red">*</span></label>
                                                    <select class="form-control" id="Gender" name="gender">
                                                        <option value="Male"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['gender']) && $getIntakeForm['recordList'][0]['gender'] == 'Male' ? 'selected' : ''); ?>>
                                                            Male</option>
                                                        <option value="Female"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['gender']) && $getIntakeForm['recordList'][0]['gender'] == 'Female' ? 'selected' : ''); ?>>
                                                            Female</option>
                                                        <option value="Other"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['gender']) && $getIntakeForm['recordList'][0]['gender'] == 'Other' ? 'selected' : ''); ?>>
                                                            Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="BirthDate">Birthdate<span class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="BirthDate" name="birthDate" placeholder="Enter Birthdate"
                                                        type="date"
                                                        value="<?php echo e(isset($getIntakeForm['recordList'][0]['birthDate']) ? date('Y-m-d', strtotime($getIntakeForm['recordList'][0]['birthDate'])) : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="BirthTime">Birthtime<span class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="BirthTime" name="birthTime" placeholder="Enter Birthtime"
                                                        type="time"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['birthTime'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="BirthPlace">Birthplace<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="BirthPlace" name="birthPlace" placeholder="Enter Birthplace"
                                                        type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['birthPlace'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="MaritalStatus">Marital Status<span
                                                            class="color-red">*</span></label>
                                                    <select class="form-control" id="MaritalStatus" name="maritalStatus">
                                                        <option value="Single"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['maritalStatus']) && $getIntakeForm['recordList'][0]['maritalStatus'] == 'Single' ? 'selected' : ''); ?>>
                                                            Single</option>
                                                        <option value="Married"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['maritalStatus']) && $getIntakeForm['recordList'][0]['maritalStatus'] == 'Married' ? 'selected' : ''); ?>>
                                                            Married</option>
                                                        <option value="Divorced"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['maritalStatus']) && $getIntakeForm['recordList'][0]['maritalStatus'] == 'Divorced' ? 'selected' : ''); ?>>
                                                            Divorced</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="Occupation">Occupation<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="Occupation" name="occupation" placeholder="Enter Occupation"
                                                        type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['occupation'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="TopicOfConcern">Topic Of Concern<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="TopicOfConcern" name="topicOfConcern"
                                                        placeholder="Enter Topic Of Concern" type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['topicOfConcern'] ?? ''); ?>">
                                                </div>
                                            </div>

                                            <?php if(authcheck()): ?>
                                                <?php if($getAstrologer['recordList'][0]['isFreeAvailable'] != true): ?>
                                                <input type="hidden" name="isFreeSession"
                                                value="0">
                                                    <div class="col-12 py-3">
                                                        <div class="form-group mb-0">
                                                            <label>Select Time You want to chat<span
                                                                    class="color-red">*</span></label><br>
                                                            <div class="btn-group-toggle" data-toggle="buttons">
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="chat_duration"
                                                                        id="chat_duration300" value="300"> 5 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="chat_duration"
                                                                        id="chat_duration600" value="600"> 10 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="chat_duration"
                                                                        id="chat_duration900" value="900"> 15 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="chat_duration"
                                                                        id="chat_duration1200" value="1200"> 20 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="chat_duration"
                                                                        id="chat_duration1500" value="1500"> 25 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="chat_duration"
                                                                        id="chat_duration1800" value="1800"> 30 mins
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <input type="hidden" name="chat_duration"
                                                        value="<?php echo e($getIntakeForm['default_time']); ?>">
                                                        <input type="hidden" name="isFreeSession"
                                                        value="1">
                                                <?php endif; ?>
                                            <?php endif; ?>



                                        </div>

                                        <div class="col-12 col-md-12 py-3">
                                            <div class="row">

                                                <div class="col-12 pt-md-3 text-center mt-2">
                                                    <button class="font-weight-bold ml-0 w-100 btn btn-chat"
                                                        id="loaderintakeBtn" type="button" style="display:none;"
                                                        disabled>
                                                        <span class="spinner-border spinner-border-sm" role="status"
                                                            aria-hidden="true"></span> Loading...
                                                    </button>
                                                    <button type="submit"
                                                        class="btn btn-block btn-chat px-4 px-md-5 mb-2"
                                                        id="intakeBtn">Start Chat</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    

    

    <div class="modal fade rounded mt-2 mt-md-5 " id="callintake" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(135deg, #6d4ec6 0%, #5a3aa0 100%); border-radius: 8px 8px 0 0;">
                    <h4 class="modal-title font-weight-bold text-white">
                        <i class="fas fa-file-alt mr-2"></i>Intake Form
                    </h4>
                    <button type="button" class="close text-white" data-dismiss="modal" 
                            style="opacity: 1; text-shadow: none;">&times;</button>
                </div>
                <div class="modal-body pt-0 pb-0">
                    <div class="bg-white body">
                        <div class="row ">

                            <div class="col-lg-12 col-12 ">
                                <div class="mb-3 ">

                                    <form class="px-3 font-14" method="post" id="callintakeForm">

                                        <?php if(authcheck()): ?>
                                            <input type="hidden" name="userId" value="<?php echo e(authcheck()['id']); ?>">
                                            <input type="hidden" name="countryCode"
                                                value="<?php echo e(authcheck()['countryCode']); ?>">
                                        <?php endif; ?>
                                        <input type="hidden" name="astrologerId"
                                            value="<?php echo e($getAstrologer['recordList'][0]['id']); ?>">

                                        <input type="hidden" name="call_type" id="call_type" value="">
                                        <input type="hidden" name="astrocharge" id="astrocharge" value="">
                                        <div class="row">
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="Name">Name<span class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="Name" name="name" placeholder="Enter Name"
                                                        type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['name'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="PhoneNumber">Phone No<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="PhoneNumber" name="phoneNumber" placeholder="Enter Phone"
                                                        type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['phoneNumber'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group">
                                                    <label for="Gender">Gender <span class="color-red">*</span></label>
                                                    <select class="form-control" id="Gender" name="gender">
                                                        <option value="Male"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['gender']) && $getIntakeForm['recordList'][0]['gender'] == 'Male' ? 'selected' : ''); ?>>
                                                            Male</option>
                                                        <option value="Female"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['gender']) && $getIntakeForm['recordList'][0]['gender'] == 'Female' ? 'selected' : ''); ?>>
                                                            Female</option>
                                                        <option value="Other"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['gender']) && $getIntakeForm['recordList'][0]['gender'] == 'Other' ? 'selected' : ''); ?>>
                                                            Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="BirthDate">Birthdate<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="BirthDate" name="birthDate" placeholder="Enter Birthdate"
                                                        type="date"
                                                        value="<?php echo e(isset($getIntakeForm['recordList'][0]['birthDate']) ? date('Y-m-d', strtotime($getIntakeForm['recordList'][0]['birthDate'])) : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="BirthTime">Birthtime<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="BirthTime" name="birthTime" placeholder="Enter Birthtime"
                                                        type="time"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['birthTime'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="BirthPlace">Birthplace<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="BirthPlace" name="birthPlace" placeholder="Enter Birthplace"
                                                        type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['birthPlace'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="MaritalStatus">Marital Status<span
                                                            class="color-red">*</span></label>
                                                    <select class="form-control" id="MaritalStatus" name="maritalStatus">
                                                        <option value="Single"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['maritalStatus']) && $getIntakeForm['recordList'][0]['maritalStatus'] == 'Single' ? 'selected' : ''); ?>>
                                                            Single</option>
                                                        <option value="Married"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['maritalStatus']) && $getIntakeForm['recordList'][0]['maritalStatus'] == 'Married' ? 'selected' : ''); ?>>
                                                            Married</option>
                                                        <option value="Divorced"
                                                            <?php echo e(isset($getIntakeForm['recordList'][0]['maritalStatus']) && $getIntakeForm['recordList'][0]['maritalStatus'] == 'Divorced' ? 'selected' : ''); ?>>
                                                            Divorced</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="Occupation">Occupation<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="Occupation" name="occupation" placeholder="Enter Occupation"
                                                        type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['occupation'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="TopicOfConcern">Topic Of Concern<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="TopicOfConcern" name="topicOfConcern"
                                                        placeholder="Enter Topic Of Concern" type="text"
                                                        value="<?php echo e($getIntakeForm['recordList'][0]['topicOfConcern'] ?? ''); ?>">
                                                </div>
                                            </div>

                                            <?php if(authcheck()): ?>
                                                <?php if($getAstrologer['recordList'][0]['isFreeAvailable'] != true): ?>
                                                <input type="hidden" name="isFreeSession"
                                                value="0">
                                                    <div class="col-12 py-3">
                                                        <div class="form-group mb-0">
                                                            <label>Select Time You want to call<span
                                                                    class="color-red">*</span></label><br>
                                                            <div class="btn-group-toggle" data-toggle="buttons">
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="call_duration"
                                                                        id="call_duration300" value="300"> 5 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="call_duration"
                                                                        id="call_duration600" value="600"> 10 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="call_duration"
                                                                        id="call_duration900" value="900"> 15 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="call_duration"
                                                                        id="call_duration1200" value="1200"> 20 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="call_duration"
                                                                        id="call_duration1500" value="1500"> 25 mins
                                                                </label>
                                                                <label class="btn btn-info btn-sm">
                                                                    <input type="radio" name="call_duration"
                                                                        id="call_duration1800" value="1800"> 30 mins
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <input type="hidden" name="call_duration"
                                                        value="<?php echo e($getIntakeForm['default_time']); ?>">
                                                    <input type="hidden" name="isFreeSession"
                                                    value="1">
                                                <?php endif; ?>
                                            <?php endif; ?>



                                        </div>

                                        <div class="col-12 col-md-12 py-3">
                                            <div class="row">

                                                <div class="col-12 pt-md-3 text-center mt-2">
                                                    <button class="font-weight-bold ml-0 w-100 btn btn-chat"
                                                        id="callloaderintakeBtn" type="button" style="display:none;"
                                                        disabled>
                                                        <span class="spinner-border spinner-border-sm" role="status"
                                                            aria-hidden="true"></span> Loading...
                                                    </button>
                                                    <button type="submit"
                                                        class="btn btn-block btn-chat px-4 px-md-5 mb-2"
                                                        id="callintakeBtn">Start Call</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    




    <div class="bg-pink py-4 py-md-5 expert-profile-page-new" style="background: linear-gradient(135deg, #f8f0dc 0%, #fff9f0 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="d-block d-md-flex align-items-start">
                        <!--Expert profile image and badge -->
                        <div class="profile-image position-relative" style="flex-shrink: 0;">
                            <div style="position: relative; display: inline-block;">
                            <?php if($getAstrologer['recordList'][0]['profileImage']): ?>
                                <img src="/<?php echo e($getAstrologer['recordList'][0]['profileImage']); ?>"
                                        class="psychicpic img-fluid rounded-circle shadow-lg" 
                                        alt="<?php echo e($getAstrologer['recordList'][0]['name']); ?>"
                                        style="width: 160px; height: 160px; object-fit: cover; border: 5px solid #fff;" />
                            <?php else: ?>
                                <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png')); ?>"
                                        class="psychicpic img-fluid rounded-circle shadow-lg" 
                                        alt="<?php echo e($getAstrologer['recordList'][0]['name']); ?>"
                                        style="width: 160px; height: 160px; object-fit: cover; border: 5px solid #fff;" />
                            <?php endif; ?>
                            <div id="psychic-21599-status" class="status-badge specific-Clr-Online hidden"></div>
                                <div class="position-absolute" style="bottom: 5px; right: 5px; z-index: 10;">
                                <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/deals/seal.png')); ?>"
                                        width="52" height="52" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));" />
                            </div>
                                <div class="position-absolute" style="top: 10px; right: 10px; background: #10b981; color: white; padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: 600; box-shadow: 0 2px 8px rgba(16,185,129,0.3);">
                                    VERIFIED ASTROLOGER
                                </div>
                            </div>
                        </div>

                        <!-- Expert Information -->
                        <div class="ml-md-4 mt-3 mt-md-0" style="flex: 1;">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start flex-wrap mb-2">
                                <h1 class="font-weight-bold text-capitalize mb-0 font-24" style="font-size: 28px; color: #2c1f0f; margin-right: 15px;">
                                    <?php echo e($getAstrologer['recordList'][0]['name']); ?>

                                </h1>
                                    <?php if(authcheck()): ?>
                                    <?php if(!$getfollower): ?>
                                        <form id="followastro" class="ml-md-3">
                                            <input type="hidden" name="astrologerId" value="<?php echo e($getAstrologer['recordList'][0]['id']); ?>">
                                            <a class="btn bg-white rounded-pill text-dark font-weight-bold buttonshowmoreprofile shadow-sm" 
                                               role="button" id="btnFollow" 
                                               style="border: 2px solid #6d4ec6; transition: all 0.3s;">
                                                <i class="fas fa-plus mr-1"></i><span class="show-more-btn-txt">Follow</span>
                                        </a>
                                    </form>
                                    <?php else: ?>
                                        <form id="unfollowfollowastro" class="ml-md-3">
                                            <input type="hidden" name="astrologerId" value="<?php echo e($getAstrologer['recordList'][0]['id']); ?>">
                                            <a class="btn bg-white rounded-pill text-dark font-weight-bold buttonshowmoreprofile shadow-sm" 
                                               role="button" id="btnUnFollow"
                                               style="border: 2px solid #6d4ec6; transition: all 0.3s;">
                                                <i class="fas fa-check mr-1"></i><span class="show-more-btn-txt">Following</span>
                                        </a>
                                    </form>
                                    <?php endif; ?>
                                    <?php endif; ?>
                            </div>
                            
                            <div class="text-center text-md-left mb-3">
                                <div class="mb-2">
                                    <?php $__currentLoopData = $getAstrologer['recordList'][0]['primarySkill']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $primarySkill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="badge badge-pill mr-2 mb-2" 
                                              style="background: linear-gradient(135deg, #6d4ec6 0%, #5a3aa0 100%); color: white; padding: 8px 16px; font-size: 13px; font-weight: 500;">
                                            <i class="fas fa-star mr-1"></i><?php echo e($primarySkill['name']); ?>

                                        </span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                                <p class="font-16 m-0 profileCatName color-darkgray">
                                    <i class="fas fa-language mr-1" style="color: #6d4ec6;"></i>
                                    <?php $__currentLoopData = $getAstrologer['recordList'][0]['languageKnown']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="colorblack lang"><?php echo e($language['languageName']); ?><?php if($index < count($getAstrologer['recordList'][0]['languageKnown']) - 1): ?>,<?php endif; ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                            </div>
                            
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start flex-wrap" 
                                 style="background: rgba(255,255,255,0.6); padding: 15px; border-radius: 12px; gap: 15px;">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-comments mr-2" style="color: #6d4ec6; font-size: 18px;"></i>
                                    <span class="font-16 font-weight-normal color-darkgray">Reviews:</span>
                                    <span class="font-16 font-weight-bold colorblack ml-1"><?php echo e($getAstrologer['recordList'][0]['ratingcount']); ?></span>
                            </div>
                                <span class="font-16" style="color: #ddd;">|</span>
                                <div class="d-flex align-items-center">
                                    <span class="font-16 font-weight-normal color-darkgray mr-2">Rating:</span>
                                    <?php
                                        $totalReviews = count($getAstrologer['recordList'][0]['review']);
                                        $totalRating = 0;
                                        foreach ($getAstrologer['recordList'][0]['review'] as $review) {
                                            $totalRating += $review['rating'];
                                        }
                                        if ($totalReviews > 0) {
                                            $averageRating = $totalRating / $totalReviews;
                                        } else {
                                            $averageRating = 0;
                                        }
                                    ?>
                                    <span>
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <?php if($i <= $averageRating): ?>
                                                <i class="fas fa-star filled-star" style="color: #fbbf24; font-size: 18px;"></i>
                                            <?php else: ?>
                                                <i class="far fa-star empty-star" style="color: #d1d5db; font-size: 18px;"></i>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </span>
                            </div>
                                <span class="font-16" style="color: #ddd;">|</span>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-award mr-2" style="color: #6d4ec6; font-size: 18px;"></i>
                                    <span class="font-16 font-weight-normal color-darkgray">Exp:</span>
                                    <span class="colorblack ml-1 font-weight-bold"><?php echo e($getAstrologer['recordList'][0]['experienceInYears']); ?> Years</span>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                
                <div class="col-md-5 mt-4 mt-md-0">
                    <!--Expert Call Chat Buttons -->
                    <div class="profile-buttons d-flex flex-column align-items-center align-items-md-end">
                                <?php if($getAstrologer['recordList'][0]['chatStatus']=='Busy' || $getAstrologer['recordList'][0]['chatStatus']=='Offline' || empty($getAstrologer['recordList'][0]['chatStatus'])): ?>
                            <div class="my-2 w-100" style="max-width: 280px;">
                                <a class="btn btn-block btn-chat-profile expert-busy btn-opacity disabled shadow-sm" 
                                   style="background: #f3f4f6; border: 2px solid #d1d5db; color: #9ca3af; cursor: not-allowed;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-comments mr-2"></i>
                                            <span class="font-weight-bold">Chat</span>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-12" style="color: #ef4444; font-weight: 600;">
                                                <?php echo e($getAstrologer['recordList'][0]['chatStatus'] ?? 'Offline'); ?>

                                            </div>
                                            <div class="font-14"><?php echo e($currency['value']); ?> <?php echo e($getAstrologer['recordList'][0]['charge']); ?>/Min</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <?php else: ?>
                            <div class="my-2 w-100" style="max-width: 280px;">
                                <a class="btn btn-block btn-chat-profile shadow-lg" 
                                   data-toggle="modal" role="button" id="chat-btn"
                                   <?php if(!authcheck()): ?> data-target="#loginSignUp" <?php else: ?> data-target="#intake" <?php endif; ?>
                                   style="background: linear-gradient(135deg, #6d4ec6 0%, #5a3aa0 100%); color: white; border: none; padding: 15px 20px; border-radius: 12px; transition: all 0.3s;"
                                   onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(109,78,198,0.4)';"
                                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(109,78,198,0.3)';">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-comments mr-2"></i>
                                            <span class="font-weight-bold">Chat</span>
                                        </div>
                                        <div class="text-right">
                                            <?php if($getAstrologer['recordList'][0]['isFreeAvailable'] == true): ?>
                                                <div class="font-12" style="text-decoration: line-through; opacity: 0.7;">
                                                    <?php echo e($currency['value']); ?> <?php echo e($getAstrologer['recordList'][0]['charge']); ?>/Min
                                                </div>
                                                <div class="font-16 font-weight-bold">FREE</div>
                                            <?php else: ?>
                                                <div class="font-16 font-weight-bold"><?php echo e($currency['value']); ?> <?php echo e($getAstrologer['recordList'][0]['charge']); ?>/Min</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <?php endif; ?>

                                <?php if($getAstrologer['recordList'][0]['callStatus']=='Busy' || $getAstrologer['recordList'][0]['callStatus']=='Offline' || empty($getAstrologer['recordList'][0]['callStatus'])): ?>
                            <div class="my-2 w-100" style="max-width: 280px;">
                                <a class="btn btn-block btn-chat-profile expert-busy btn-opacity disabled shadow-sm" 
                                   style="background: #f3f4f6; border: 2px solid #d1d5db; color: #9ca3af; cursor: not-allowed;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-phone mr-2"></i>
                                            <span class="font-weight-bold">Audio Call</span>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-12" style="color: #ef4444; font-weight: 600;">
                                                <?php echo e($getAstrologer['recordList'][0]['callStatus'] ?? 'Offline'); ?>

                                            </div>
                                            <div class="font-14"><?php echo e($currency['value']); ?> <?php echo e($getAstrologer['recordList'][0]['charge']); ?>/Min</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <?php else: ?>
                            <div class="my-2 w-100" style="max-width: 280px;">
                                <a class="btn btn-block btn-chat-profile shadow-lg" 
                                   role="button" data-toggle="modal"
                                        <?php if(!authcheck()): ?> data-target="#loginSignUp" <?php else: ?> data-target="#callintake" <?php endif; ?>
                                   id="audio-call-btn"
                                   style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none; padding: 15px 20px; border-radius: 12px; transition: all 0.3s;"
                                   onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(16,185,129,0.4)';"
                                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(16,185,129,0.3)';">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-phone mr-2"></i>
                                            <span class="font-weight-bold">Audio Call</span>
                                        </div>
                                        <div class="text-right">
                                            <?php if($getAstrologer['recordList'][0]['isFreeAvailable'] == true): ?>
                                                <div class="font-12" style="text-decoration: line-through; opacity: 0.7;">
                                                    <?php echo e($currency['value']); ?> <?php echo e($getAstrologer['recordList'][0]['charge']); ?>/Min
                                                </div>
                                                <div class="font-16 font-weight-bold">FREE</div>
                                            <?php else: ?>
                                                <div class="font-16 font-weight-bold"><?php echo e($currency['value']); ?> <?php echo e($getAstrologer['recordList'][0]['charge']); ?>/Min</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <?php endif; ?>

                                <?php if($getAstrologer['recordList'][0]['callStatus']=='Busy' || $getAstrologer['recordList'][0]['callStatus']=='Offline' || empty($getAstrologer['recordList'][0]['callStatus'])): ?>
                            <div class="my-2 w-100" style="max-width: 280px;">
                                <a class="btn btn-block btn-chat-profile expert-busy btn-opacity disabled shadow-sm" 
                                   style="background: #f3f4f6; border: 2px solid #d1d5db; color: #9ca3af; cursor: not-allowed;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-video mr-2"></i>
                                            <span class="font-weight-bold">Video Call</span>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-12" style="color: #ef4444; font-weight: 600;">
                                                <?php echo e($getAstrologer['recordList'][0]['callStatus'] ?? 'Offline'); ?>

                                            </div>
                                            <div class="font-14"><?php echo e($currency['value']); ?> <?php echo e($getAstrologer['recordList'][0]['videoCallRate']); ?>/Min</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <?php else: ?>
                            <div class="my-2 w-100" style="max-width: 280px;">
                                <a class="btn btn-block btn-chat-profile shadow-lg" 
                                   role="button" data-toggle="modal"
                                        <?php if(!authcheck()): ?> data-target="#loginSignUp" <?php else: ?> data-target="#callintake" <?php endif; ?>
                                   id="video-call-btn"
                                   style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; border: none; padding: 15px 20px; border-radius: 12px; transition: all 0.3s;"
                                   onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(245,158,11,0.4)';"
                                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(245,158,11,0.3)';">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-video mr-2"></i>
                                            <span class="font-weight-bold">Video Call</span>
                                        </div>
                                        <div class="text-right">
                                            <?php if($getAstrologer['recordList'][0]['isFreeAvailable'] == true): ?>
                                                <div class="font-12" style="text-decoration: line-through; opacity: 0.7;">
                                                    <?php echo e($currency['value']); ?> <?php echo e($getAstrologer['recordList'][0]['videoCallRate']); ?>/Min
                                                </div>
                                                <div class="font-16 font-weight-bold">FREE</div>
                                            <?php else: ?>
                                                <div class="font-16 font-weight-bold"><?php echo e($currency['value']); ?> <?php echo e($getAstrologer['recordList'][0]['videoCallRate']); ?>/Min</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container profile-page">
        <div class="row my-4 profile-desc">
            <div class="col-sm-12" id="order2">
                <div class="bg-white div_Shadow pb-4" style="border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); padding: 30px;">
                    <div class="psychic-specialization mb-4">
                        <h3 class="font-20 weight500 colorblack m-0 font-weight-bold mb-3" style="color: #6d4ec6; font-size: 22px;">
                            <i class="fas fa-star mr-2"></i>Specialization
                        </h3>
                        <div id="profile-specialization">
                            <div class="d-flex flex-wrap">
                            <?php $__currentLoopData = $getAstrologer['recordList'][0]['astrologerCategoryId']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge badge-pill mr-2 mb-2" 
                                          style="background: linear-gradient(135deg, #fef0c7 0%, #fde68a 100%); color: #92400e; padding: 10px 18px; font-size: 14px; font-weight: 500; border: 1px solid #fbbf24;">
                                        <i class="fas fa-check-circle mr-1"></i><?php echo e($category['name']); ?>

                                    </span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                        </div>
                    </div>
                    
                    <div class="mb-4" style="border-top: 2px solid #f3f4f6; padding-top: 25px;">
                        <h3 class="font-20 weight500 colorblack m-0 font-weight-bold mb-3" style="color: #6d4ec6; font-size: 22px;">
                            <i class="fas fa-info-circle mr-2"></i>About My Services
                        </h3>
                        <p class="font15 colorblack m-0 p-0 pt-2" style="line-height: 1.8; color: #4b5563; font-size: 15px;">
                        <?php echo e($getAstrologer['recordList'][0]['whatwillDo']); ?>

                    </p>
                    </div>
                    
                    <div class="mb-4" style="border-top: 2px solid #f3f4f6; padding-top: 25px;">
                        <h3 class="font-20 weight500 colorblack m-0 font-weight-bold mb-3" style="color: #6d4ec6; font-size: 22px;">
                            <i class="fas fa-graduation-cap mr-2"></i>Experience &amp; Qualification
                            </h3>
                        <p class="font15 colorblack m-0 p-0 pt-2" style="line-height: 1.8; color: #4b5563; font-size: 15px;">
                            I am a practicing Tarot Card Reader with an experience of more than 
                            <strong style="color: #6d4ec6;"><?php echo e($getAstrologer['recordList'][0]['experienceInYears']); ?> years</strong> now. 
                            I obtained my <strong><?php echo e($getAstrologer['recordList'][0]['degree']); ?></strong> degree from 
                            <strong><?php echo e($getAstrologer['recordList'][0]['college']); ?></strong> college.
                        </p>
                    </div>

                    <div class="rounded border mt-4" style="border-radius: 16px; overflow: hidden; border: 2px solid #f3f4f6;">
                        <div class="d-block d-sm-flex align-items-center justify-content-between bg-pink-light p-3" 
                             style="background: linear-gradient(135deg, #fef0c7 0%, #fde68a 100%);">
                            <h3 class="font-18 weight500 colorblack m-0 font-weight-bold text-center text-md-left my-1" 
                                style="color: #92400e; font-size: 20px;">
                                <i class="fas fa-gift mr-2"></i>Send Gift to Expert
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#giftInfoModal" 
                                   style="color: #92400e; text-decoration: none; margin-left: 8px;">
                                    <i class="fas fa-info-circle" style="font-size: 16px;"></i>
                                </a>
                            </h3>
                        </div>
                        <form id="giftForm">
                            <div id="loadGiftItems" class="loadGiftItems d-flex align-items-center flex-wrap p-4" 
                                 style="gap: 15px; justify-content: center;">
                                <?php $__currentLoopData = $getGift['recordList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="loadGiftItem text-center" 
                                       data-gift-id="<?php echo e($gift['id']); ?>" 
                                       data-gift-amount="<?php echo e($gift['amount']); ?>"
                                       style="cursor: pointer; padding: 20px; border-radius: 12px; border: 2px solid #e5e7eb; 
                                              transition: all 0.3s; background: white; min-width: 120px; text-decoration: none; color: inherit;"
                                       onmouseover="this.style.borderColor='#6d4ec6'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(109,78,198,0.15)';"
                                       onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                                        <div>
                                            <img src="/<?php echo e($gift['image']); ?>" 
                                                 style="width: 70px; height: 70px; object-fit: contain; margin-bottom: 10px;">
                                            <p class="gift-name text-nowrap font-weight-bold mb-2" 
                                               style="margin-bottom: 8px; color: #2c1f0f; font-size: 14px;">
                                                <?php echo e($gift['name']); ?>

                                            </p>
                                            <span class="font-weight-bold" 
                                                  style="color: #6d4ec6; font-size: 16px;">
                                                <?php echo e($currency['value']); ?><?php echo e($gift['amount']); ?>

                                            </span>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <input type="hidden" name="astrologerId" value="<?php echo e($getAstrologer['recordList'][0]['id']); ?>">
                                <input type="hidden" name="giftId" value="">
                                <input type="hidden" name="giftamount" id="giftamount" value="">
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-3 mb-3">
                                <?php if(authcheck()): ?>
                                    <a class="btn send-gift active" id="send-gift" role="button" data-toggle="modal"
                                       style="background: linear-gradient(135deg, #6d4ec6 0%, #5a3aa0 100%); color: white; 
                                              padding: 12px 40px; border-radius: 25px; font-weight: 600; border: none;
                                              box-shadow: 0 4px 15px rgba(109,78,198,0.3); transition: all 0.3s;"
                                       onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(109,78,198,0.4)';"
                                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(109,78,198,0.3)';">
                                        <i class="fas fa-paper-plane mr-2"></i>Send Gift
                                    </a>
                                    <button class="btn send-gift active" id="send-giftBtn" type="button"
                                            style="display:none; background: #6d4ec6; color: white; padding: 12px 40px; 
                                                   border-radius: 25px; font-weight: 600; border: none;" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> 
                                        Loading...
                                    </button>
                                <?php else: ?>
                                    <a class="btn send-gift" id="send-gift" role="button"
                                       data-toggle="modal" data-target="#loginSignUp"
                                       style="background: linear-gradient(135deg, #6d4ec6 0%, #5a3aa0 100%); color: white; 
                                              padding: 12px 40px; border-radius: 25px; font-weight: 600; border: none;
                                              box-shadow: 0 4px 15px rgba(109,78,198,0.3); transition: all 0.3s;">
                                        <i class="fas fa-paper-plane mr-2"></i>Send Gift
                                    </a>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                    <!-- Modal -->
                    <div id="giftInfoModal" class="modal fade" role="dialog">
                        <div class="modal-dialog h-100 d-flex align-items-center">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="background: linear-gradient(135deg, #fef0c7 0%, #fde68a 100%);">
                                    <h4 class="modal-title font-weight-bold" style="color: #92400e;">
                                        <i class="fas fa-info-circle mr-2"></i>How does it work?
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" 
                                            style="opacity: 1; color: #92400e;">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <ol>
                                        <li>
                                            <p>Users can send virtual gifts to the Astrologers.</p>
                                        </li>
                                        <li>
                                            <p>Users will send these gifts voluntarily and the company does not guarantee
                                                any service in exchange of these gifts.</p>
                                        </li>
                                        <li>
                                            <p> These gifts are non-refundable.</p>
                                        </li>
                                        <li>
                                            <p> As per the Company&#39;s policies, gifts can be en-cashed by the Astrologers
                                                in monetary terms.</p>
                                        </li>
                                    </ol>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="schedule-list-containter mt-4" style="border-top: 2px solid #f3f4f6; padding-top: 25px;">
                        <h3 class="font-20 weight500 colorblack m-0 font-weight-bold mb-3" style="color: #6d4ec6; font-size: 22px;">
                            <i class="fas fa-calendar-check mr-2"></i>Check Online Availability
                        </h3>

                        <div id="scheduleContainer" 
                             class="bg-pink d-flex flex-wrap py-4 list-unstyled mt-3 justify-content-center px-3 schedule-progressbar"
                             style="border-radius: 16px; background: linear-gradient(135deg, #f8f0dc 0%, #fff9f0 100%); 
                                    border: 2px solid #f3f4f6; gap: 15px;">
                        <?php if(!empty($getAstrologer['recordList']) && !empty($getAstrologer['recordList'][0]['astrologerAvailability'])): ?>
                            <?php $__currentLoopData = $getAstrologer['recordList'][0]['astrologerAvailability']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $astrologerAvailability): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="active" style="flex: 1; min-width: 120px; max-width: 150px;">
                                    <div class="schedule-range pb-3">
                                            <div class="d-block text-center">
                                                <p class="font-weight-bold font-16 mb-1" style="color: #2c1f0f; font-size: 16px;">
                                                <?php echo e(\Carbon\Carbon::parse($astrologerAvailability['day'])->format('l')); ?>

                                            </p>
                                                <p class="color-red font-12 font-weight-semi-bold mb-3" style="color: #6d4ec6; font-size: 12px;">
                                                    <?php echo e(\Carbon\Carbon::parse($astrologerAvailability['day'])->format('M d')); ?>

                                            </p>
                                        </div>
                                    </div>
                                        <ul class="list-unstyled" style="margin: 0; padding: 0;">
                                        <?php if(!empty($astrologerAvailability['time']) && !empty($astrologerAvailability['time'][0])): ?>
                                                <li class="mb-2" 
                                                    style="background: white; padding: 8px 12px; border-radius: 8px; 
                                                           border: 2px solid #6d4ec6; font-size: 12px; font-weight: 600; color: #6d4ec6;">
                                                    <?php echo e($astrologerAvailability['time'][0]['fromTime'] ?? '-'); ?>

                                                </li>
                                                <li style="background: white; padding: 8px 12px; border-radius: 8px; 
                                                          border: 2px solid #6d4ec6; font-size: 12px; font-weight: 600; color: #6d4ec6;">
                                                    <?php echo e($astrologerAvailability['time'][0]['toTime'] ?? '-'); ?>

                                                </li>
                                        <?php else: ?>
                                                <li class="mb-2" 
                                                    style="background: #f3f4f6; padding: 8px 12px; border-radius: 8px; 
                                                           border: 2px solid #d1d5db; font-size: 12px; color: #9ca3af;">
                                                    -
                                                </li>
                                                <li style="background: #f3f4f6; padding: 8px 12px; border-radius: 8px; 
                                                          border: 2px solid #d1d5db; font-size: 12px; color: #9ca3af;">
                                                    -
                                                </li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-pink">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-md-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="bg-white div_Shadow" id="review" 
                     style="border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); padding: 30px;">
                    <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-4" 
                         style="border-bottom: 2px solid #f3f4f6;">
                        <h3 class="font-20 colorblack pb-0 font-weight-bold mb-0" style="color: #6d4ec6; font-size: 24px;">
                            <i class="fas fa-star mr-2"></i>Reviews 
                            <span class="color-red" style="color: #f59e0b;"><?php echo e($getAstrologer['recordList'][0]['ratingcount']); ?></span>
                        </h3>
                        <?php if($getAstrologer['recordList'][0]['rating'] > 0): ?>
                            <div class="d-flex align-items-center">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <?php if($i <= $averageRating): ?>
                                        <i class="fas fa-star filled-star mr-1" style="color: #fbbf24; font-size: 20px;"></i>
                                        <?php else: ?>
                                        <i class="far fa-star empty-star mr-1" style="color: #d1d5db; font-size: 20px;"></i>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                <span class="ml-2 font-weight-bold" style="color: #6d4ec6; font-size: 18px;">
                                    <?php echo e(number_format($averageRating, 1)); ?>

                                </span>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <?php if($getAstrologer['recordList'][0]['rating'] > 0): ?>
                    <div class="reviewrapper list row">
                        <?php $__currentLoopData = $getAstrologer['recordList'][0]['review']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="reviewslist col-sm-12 col-md-6 mb-4 <?php echo e($index % 2 == 0 ? 'even' : 'odd'); ?>">
                                    <div class="bg-light p-3 rounded" 
                                         style="background: #f9fafb; border-radius: 12px; height: 100%; border-left: 4px solid #6d4ec6;">
                                        <div class="d-flex align-items-start mb-3">
                                            <div class="review-profile-pic d-flex align-items-center justify-content-center bg-pink mr-3"
                                                 style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
                                                    <?php if($review['profile']): ?>
                                                    <img src="/<?php echo e($review['profile']); ?>" 
                                                         class="review-profile-pic" 
                                                         alt=""
                                                         style="width: 100%; height: 100%; object-fit: cover;">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img.png')); ?>"
                                                         class="review-profile-pic" 
                                                         alt=""
                                                         style="width: 100%; height: 100%; object-fit: cover;">
                                                    <?php endif; ?>
                                            </div>
                                            <div style="flex: 1;">
                                                <p class="font-16 weight500 m-0 font-weight-bold mb-1" style="color: #2c1f0f;">
                                                    <?php echo e($review['userName'] ? $review['userName'] : 'Anonymous'); ?>

                                                </p>
                                                <div class="mb-2">
                                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                                        <?php if($i <= $review['rating']): ?>
                                                            <i class="fas fa-star" style="color: #fbbf24; font-size: 14px;"></i>
                                                        <?php else: ?>
                                                            <i class="far fa-star" style="color: #d1d5db; font-size: 14px;"></i>
                                                        <?php endif; ?>
                                                    <?php endfor; ?>
                                            </div>
                                            </div>
                                        </div>
                                        <p class="font-14 mt-2 mb-0" style="color: #4b5563; line-height: 1.6;">
                                        <?php echo e($review['review']); ?>

                                    </p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                        <div class="text-center py-5">
                            <i class="fas fa-comment-slash" style="font-size: 48px; color: #d1d5db; margin-bottom: 15px;"></i>
                            <p class="font-16 mb-0" style="color: #9ca3af;">No Reviews Found</p>
                            <p class="font-14 mt-2" style="color: #9ca3af;">Be the first to review this astrologer!</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    /* Enhanced UI Styles for Astrologer Details Page */
    .expert-profile-page-new {
        position: relative;
        overflow: hidden;
    }
    
    .expert-profile-page-new::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(109,78,198,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
        opacity: 0.3;
        pointer-events: none;
    }
    
    .profile-image img {
        transition: transform 0.3s ease;
    }
    
    .profile-image:hover img {
        transform: scale(1.05);
    }
    
    .btn-chat-profile {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .btn-chat-profile:not(.disabled):hover {
        transform: translateY(-3px);
    }
    
    .loadGiftItem {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .loadGiftItem:hover {
        transform: translateY(-5px) scale(1.02);
    }
    
    #scheduleContainer li {
        transition: all 0.3s ease;
    }
    
    #scheduleContainer li:hover {
        transform: translateY(-3px);
    }
    
    .reviewslist {
        animation: fadeInUp 0.5s ease forwards;
        opacity: 0;
    }
    
    .reviewslist:nth-child(1) { animation-delay: 0.1s; }
    .reviewslist:nth-child(2) { animation-delay: 0.2s; }
    .reviewslist:nth-child(3) { animation-delay: 0.3s; }
    .reviewslist:nth-child(4) { animation-delay: 0.4s; }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .modal-content {
        border-radius: 16px;
        overflow: hidden;
        border: none;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    }
    
    .form-control:focus {
        border-color: #6d4ec6;
        box-shadow: 0 0 0 0.2rem rgba(109, 78, 198, 0.25);
    }
    
    .btn-group-toggle .btn {
        transition: all 0.3s ease;
    }
    
    .btn-group-toggle .btn.active {
        background: linear-gradient(135deg, #6d4ec6 0%, #5a3aa0 100%);
        color: white;
        border-color: #6d4ec6;
    }
    
    @media (max-width: 768px) {
        .expert-profile-page-new .profile-image img {
            width: 120px !important;
            height: 120px !important;
        }
        
        .profile-buttons {
            width: 100% !important;
            max-width: 100% !important;
        }
        
        .profile-buttons > div {
            max-width: 100% !important;
        }
        
        #scheduleContainer {
            flex-direction: column;
        }
        
        #scheduleContainer li {
            max-width: 100% !important;
            margin-bottom: 15px;
        }
    }
    
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
    
    /* Custom scrollbar for review section */
    .reviewrapper {
        scrollbar-width: thin;
        scrollbar-color: #6d4ec6 #f3f4f6;
    }
    
    .reviewrapper::-webkit-scrollbar {
        width: 8px;
    }
    
    .reviewrapper::-webkit-scrollbar-track {
        background: #f3f4f6;
        border-radius: 10px;
    }
    
    .reviewrapper::-webkit-scrollbar-thumb {
        background: #6d4ec6;
        border-radius: 10px;
    }
    
    .reviewrapper::-webkit-scrollbar-thumb:hover {
        background: #5a3aa0;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


    <script>
        $(document).ready(function() {
            $('.loadGiftItem').on('click', function() {
                $('.loadGiftItem').css({
                    'box-shadow': 'none',
                    'background': 'white',
                    'border-color': '#e5e7eb',
                    'transform': 'translateY(0)'
                });
                $(this).css({
                    'box-shadow': '0 8px 20px rgba(109,78,198,0.25)',
                    'background': 'linear-gradient(135deg, #fef0c7 0%, #fde68a 100%)',
                    'border-color': '#6d4ec6',
                    'transform': 'translateY(-5px)'
                });

                var selectedGiftId = $(this).data('gift-id');
                 var giftamount = $(this).data('gift-amount');
                 
                $('input[name="giftId"]').val(selectedGiftId);
                $('input[name="giftamount"]').val(giftamount);
            });

           

            $('#send-gift').click(function(e) {
                e.preventDefault();
                var giftamount=$("#giftamount").val();
                // console.log(giftamount);return false;
                <?php
                    use Symfony\Component\HttpFoundation\Session\Session;
                    $session = new Session();
                    $token = $session->get('token');
                    
                $wallet_amount = '';
                if (authcheck()) {
                    $wallet_amount = authcheck()['totalWalletAmount'];
                }
               
                ?>
                
                var wallet_amount = "<?php echo e($wallet_amount); ?>";

                $('#send-gift').hide();
                $('#send-giftBtn').show();
                setTimeout(function() {
                    $('#send-gift').show();
                    $('#send-giftBtn').hide();
                }, 7000);


                var formData = $('#giftForm').serialize();
                
                // console.log(parseInt(giftamount),'giftamnt');
                // console.log(parseInt(wallet_amount), 'waltamnt');
              if (parseInt(giftamount) > parseInt(wallet_amount)) { 
                  toastr.error('Insufficient Balance'); 
                //   console.log("hhh");
              return false; 
                  
              }

                $.ajax({
                    url: '<?php echo e(route('api.sendGifts', ['token' => $token])); ?>',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        toastr.success('Gift Sent Successfully');
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    },
                    error: function(xhr, status, error) {
                        toastr.error(xhr.responseText);
                    }
                });
            });

            // Follow
            $('#btnFollow').click(function(e) {
                e.preventDefault();

                <?php
                    $token = $session->get('token');
                ?>

                var formData = $('#followastro').serialize();
                $.ajax({
                    url: '<?php echo e(route('api.addFollowing', ['token' => $token])); ?>',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        toastr.success('Followed Successfully');
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    },
                    error: function(xhr, status, error) {
                        toastr.error(xhr.responseText);
                    }
                });
            });

            // Unfollow
            $('#btnUnFollow').click(function(e) {
                e.preventDefault();
                <?php
                    $token = $session->get('token');
                ?>

                var formData = $('#unfollowfollowastro').serialize();
                $.ajax({
                    url: '<?php echo e(route('api.updateFollowing', ['token' => $token])); ?>',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        toastr.success('UnFollowed Successfully');
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    },
                    error: function(xhr, status, error) {
                        toastr.error(xhr.responseText);
                    }
                });
            });


        });
    </script>

    
    <script>
        const firestore = firebase.firestore();
        // Function to send a message
        function sendMessage(senderId, receiverId, message, isEndMessage, attachementPath) {
            const chatRef = firestore.collection('chats').doc(`${receiverId}_${senderId}`).collection('userschat').doc(
                receiverId).collection('messages');
            const timestamp = new Date();
            // Generate a unique ID for the message
            const messageId = chatRef.doc().id;

            chatRef.doc(messageId).set({
                    id: null,
                    createdAt: timestamp,
                    invitationAcceptDecline: null,
                    isDelete: false,
                    isEndMessage: isEndMessage,
                    isRead: false,
                    messageId: messageId,
                    reqAcceptDecline: null,
                    status: null,
                    updatedAt: timestamp,
                    url: null,
                    userId1: senderId,
                    userId2: receiverId,
                    message: message,
                    attachementPath: attachementPath, // Pass attachementPath to the message object
                })
                .then(() => {
                    // console.log("Message sent with ID: ", messageId);
                })
                .catch((error) => {
                    console.error("Error sending message: ", error);
                });
        }




        $(document).ready(function() {
            $('#intakeBtn').click(function(e) {
                e.preventDefault();

                <?php if(authcheck()): ?>
                    var sessionAvailable = "<?php echo e($isChatSessionavailable); ?>";
                <?php endif; ?>


                if (sessionAvailable == false) {
                    toastr.error('Your request is already there');
                    return false;
                }

                $('#intakeBtn').hide();
                $('#loaderintakeBtn').show();
                setTimeout(function() {
                    $('#intakeBtn').show();
                    $('#loaderintakeBtn').hide();
                }, 3000);


                var astrocharge = <?php echo e($getAstrologer['recordList'][0]['charge']); ?>;


                <?php
                $wallet_amount = '';
                if (authcheck()) {
                    $wallet_amount = authcheck()['totalWalletAmount'];
                }
                ?>

                var formData = $('#intakeForm').serialize();


                // Parse form data as URL parameters
                var urlParams = new URLSearchParams(formData);
                var chat_duration = parseInt(urlParams.get('chat_duration'));

                var chat_duration_minutes = Math.ceil(chat_duration / 60);

                var total_charge = astrocharge * chat_duration_minutes;

                var isFreeAvailable = "<?php echo e($getAstrologer['recordList'][0]['isFreeAvailable']); ?>";

                var wallet_amount = "<?php echo e($wallet_amount); ?>";

                // for message send
                var astrologerId="<?php echo e($getAstrologer['recordList'][0]['id']); ?>";
                <?php if(authcheck()): ?>
                var userId="<?php echo e(authcheck()['id']); ?>";
                <?php endif; ?>
                var formDatas = $('#intakeForm').serializeArray();
                var name = formDatas.find(item => item.name === 'name').value;
                var gender = formDatas.find(item => item.name === 'gender').value;
                var birthDate = formDatas.find(item => item.name === 'birthDate').value;
                var birthTime = formDatas.find(item => item.name === 'birthTime').value;
                var birthPlace = formDatas.find(item => item.name === 'birthPlace').value;
                var maritalStatus = formDatas.find(item => item.name === 'maritalStatus').value;
                var topicOfConcern = formDatas.find(item => item.name === 'topicOfConcern').value;

                var message = `Hi <?php echo e($getAstrologer['recordList'][0]['name']); ?>

                Below are my details:

                Name: ${name},
                Gender: ${gender},
                DOB: ${birthDate},
                TOB: ${birthTime},
                POB: ${birthPlace},
                Marital status: ${maritalStatus},
                TOPIC: ${topicOfConcern}

                This is an automated message to confirm that chat has started.`;


                // Check if free chat is available and wallet has sufficient balance
                if (isFreeAvailable != true) {
                    if (total_charge <= wallet_amount) {
                        $.ajax({
                            url: "<?php echo e(route('api.addChatRequest', ['token' => $token])); ?>",
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                // console.log('Chat Request Sent');
                            },
                            error: function(xhr, status, error) {
                                toastr.error(xhr.responseText);
                            }
                        });
                        $.ajax({
                            url: "<?php echo e(route('api.intakeForm', ['token' => $token])); ?>",
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                sendMessage(userId, astrologerId, message, false,'');
                                setTimeout(function() {
                                    toastr.success(
                                        'Chat Request Sent ! you will be notified if astrologer accept your request.'
                                        );
                                    window.location.reload();

                                }, 2000);
                            },
                            error: function(xhr, status, error) {
                                toastr.error(xhr.responseText);
                            }
                        });
                    } else {
                        toastr.error('Insufficient balance. Please recharge your wallet.');
                    }
                } else {

                    $.ajax({
                        url: "<?php echo e(route('api.addChatRequest', ['token' => $token])); ?>",
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            // console.log('Chat Request Sent');
                        },
                        error: function(xhr, status, error) {
                            toastr.error(xhr.responseText);
                        }
                    });

                    $.ajax({
                        url: "<?php echo e(route('api.intakeForm', ['token' => $token])); ?>",
                        type: 'POST',
                        data: formData,
                        success: function(response) {

                            setTimeout(function() {
                                sendMessage(userId, astrologerId, message, false,'');
                                toastr.success(
                                    'Chat Request Sent ! you will be notified if astrologer accept your request.'
                                    );
                                window.location.reload();

                            }, 2000);
                        },
                        error: function(xhr, status, error) {
                            toastr.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {


            $('#audio-call-btn').click(function() {
                $("#call_type").val("10");
                $("#astrocharge").val("<?php echo e($getAstrologer['recordList'][0]['charge']); ?>");

            });

            $('#video-call-btn').click(function() {
                $("#call_type").val("11");
                $("#astrocharge").val("<?php echo e($getAstrologer['recordList'][0]['videoCallRate']); ?>");

            });



            $('#callintakeBtn').click(function(e) {
                e.preventDefault();


                <?php if(authcheck()): ?>
                    var sessionAvailable = "<?php echo e($isCallSessionavailable); ?>";
                <?php endif; ?>


                if (sessionAvailable == false) {
                    toastr.error('Your request is already there');
                    return false;
                }

                $('#callintakeBtn').hide();
                $('#callloaderintakeBtn').show();
                setTimeout(function() {
                    $('#callintakeBtn').show();
                    $('#callloaderintakeBtn').hide();
                }, 3000);

                astrocharge = $("#astrocharge").val();



                <?php
                $wallet_amount = '';
                if (authcheck()) {
                    $wallet_amount = authcheck()['totalWalletAmount'];
                }
                ?>

                var formData = $('#callintakeForm').serialize();

                // Parse form data as URL parameters
                var urlParams = new URLSearchParams(formData);
                var call_duration = parseInt(urlParams.get('call_duration'));

                var call_duration_minutes = Math.ceil(call_duration / 60);

                var total_charge = astrocharge * call_duration_minutes;


                var isFreeAvailable = "<?php echo e($getAstrologer['recordList'][0]['isFreeAvailable']); ?>";

                var wallet_amount = "<?php echo e($wallet_amount); ?>";



                // Check if free chat is available and wallet has sufficient balance
                if (isFreeAvailable != true) {
                    if (total_charge <= wallet_amount) {
                        $.ajax({
                            url: "<?php echo e(route('api.addCallRequest', ['token' => $token])); ?>",
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                // console.log('Call Request Sent');
                            },
                            error: function(xhr, status, error) {
                                toastr.error(xhr.responseText);
                            }
                        });
                        $.ajax({
                            url: "<?php echo e(route('api.intakeForm', ['token' => $token])); ?>",
                            type: 'POST',
                            data: formData,
                            success: function(response) {

                                setTimeout(function() {
                                    toastr.success(
                                        'Call Request Sent ! you will be notified if astrologer accept your request.'
                                        );
                                    window.location.href = "<?php echo e(route('front.home')); ?>";

                                }, 2000);
                            },
                            error: function(xhr, status, error) {
                                toastr.error(xhr.responseText);
                            }
                        });
                    } else {
                        toastr.error('Insufficient balance. Please recharge your wallet.');
                    }
                } else {

                    $.ajax({
                        url: "<?php echo e(route('api.addCallRequest', ['token' => $token])); ?>",
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            // console.log('Call Request Sent');
                        },
                        error: function(xhr, status, error) {
                            toastr.error(xhr.responseText);
                        }
                    });

                    $.ajax({
                        url: "<?php echo e(route('api.intakeForm', ['token' => $token])); ?>",
                        type: 'POST',
                        data: formData,
                        success: function(response) {

                            setTimeout(function() {
                                toastr.success(
                                    'Call Request Sent ! you will be notified if astrologer accept your request.'
                                    );
                                window.location.href = "<?php echo e(route('front.home')); ?>";

                            }, 2000);
                        },
                        error: function(xhr, status, error) {
                            toastr.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\www\bunny\astrosaar\resources\views/frontend/pages/astrologer-details.blade.php ENDPATH**/ ?>