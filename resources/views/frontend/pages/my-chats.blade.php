@extends('frontend.layout.master')
<style>
    .table-container {
        max-height: 500px;
        overflow-y: auto;
        border-radius: 8px;
    }

    .chats-card {
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

    .chat-details {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .chat-title {
        font-weight: 600;
        color: #2c1f0f;
        margin: 0;
        font-size: 15px;
        line-height: 1.4;
    }

    .chat-date {
        font-size: 12px;
        color: #999;
    }

    .chat-status {
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

    .btn-view {
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

    .btn-view:hover {
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
        .chats-card {
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

        .chat-title {
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
                            <span class="breadcrumbtext">My Chats</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="background-color: #fff9f0; padding: 30px 15px; min-height: 70vh;">
        <div class="row">
            <div class="col-sm-12">
                <div class="chats-card">
                    <!-- Header Section -->
                    <div class="text-left mb-4">
                        <h1 class="h2 font-weight-bold" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 32px; margin-bottom: 8px;">My Chats</h1>
                        <p style="color: #666; font-size: 15px; margin: 0;">Check your complete chat history here.</p>
                    </div>





                    <!-- Chat History Section -->
                    <div class="mt-4">
                        <h3 class="font-weight-bold mb-4" style="font-family: 'Playfair Display', serif; color: #2c1f0f; font-size: 24px; text-align: center;">Chat History</h3>
                        
                        <div class="table-container">
                            <table class="table table-hover">
                                <thead class="table-header">
                                    <tr>
                                        <th>Transaction Details</th>
                                        <th>Deduction</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($getUserById['recordList'][0]['chatRequest']['chatHistory']) && count($getUserById['recordList'][0]['chatRequest']['chatHistory']) > 0)
                                        @foreach ($getUserById['recordList'][0]['chatRequest']['chatHistory'] as $chatdata)
                                            @if (!empty($chatdata))
                                                <tr>
                                                    <td>
                                                        <div class="chat-details">
                                                            <h5 class="chat-title">
                                                                Chat with {{ $chatdata['astrologerName'] ?? 'Astrologer' }} for {{ $chatdata['totalMin'] ?? 0 }} minutes
                                                            </h5>
                                                            <div class="chat-date">
                                                                {{ isset($chatdata['created_at']) ? date('j F Y, h:i A', strtotime($chatdata['created_at'])) : 'N/A' }}
                                                            </div>
                                                            <div>
                                                                <span class="chat-status status-completed">Completed</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="deduction-amount">
                                                        -{{ $currency['value'] }}{{ number_format($chatdata['deduction'] ?? 0, 2) }}
                                                    </td>
                                                    <td style="text-align: right;">
                                                        <a href="{{ route('front.getChatHistory', ['astrologerId' => $chatdata['astrologerId'] ?? '']) }}" class="btn-view">View</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" class="empty-state">
                                                <i class="fas fa-comments"></i>
                                                <p style="margin: 10px 0; font-size: 16px;">No chat history found</p>
                                                <p style="margin: 5px 0; font-size: 14px; color: #999;">Start chatting with an astrologer to see your history here.</p>
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
