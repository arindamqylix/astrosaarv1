@extends('frontend.layout.master')
@section('content')
<style>
    /* Grid Layout Container */
    .astrologer-grid-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        padding: 20px 0;
    }

    /* Individual Astrologer Card */
    .astrologer-card-grid {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border: 1px solid #e0e0e0;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .astrologer-card-grid:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-color: #d0d0d0;
    }

    /* Profile Image Section */
    .card-image-section {
        margin-bottom: 12px;
    }

    .profile-image-link {
        display: inline-block;
        text-decoration: none;
    }

    .profile-image-wrapper {
        position: relative;
        width: 100px;
        height: 100px;
        margin: 0 auto 12px;
    }

    .profile-image {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e5b86a;
        background: #e8e8e8;
    }

    .online-indicator {
        position: absolute;
        top: 2px;
        right: 2px;
        width: 24px;
        height: 24px;
        background-color: #4caf50;
        border-radius: 50%;
        border: 2px solid #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 12px;
    }

    /* Info Section */
    .card-info-section {
        width: 100%;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .astrologer-name-link {
        text-decoration: none;
        color: inherit;
    }

    .astrologer-name {
        font-family: 'Playfair Display', serif;
        font-size: 17px;
        font-weight: 700;
        color: #2c1f0f;
        margin: 0 0 6px 0;
        text-transform: capitalize;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .astrologer-specialties {
        font-size: 14px;
        color: #2c1f0f;
        font-weight: 500;
        margin: 0 0 5px 0;
        line-height: 1.4;
    }

    .astrologer-languages {
        font-size: 13px;
        color: #6d4ec6;
        margin: 0 0 6px 0;
        font-weight: 500;
    }

    /* Rating Section */
    .rating-section {
        margin: 6px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2px;
        flex-wrap: wrap;
    }

    .star-filled {
        color: #e5b86a;
        font-size: 14px;
    }

    .star-empty {
        color: #ddd;
        font-size: 14px;
    }

    .astrologer-experience {
        font-size: 13px;
        color: #2c1f0f;
        margin: 5px 0;
        font-weight: 500;
    }

    /* Price Section */
    .price-section {
        margin: 8px 0 10px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .price-current {
        font-size: 16px;
        font-weight: 600;
        color: #2c1f0f;
    }

    .price-striked {
        font-size: 14px;
        color: #999;
        text-decoration: line-through;
        margin-right: 5px;
    }

    .free-badge {
        font-size: 11px;
        font-weight: 700;
        color: #fff;
        background-color: #e5b86a;
        padding: 3px 8px;
        border-radius: 4px;
        text-transform: uppercase;
    }

    /* Call Button */
    .call-button-section {
        margin-top: 12px;
        width: 100%;
    }

    .btn-call-active {
        display: block;
        width: 100%;
        padding: 10px 20px;
        border-radius: 8px;
        background-color: #6d4ec6;
        color: #fff;
        border: none;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        text-align: center;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-call-active:hover {
        background-color: #5a3fa8;
        color: #fff;
        transform: translateY(-1px);
        box-shadow: 0 3px 10px rgba(109, 78, 198, 0.25);
    }

    .btn-call-disabled {
        display: block;
        width: 100%;
        padding: 12px 20px;
        border-radius: 10px;
        background-color: #f5f5f5;
        color: #999;
        border: 2px solid #e0e0e0;
        font-weight: 600;
        font-size: 15px;
        cursor: not-allowed;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .astrologer-grid-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 768px) {
        .astrologer-grid-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            padding: 15px 0;
        }

        .astrologer-card-grid {
            padding: 15px;
        }

        .profile-image-wrapper {
            width: 100px;
            height: 100px;
        }

        .profile-image {
            border-width: 3px;
        }
    }

    @media (max-width: 480px) {
        .astrologer-grid-container {
            grid-template-columns: 1fr;
        }
    }

    /* Filter Buttons Styling */
    .filter-btn {
        background-color: #fff;
        color: #666;
        border-color: #e0e0e0 !important;
    }

    .filter-btn:hover {
        background-color: #f8f0dc;
        border-color: #e5b86a !important;
        color: #2c1f0f;
        transform: translateY(-2px);
    }

    .filter-btn.active {
        background-color: #e5b86a;
        color: #fff;
        border-color: #e5b86a !important;
        box-shadow: 0 2px 8px rgba(229, 184, 106, 0.3);
    }
</style>



    <div class="pt-2 pb-2 d-none d-md-block astroway-breadcrumb" style="background-color: #6d4ec6;">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    <span style="text-transform: capitalize;">
                        <span class="text-white breadcrumbs" style="font-size: 14px;">
                            <a href="{{ route('front.home') }}" style="color:white;text-decoration:none; transition: color 0.3s ease;" onmouseover="this.style.color='#e5b86a'" onmouseout="this.style.color='white'">
                                <i class="fa fa-home font-18"></i>
                            </a>
                            <i class="fa fa-chevron-right mx-2"></i> 
                            <span class="breadcrumbtext">Talk To Astrologer</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>


    {{--  Call Intake --}}

    <div class="modal fade rounded mt-2 mt-md-5 " id="callintake" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title font-weight-bold">
                        Intake Form
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body pt-0 pb-0">
                    <div class="bg-white body">
                        <div class="row ">

                            <div class="col-lg-12 col-12 ">
                                <div class="mb-3 ">

                                    <form class="px-3 font-14" method="post" id="callintakeForm">

                                        @if (authcheck())
                                            <input type="hidden" name="userId" value="{{ authcheck()['id'] }}">
                                            <input type="hidden" name="countryCode"
                                                value="{{ authcheck()['countryCode'] }}">
                                        @endif
                                        {{-- @if($getAstrologer['recordList'])
                                        <input type="hidden" name="astrologerId"
                                            value="{{ $getAstrologer['recordList'][0]['id'] }}">
                                        @endif --}}
                                        <input type="hidden" name="call_type" id="call_type" value="">
                                        <input type="hidden" name="astrocharge" id="astrocharge" value="">
                                        <input type="hidden" name="astrologerId" id="astroId" value="">
                                        <div class="row">
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="Name">Name<span class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="Name" name="name" placeholder="Enter Name"
                                                        type="text"
                                                        value="{{ $getIntakeForm['recordList'][0]['name'] ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="PhoneNumber">Phone No<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="PhoneNumber" name="phoneNumber" placeholder="Enter Phone"
                                                        type="text"
                                                        value="{{ $getIntakeForm['recordList'][0]['phoneNumber'] ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group">
                                                    <label for="Gender">Gender <span class="color-red">*</span></label>
                                                    <select class="form-control" id="Gender" name="gender">
                                                        <option value="Male"
                                                            {{ isset($getIntakeForm['recordList'][0]['gender']) && $getIntakeForm['recordList'][0]['gender'] == 'Male' ? 'selected' : '' }}>
                                                            Male</option>
                                                        <option value="Female"
                                                            {{ isset($getIntakeForm['recordList'][0]['gender']) && $getIntakeForm['recordList'][0]['gender'] == 'Female' ? 'selected' : '' }}>
                                                            Female</option>
                                                        <option value="Other"
                                                            {{ isset($getIntakeForm['recordList'][0]['gender']) && $getIntakeForm['recordList'][0]['gender'] == 'Other' ? 'selected' : '' }}>
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
                                                        value="{{ isset($getIntakeForm['recordList'][0]['birthDate']) ? date('Y-m-d', strtotime($getIntakeForm['recordList'][0]['birthDate'])) : '' }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="BirthTime">Birthtime<span class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="BirthTime" name="birthTime" placeholder="Enter Birthtime"
                                                        type="time"
                                                        value="{{ $getIntakeForm['recordList'][0]['birthTime'] ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="BirthPlace">Birthplace<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="BirthPlace" name="birthPlace" placeholder="Enter Birthplace"
                                                        type="text"
                                                        value="{{ $getIntakeForm['recordList'][0]['birthPlace'] ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="MaritalStatus">Marital Status<span
                                                            class="color-red">*</span></label>
                                                    <select class="form-control" id="MaritalStatus" name="maritalStatus">
                                                        <option value="Single"
                                                            {{ isset($getIntakeForm['recordList'][0]['maritalStatus']) && $getIntakeForm['recordList'][0]['maritalStatus'] == 'Single' ? 'selected' : '' }}>
                                                            Single</option>
                                                        <option value="Married"
                                                            {{ isset($getIntakeForm['recordList'][0]['maritalStatus']) && $getIntakeForm['recordList'][0]['maritalStatus'] == 'Married' ? 'selected' : '' }}>
                                                            Married</option>
                                                        <option value="Divorced"
                                                            {{ isset($getIntakeForm['recordList'][0]['maritalStatus']) && $getIntakeForm['recordList'][0]['maritalStatus'] == 'Divorced' ? 'selected' : '' }}>
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
                                                        value="{{ $getIntakeForm['recordList'][0]['occupation'] ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 py-2">
                                                <div class="form-group mb-0">
                                                    <label for="TopicOfConcern">Topic Of Concern<span
                                                            class="color-red">*</span></label>
                                                    <input class="form-control border-pink matchInTxt shadow-none"
                                                        id="TopicOfConcern" name="topicOfConcern"
                                                        placeholder="Enter Topic Of Concern" type="text"
                                                        value="{{ $getIntakeForm['recordList'][0]['topicOfConcern'] ?? '' }}">
                                                </div>
                                            </div>

                                            @if (authcheck())
                                                @if ($isFreeAvailable == false)
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
                                                @else
                                                    <input type="hidden" name="call_duration"
                                                        value="{{ $getIntakeForm['default_time'] }}">
                                                        <input type="hidden" name="isFreeSession"
                                                        value="1">
                                                @endif
                                            @endif



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

    {{-- End  Call --}}



    <!-- Header Section with Balance and Navigation -->
    <div class="py-3" style="background-color: #ffffff; border-bottom: 1px solid #f0f0f0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between flex-wrap" style="gap: 15px;">
                        <!-- Left: Stars and Balance -->
                        <div class="d-flex align-items-center flex-wrap" style="gap: 15px;">
                            <div class="d-flex align-items-center" style="gap: 5px;">
                                <i class="fas fa-star" style="color: #e5b86a; font-size: 16px;"></i>
                                <i class="fas fa-star" style="color: #e5b86a; font-size: 16px;"></i>
                                <i class="fas fa-star" style="color: #e5b86a; font-size: 16px;"></i>
                            </div>
                            <span class="d-none d-sm-inline" style="color: #2c1f0f; font-size: 14px; font-weight: 600;">
                                Available Balance: <span style="color: #6d4ec6;">{{ $currency['value'] }}{{ number_format($walletBalance ?? 0, 2) }}</span>
                            </span>
                        </div>
                        
                        <!-- Center: Title -->
                        <div class="text-center flex-grow-1 d-none d-md-block">
                            <h1 class="page-title" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 28px; font-weight: 700; margin: 0;">
                                Talk To Astrologer
                            </h1>
                        </div>
                        
                        <!-- Right: Navigation -->
                        <div class="d-flex align-items-center flex-wrap" style="gap: 10px;">
                            <a href="{{ route('front.walletRecharge') }}" 
                               class="d-none d-sm-inline"
                               style="color: #4caf50; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.3s ease; white-space: nowrap;"
                               onmouseover="this.style.color='#45a049'" onmouseout="this.style.color='#4caf50'">
                                Recharge
                            </a>
                            <span class="d-none d-md-inline" style="color: #2c1f0f; font-size: 14px; font-weight: 600; white-space: nowrap;">Filter</span>
                            <span class="d-none d-md-inline" style="color: #2c1f0f; font-size: 14px; font-weight: 600; white-space: nowrap;">Sort by</span>
                            <form action="{{ route('front.talkList') }}" method="GET" class="d-inline-flex align-items-center" style="position: relative;">
                                <input value="{{ isset($searchTerm) ? $searchTerm : '' }}"
                                    class="form-control" name="s"
                                    placeholder="Search by Name" type="search" autocomplete="off"
                                    style="border: 1px solid #e0e0e0; padding: 8px 35px 8px 12px; border-radius: 20px; font-size: 13px; width: 150px; height: 36px;">
                                <button type="submit" style="position: absolute; right: 8px; background: none; border: none; color: #6d4ec6; cursor: pointer; padding: 0;">
                                    <i class="fa fa-search" style="font-size: 14px;"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Title -->
    <div class="d-block d-md-none py-3" style="background-color: #fff9f0;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 28px; font-weight: 700; margin: 0;">
                        Talk To Astrologer
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-md-4 expert-search-section" style="background-color: #fff9f0; padding: 20px 0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="experts" style="overflow:hidden;">
                    <div id="expert-search" class="my-3 my-md-0">
                        <!--For Search Component-->
                        <div class="expert-search-form">
                            <!-- Filter Buttons -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="filter-buttons-wrapper" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 20px;">
                                        <a href="{{ route('front.talkList', ['astrologerCategoryId' => 0]) }}" 
                                           class="filter-btn {{ $astrologerCategoryId == '0' ? 'active' : '' }}"
                                           style="padding: 10px 20px; border-radius: 25px; text-decoration: none; font-size: 14px; font-weight: 600; transition: all 0.3s ease; border: 2px solid;">
                                            All
                                        </a>
                                        @foreach ($getAstrologerCategory['recordList'] as $category)
                                            <a href="{{ route('front.talkList', ['astrologerCategoryId' => $category['id']]) }}" 
                                               class="filter-btn {{ $astrologerCategoryId == $category['id'] ? 'active' : '' }}"
                                               style="padding: 10px 20px; border-radius: 25px; text-decoration: none; font-size: 14px; font-weight: 600; transition: all 0.3s ease; border: 2px solid;">
                                                {{ $category['name'] }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Sort Dropdown (Hidden on mobile, shown on desktop) -->
                            <div class="row d-none d-md-flex">
                                <div class="col-12 text-center">
                                    <select class="form-control sort-select" name="sortBy"
                                        onchange="onSortExpertList()" id="psychicOrderBy"
                                        style="border: 2px solid #e0e0e0; padding: 10px 15px; border-radius: 10px; font-size: 14px; color: #333; transition: border-color 0.3s ease; max-width: 250px; margin: 0 auto; display: inline-block;"
                                        onfocus="this.style.borderColor='#6d4ec6'" onblur="this.style.borderColor='#e0e0e0'">
                                        <option value="1" {{ $sortBy == '1' ? 'selected' : '' }}>Online First</option>
                                        <option value="experienceLowToHigh"
                                            {{ $sortBy == 'experienceLowToHigh' ? 'selected' : '' }}>Low Experience
                                        </option>
                                        <option value="experienceHighToLow"
                                            {{ $sortBy == 'experienceHighToLow' ? 'selected' : '' }}>High Experience
                                        </option>
                                        <option value="priceLowToHigh"
                                            {{ $sortBy == 'priceLowToHigh' ? 'selected' : '' }}>
                                            Lowest Price</option>
                                        <option value="priceHighToLow"
                                            {{ $sortBy == 'priceHighToLow' ? 'selected' : '' }}>
                                            Highest Price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container" style="background-color: #fff9f0; padding: 30px 15px;">
        <div class="row">
            <div class="col-lg-12">
                <div id="expert-list" class="astrologer-grid-container">
                    @if(isset($getAstrologer['recordList']) && count($getAstrologer['recordList']) > 0)
                        @foreach ($getAstrologer['recordList'] as $astrologer)
                            <div class="astrologer-card-grid" data-astrologer-id="{{ $astrologer['id'] }}">
                                <!-- Profile Image with Status -->
                                <div class="card-image-section">
                                    <a href="{{ route('front.astrologerDetails', ['id' => $astrologer['id']]) }}" class="profile-image-link">
                                        <div class="profile-image-wrapper">
                                            @php
                                                $defaultImage = asset('public/frontend/astrowaycdn/dashaspeaks/web/content/images/user-img-new.png');
                                                $profileImage = $astrologer['profileImage'] ? '/' . $astrologer['profileImage'] : $defaultImage;
                                            @endphp
                                            <img src="{{ $profileImage }}" 
                                                alt="{{ $astrologer['name'] }}"
                                                class="profile-image"
                                                loading="lazy"
                                                onerror="this.onerror=null; this.src='{{ $defaultImage }}';">
                                            @if($astrologer['callStatus']=='Online' || $astrologer['callStatus']=='online')
                                                <div class="online-indicator">
                                                    <i class="fas fa-check-circle"></i>
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                </div>

                                <!-- Astrologer Info -->
                                <div class="card-info-section">
                                    <a href="{{ route('front.astrologerDetails', ['id' => $astrologer['id']]) }}" class="astrologer-name-link">
                                        <h3 class="astrologer-name">
                                            {{ $astrologer['name'] }}
                                            @if(isset($astrologer['isVerified']) && $astrologer['isVerified'])
                                                <i class="fas fa-check-circle" style="color: #2196F3; font-size: 16px; margin-left: 5px;"></i>
                                            @endif
                                        </h3>
                                    </a>
                                    
                                    <!-- Specialties -->
                                    <p class="astrologer-specialties">
                                        {{ $astrologer['allSkill'] ?? 'Vedic Astrology' }}
                                    </p>
                                    
                                    <!-- Languages -->
                                    <p class="astrologer-languages">
                                        {{ $astrologer['languageKnown'] ?? 'Hindi, English, Telugu' }}
                                    </p>
                                    
                                    <!-- Experience -->
                                    <p class="astrologer-experience">
                                        Exp. {{ $astrologer['experienceInYears'] ?? 5 }} years
                                    </p>
                                    
                                    <!-- Price -->
                                    <div class="price-section">
                                        @if ($isFreeAvailable == true)
                                            <span class="price-striked">{{ $currency['value'] }}{{ $astrologer['charge'] }}/Min</span>
                                            <span class="free-badge">Free</span>
                                        @else
                                            <span class="price-current">{{ $currency['value'] }}{{ $astrologer['charge'] }}/Min</span>
                                        @endif
                                    </div>
                                    
                                    <!-- Rating Stars -->
                                    <div class="rating-section">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= floor($astrologer['rating'] ?? 4.5))
                                                <i class="fas fa-star star-filled"></i>
                                            @else
                                                <i class="far fa-star star-empty"></i>
                                            @endif
                                        @endfor
                                        <span style="margin-left: 5px; color: #2c1f0f; font-size: 13px; font-weight: 600;">
                                            {{ number_format($astrologer['rating'] ?? 4.9, 1) }} ({{ number_format($astrologer['reviews'] ?? 3024) }})
                                        </span>
                                    </div>
                                    
                                    <!-- Call Button -->
                                    <div class="call-button-section">
                                        @if($astrologer['callStatus']=='Busy' || $astrologer['callStatus']=='Offline' || empty($astrologer['callStatus']) || ($astrologer['callStatus'] != 'Online' && $astrologer['callStatus'] != 'online'))
                                            <button class="btn-call-disabled" disabled>
                                                Call Now
                                            </button>
                                        @else
                                            <a class="btn-call-active" 
                                               role="button"
                                               data-toggle="modal"
                                               @if (!authcheck()) data-target="#loginSignUp" @else data-target="#callintake" @endif
                                               id="audio-call-btn"
                                               onclick="setAstrologerData({{ $astrologer['id'] }}, {{ $astrologer['charge'] }})">
                                                Call Now
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-5" style="grid-column: 1 / -1;">
                            <i class="fas fa-user-slash" style="font-size: 64px; color: #ddd; margin-bottom: 20px;"></i>
                            <h3 style="color: #666; font-family: 'Playfair Display', serif;">No Astrologers Found</h3>
                            <p style="color: #999;">Try adjusting your search or filter criteria.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Help Section -->
    <div class="container" style="background-color: #fff9f0; padding: 40px 15px;">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h2 style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 28px; font-weight: 700; margin-bottom: 20px;">
                    How talk an astrologer can help you?
                </h2>
                <p style="color: #666; font-size: 15px; line-height: 1.8; margin: 0;">
                    There's literally no point in overthinking about your concerns when the solution to them is just a call away. Astrotalk brings to you a pool of over 500+ astrologers with whom you can contact on chat and share with them your problems across all aspects of life including love, finance, Vastu, career, luck, marriage and so on. Simply put, life is a cocktail of highs and lows, and while we enjoy the good times, the bad times, though they teach us a lot, can also leave us worried, depressed and sad. Such times can also hamper the relationship we share with other people in our lives, and we are sure that you wouldn't want that to happen for yourself.
                </p>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function onFilterExpertCategoryList() {
            var astrologerCategoryId = $('#psychicCategories').val();
            var url = new URL(window.location.href);
            url.searchParams.set('astrologerCategoryId', astrologerCategoryId);
            window.location.href = url.toString();
        }

        function onSortExpertList() {
            var sortBy = $('#psychicOrderBy').val();
            var url = new URL(window.location.href);
            url.searchParams.set('sortBy', sortBy);
            window.location.href = url.toString();
        }

        function setAstrologerData(astrologerId, charge) {
            $('#astroId').val(astrologerId);
            $('#astrocharge').val(charge);
            $("#call_type").val(10);
        }
    </script>

    <script>

        $(document).ready(function() {


            @if($getAstrologer['recordList'])
            $('.btn-audio-call').click(function() {

                var astrologerCard = $(this).closest('.psychic-card');
                var astrologerId = astrologerCard.data('astrologer-id');

                var astroChargeText = astrologerCard.find('.exprt-price').text().trim();

                // Extract numerical value from the charge text
                var astroCharge = parseFloat(astroChargeText.match(/[\d.]+/));

                $('#astroCharge').val(astroCharge);

                $('#astroId').val(astrologerId);
                var astrologerId = $('#astroId').val();

                $("#call_type").val(10);


            });


            $('.btn-video-call').click(function() {
                var astrologerCard = $(this).closest('.psychic-card');
                var astrologerId = astrologerCard.data('astrologer-id');
                $('#astroId').val(astrologerId);
                var astrologerId = $('#astroId').val();

                $("#call_type").val(11);
                var astroChargeText = astrologerCard.find('.exprt-price').text().trim();

                    // Extract numerical value from the charge text
                    var astroCharge = parseFloat(astroChargeText.match(/[\d.]+/));

                    $('#astroCharge').val(astroCharge);

            });
            @endif


            $('#callintakeBtn').click(function(e) {
                e.preventDefault();


                @php
                    use Symfony\Component\HttpFoundation\Session\Session;
                    $session = new Session();
                    $token = $session->get('token');
                @endphp



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

                @if($getAstrologer['recordList'])
                var isFreeAvailable = "{{ $getAstrologer['recordList'][0]['isFreeAvailable'] }}";

                var wallet_amount = "{{ $wallet_amount }}";
                @endif

                $.ajax({
                    url: "{{ route('api.checkCallSessionTaken', ['token' => $token]) }}",
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if(!response.recordList)
                                callRequestWallet();
                        else
                            toastr.error('Your request is already there');

                    },
                    error: function(xhr, status, error) {
                        toastr.error(xhr.responseText);
                    }
                });

                function callRequestWallet()
                {
                     // Check if free chat is available and wallet has sufficient balance
                    if (isFreeAvailable != true) {
                        if (total_charge <= wallet_amount) {
                            AddCallRequestFunc(formData)
                        } else {
                            toastr.error('Insufficient balance. Please recharge your wallet.');
                        }
                    } else {
                            AddCallRequestFunc(formData)
                    }
                }


                function AddCallRequestFunc(formData)
                {
                    $.ajax({
                            url: "{{ route('api.addCallRequest', ['token' => $token]) }}",
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
                            url: "{{ route('api.intakeForm', ['token' => $token]) }}",
                            type: 'POST',
                            data: formData,
                            success: function(response) {

                                setTimeout(function() {
                                    toastr.success(
                                        'Call Request Sent ! you will be notified if astrologer accept your request.'
                                        );
                                    window.location.href = "{{ route('front.home') }}";

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
@endsection
