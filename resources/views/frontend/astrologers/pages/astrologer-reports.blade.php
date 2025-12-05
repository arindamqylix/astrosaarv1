@extends('frontend.astrologers.layout.master')
<style>
    /* Reports Page Styles */
    .reports-page {
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

    /* Reports Card */
    .reports-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
    }

    .reports-card-header {
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .reports-card-header h3 {
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

    .report-details {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .report-title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .report-title i {
        color: #6d4ec6;
        font-size: 18px;
    }

    .report-date {
        font-size: 13px;
        color: #999;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .report-status {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
        background: #d4edda;
        color: #155724;
    }

    .report-rate {
        font-size: 18px;
        font-weight: 700;
        color: #28a745;
        text-align: right;
    }

    .btn-view-report {
        padding: 8px 20px;
        background: linear-gradient(135deg, #6d4ec6 0%, #8b6fd8 100%);
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-view-report:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(109, 78, 198, 0.3);
        color: white;
        text-decoration: none;
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

        .reports-card {
            padding: 20px;
        }

        .table-modern thead th,
        .table-modern tbody td {
            padding: 12px 10px;
            font-size: 13px;
        }

        .report-title {
            font-size: 14px;
        }

        .report-rate {
            font-size: 16px;
        }
    }
</style>
@section('content')
    <div class="reports-page">
        <div class="breadcrumb-section d-none d-md-block">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('front.astrologerindex') }}">
                        <i class="fa fa-home"></i>
                    </a>
                    <i class="fa fa-chevron-right"></i>
                    <a href="{{ route('front.getAstrologerReport') }}">My Reports</a>
                </div>
            </div>
        </div>

        <div class="page-header-section">
            <div class="container">
                <h1>My Reports</h1>
                <p>Check your complete report history here</p>
            </div>
        </div>

        <div class="container">
            <div class="reports-card">
                <div class="reports-card-header">
                    <h3>
                        <i class="fas fa-file-alt"></i> Report History
                    </h3>
                </div>
                <div class="table-container">
                    <table class="table-modern">
                        <thead>
                            <tr>
                                <th>Transaction Details</th>
                                <th class="text-right">Report Rate</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getAstrologerReport['recordList'][0]['report'] as $reportdata)
                                @if (!empty($reportdata))
                                    <tr>
                                        <td>
                                            <div class="report-details">
                                                <h5 class="report-title">
                                                    <i class="fas fa-file-pdf"></i>
                                                    Received Report from {{ $reportdata['name'] }}
                                                </h5>
                                                <div class="report-date">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    {{ date('d M Y, h:i A', strtotime($reportdata['created_at'])) }}
                                                </div>
                                                <div>
                                                    <span class="report-status">
                                                        <i class="fas fa-check-circle mr-1"></i> Completed
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="report-rate">
                                            {{ $currency['value'] }}{{ number_format($reportdata['reportRate'], 2) }}
                                        </td>
                                        <td class="text-center">
                                            @if($reportdata['reportFile'])
                                                <a href="/{{$reportdata['reportFile']}}" target="_blank" class="btn-view-report">
                                                    <i class="fas fa-eye"></i> View Report
                                                </a>
                                            @else
                                                <span style="color: #999; font-size: 13px;">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <div class="empty-state">
                                            <i class="fas fa-file-alt"></i>
                                            <h3>No Report History</h3>
                                            <p>You haven't generated any reports yet.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
