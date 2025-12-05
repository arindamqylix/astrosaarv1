@extends('frontend.layout.master')
<style>
    .table-container {
        max-height: 500px;
        overflow-y: auto;
        border-radius: 8px;
    }

    .calls-card {
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

    .call-details {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .call-title {
        font-weight: 600;
        color: #2c1f0f;
        margin: 0;
        font-size: 15px;
        line-height: 1.4;
    }

    .call-type-badge {
        display: inline-block;
        background-color: #6d4ec6;
        color: #fff;
        padding: 3px 8px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        margin-right: 5px;
        text-transform: uppercase;
    }

    .call-date {
        font-size: 12px;
        color: #999;
    }

    .call-status {
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
        text-align: right;
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
        .calls-card {
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

        .call-title {
            font-size: 13px;
        }
    }
</style>
@section('content')
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
                            <span class="breadcrumbtext">My Calls</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="background-color: #fff9f0; padding: 30px 15px; min-height: 70vh;">
        <div class="row">
            <div class="col-sm-12">
                <div class="calls-card">
                    <!-- Header Section -->
                    <div class="text-left mb-4">
                        <h1 class="h2 font-weight-bold" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 32px; margin-bottom: 8px;">My Calls</h1>
                        <p style="color: #666; font-size: 15px; margin: 0;">Check your complete call history here.</p>
                    </div>





                    <!-- Call History Section -->
                    <div class="mt-4">
                        <h3 class="font-weight-bold mb-4" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 24px; text-align: center;">Call History</h3>
                        
                        <div class="table-container">
                            <table class="table table-hover">
                                <thead class="table-header">
                                    <tr>
                                        <th>Transaction Details</th>
                                        <th>Deduction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($getUserById['recordList'][0]['callRequest']['callHistory']) && count($getUserById['recordList'][0]['callRequest']['callHistory']) > 0)
                                        @foreach ($getUserById['recordList'][0]['callRequest']['callHistory'] as $calldata)
                                            @if (!empty($calldata))
                                                <tr>
                                                    <td>
                                                        <div class="call-details">
                                                            <h5 class="call-title">
                                                                <span class="call-type-badge">{{ isset($calldata['call_type']) && $calldata['call_type'] == 10 ? 'Audio' : 'Video' }}</span>
                                                                Call with {{ $calldata['astrologerName'] ?? 'Astrologer' }} for {{ $calldata['totalMin'] ?? 0 }} minutes
                                                            </h5>
                                                            <div class="call-date">
                                                                {{ isset($calldata['created_at']) ? date('j F Y, h:i A', strtotime($calldata['created_at'])) : 'N/A' }}
                                                            </div>
                                                            <div>
                                                                <span class="call-status status-completed">Completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="deduction-amount">
                                                        -{{ $currency['value'] }}{{ number_format($calldata['deduction'] ?? 0, 2) }}
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="2" class="empty-state">
                                                <i class="fas fa-phone"></i>
                                                <p style="margin: 10px 0; font-size: 16px;">No call history found</p>
                                                <p style="margin: 5px 0; font-size: 14px; color: #999;">Start calling an astrologer to see your history here.</p>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
