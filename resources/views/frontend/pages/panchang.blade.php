@extends('frontend.layout.master')
@section('content')
    <style>
        .panchang-page {
            background-color: #fff9f0;
            min-height: 100vh;
            padding-bottom: 60px;
        }

        .breadcrumb-section {
            background-color: #fff9f0;
            padding: 15px 0;
            border-bottom: 1px solid #e8e8e8;
        }

        .breadcrumb-section .breadcrumb {
            background: transparent;
            margin: 0;
            padding: 0;
        }

        .breadcrumb-section .breadcrumb-item a {
            color: #6d4ec6;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-section .breadcrumb-item a:hover {
            color: #5d3eb6;
        }

        .breadcrumb-section .breadcrumb-item.active {
            color: #666;
        }

        .page-header-section {
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            padding: 50px 20px;
            text-align: center;
            color: #fff;
            margin-bottom: 40px;
        }

        .page-header-section h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
            font-family: 'Playfair Display', serif;
        }

        .page-header-section p {
            font-size: 16px;
            opacity: 0.95;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .date-selector-section {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            margin-bottom: 30px;
        }

        .date-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }

        .btn-date {
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            border: 2px solid #6d4ec6;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-date.active {
            background-color: #6d4ec6;
            color: #fff;
        }

        .btn-date:not(.active) {
            background-color: #fff;
            color: #6d4ec6;
        }

        .btn-date:not(.active):hover {
            background-color: #f5f0ff;
            color: #6d4ec6;
            text-decoration: none;
        }

        .btn-calendar-toggle {
            background-color: #fff;
            color: #6d4ec6;
            border: 2px solid #6d4ec6;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-calendar-toggle:hover {
            background-color: #f5f0ff;
            color: #6d4ec6;
            text-decoration: none;
        }

        .calendar-container {
            margin-top: 20px;
            background-color: #f8f0dc;
            border-radius: 12px;
            padding: 20px;
        }

        .calendar-month {
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            color: #6d4ec6;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 8px;
        }

        .calendar-day {
            text-align: center;
            padding: 12px 8px;
            background-color: #fff;
            border-radius: 8px;
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .calendar-day:hover {
            background-color: #6d4ec6;
            color: #fff;
            text-decoration: none;
            transform: translateY(-2px);
        }

        .calendar-day.active {
            background-color: #6d4ec6;
            color: #fff;
            border-color: #5d3eb6;
        }

        .panchang-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .panchang-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .panchang-card:hover {
            box-shadow: 0 6px 20px rgba(109, 78, 198, 0.12);
            transform: translateY(-3px);
        }

        .panchang-card-header {
            background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
            color: #fff;
            padding: 18px 25px;
            font-size: 18px;
            font-weight: 700;
            text-align: center;
        }

        .panchang-card-body {
            padding: 25px;
        }

        .panchang-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .panchang-item:last-child {
            border-bottom: none;
        }

        .panchang-item-label {
            font-weight: 600;
            color: #333;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .panchang-item-label i {
            color: #6d4ec6;
            font-size: 16px;
        }

        .panchang-item-value {
            color: #666;
            font-size: 15px;
            text-align: right;
            font-weight: 500;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .empty-state i {
            font-size: 64px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            color: #666;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .empty-state p {
            color: #999;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .page-header-section h1 {
                font-size: 28px;
            }

            .panchang-cards {
                grid-template-columns: 1fr;
            }

            .calendar-days {
                grid-template-columns: repeat(7, 1fr);
                gap: 5px;
            }

            .calendar-day {
                padding: 8px 4px;
                font-size: 13px;
            }
        }
    </style>

    <div class="panchang-page">
        <!-- Breadcrumb Section -->
        <div class="breadcrumb-section">
        <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('front.home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Panchang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Today's Panchang</li>
                    </ol>
                </nav>
            </div>
                </div>

        <!-- Page Header -->
        <div class="page-header-section">
            <div class="container">
                <h1>Today's Panchang</h1>
                <p>Panchang is the Hindu calendar followed by Vedic astrology, which provides complete detail on each day's Tithis and auspicious and inauspicious timings. Today's Panchang on Astroway is based on Vijay Vishwa Panchang, which is the rarest of Panchang, used by Astrologers for hundreds of years.</p>
        </div>
    </div>


        <div class="container">
            <!-- Date Selector Section -->
            <div class="date-selector-section">
                <div class="date-buttons">
                    @php
                        $todayActive = !request()->has('panchangDate');
                        $tomorrowActive = request('panchangDate') === date('Y-m-d', strtotime('+1 day'));
                    @endphp
                    <a class="btn-date {{ $todayActive ? 'active' : '' }}" href="{{ route('front.getPanchang')}}">
                        <i class="fas fa-calendar-day mr-2"></i> Today
                    </a>
                    <a class="btn-date {{ $tomorrowActive ? 'active' : '' }}" href="{{ route('front.getPanchang', ['panchangDate' => date('Y-m-d', strtotime('+1 day'))]) }}">
                        <i class="fas fa-calendar-check mr-2"></i> Tomorrow
                    </a>
                    <a class="btn-calendar-toggle" data-toggle="collapse" data-target="#calendarCollapse" aria-expanded="false" aria-controls="calendarCollapse">
                        <i class="fas fa-calendar-alt mr-2"></i> Select Date <i class="fas fa-chevron-down ml-2"></i>
                    </a>
                </div>
                
                <div class="collapse" id="calendarCollapse">
                    <div class="calendar-container">
                        <div class="calendar-month">
                            {{date('F Y')}}
                        </div>
                        <div class="calendar-days">
                            @php
                                $year = date('Y');
                                $month = date('m');
                                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                $currentDate = request('panchangDate', date('Y-m-d'));
                            @endphp
                            @for ($day = 1; $day <= $daysInMonth; $day++)
                                @php
                                    $date = sprintf("%02d", $day);
                                    $fullDate = "$year-$month-$date";
                                    $isActive = $currentDate == $fullDate;
                                @endphp
                                <a href="{{ route('front.getPanchang', ['panchangDate' => $fullDate]) }}" 
                                   class="calendar-day {{ $isActive ? 'active' : '' }}">
                                    {{ $day }}
                                </a>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <!-- Panchang Details -->
            @if(!empty($getPanchang['response']['tithi']))
            <div class="panchang-cards">
                <!-- Panchang Card -->
                <div class="panchang-card">
                    <div class="panchang-card-header">
                        <i class="fas fa-calendar-alt mr-2"></i> Panchang Details
                    </div>
                    <div class="panchang-card-body">
                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-star"></i> Tithi
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['tithi']['name'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-moon"></i> Nakshatra
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['nakshatra']['name'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-yin-yang"></i> Yoga
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['yoga']['name'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-circle"></i> Karana
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['karana']['name'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-globe"></i> Rasi
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['rasi']['name'] ?? 'N/A'}}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Info Card -->
                <div class="panchang-card">
                    <div class="panchang-card-header">
                        <i class="fas fa-info-circle mr-2"></i> Additional Information
                    </div>
                    <div class="panchang-card-body">
                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-sun"></i> Sunrise
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['advanced_details']['sun_rise'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-sun"></i> Sunset
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['advanced_details']['sun_set'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-moon"></i> Moonrise
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['advanced_details']['moon_rise'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-moon"></i> Moonset
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['advanced_details']['moon_set'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-circle"></i> Next Full Moon
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['advanced_details']['next_full_moon'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="far fa-circle"></i> Next New Moon
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['advanced_details']['next_new_moon'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-calendar"></i> Amanta Month
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['advanced_details']['masa']['amanta_name'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-calendar-week"></i> Paksha
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['advanced_details']['masa']['paksha'] ?? 'N/A'}}
                            </div>
                        </div>

                        <div class="panchang-item">
                            <div class="panchang-item-label">
                                <i class="fas fa-calendar-alt"></i> Purnimanta
                            </div>
                            <div class="panchang-item-value">
                                {{$getPanchang['response']['advanced_details']['masa']['purnimanta_name'] ?? 'N/A'}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <!-- Empty State -->
            <div class="empty-state">
                <i class="fas fa-calendar-times"></i>
                <h3>Oops! No Panchang Found</h3>
                <p>We couldn't find Panchang details for the selected date. Please try selecting a different date.</p>
            </div>
            @endif
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Handle calendar toggle icon rotation
            $('.btn-calendar-toggle').on('click', function() {
                var icon = $(this).find('.fa-chevron-down');
                if ($('#calendarCollapse').hasClass('show')) {
                    icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
                } else {
                    icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');
                }
            });

            // Update icon on collapse events
            $('#calendarCollapse').on('show.bs.collapse', function() {
                $('.btn-calendar-toggle .fa-chevron-down').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            });

            $('#calendarCollapse').on('hide.bs.collapse', function() {
                $('.btn-calendar-toggle .fa-chevron-up').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            });
        });
    </script>
@endsection
