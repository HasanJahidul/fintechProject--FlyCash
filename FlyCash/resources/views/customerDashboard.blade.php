@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
@csrf
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Hello {{session('name')}}</h2>
                            <h4 class="card-title">Balance : {{session('balance')}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card card-chart">
        <div class="card-header ">
        <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Campaigns</h2>
                        </div>
                    </div>
        <div class="card-body all-icons">
        <div class="row">

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_addcampaign') }}">
                        <img src="{{ asset('black') }}/img/admin/campaign.png">
                        <div class="picname">
                        <h4>Add Campaign</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_ongoingcampaign') }}">
<img src="{{ asset('black') }}/img/admin/ongoingCampaign.png" alt="{{ __('Profile Photo') }}">
                        <h4>Ongoing Campaign</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_removecampaign') }}">
<img src="{{ asset('black') }}/img/admin/remove.png" alt="{{ __('Profile Photo') }}">
                        <h4>Remove Campaign</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
            
            
                </div>
            </div>
        </div>
    </div>
<div class="row">
        <div class="col-12">
        <div class="card card-chart">
        <div class="card-header ">
        <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Transaction</h2>
                        </div>
                    </div>
        <div class="card-body all-icons">
        <div class="row">

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('customer_addmoney') }}">
                        <img src="{{ asset('black') }}/img/icons/cashin.png">
                        <div class="picname">
                        <h4>Add Money</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('customer_sendmoney') }}">
                        <img src="{{ asset('black') }}/img/icons/sendmoney.png">
                        <div class="picname">
                        <h4>Send Money</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('customer_cashout') }}">
                        <img src="{{ asset('black') }}/img/icons/cashout.png">
                        <div class="picname">
                        <h4>Cash Out</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('customer_paybill') }}">
                        <img src="{{ asset('black') }}/img/icons/bill.png">
                        <div class="picname">
                        <h4>Bill Pay</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('customer_recharge') }}">
                        <img src="{{ asset('black') }}/img/icons/recharge.png">
                        <div class="picname">
                        <h4>Mobile Recharge</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('customer_transfermoney') }}">
                        <img src="{{ asset('black') }}/img/icons/money.png">
                        <div class="picname">
                        <h4>Transfer Money</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('customer_sendmoney') }}">
                        <img src="{{ asset('black') }}/img/icons/ticket.png">
                        <div class="picname">
                        <h4>Buy Ticket</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('pages.transactionlist') }}">
                        <img src="{{ asset('black') }}/img/icons/statement.png">
                        <div class="picname">
                        <h4>Statement</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="#">
                        <img src="{{ asset('black') }}/img/icons/comingsoon.png">
                        <div class="picname">
                        <h4>Coming Soon</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="#">
                        <img src="{{ asset('black') }}/img/icons/comingsoon.png">
                        <div class="picname">
                        <h4>Coming Soon</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="#">
                        <img src="{{ asset('black') }}/img/icons/comingsoon.png">
                        <div class="picname">
                        <h4>Coming Soon</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="#">
                        <img src="{{ asset('black') }}/img/icons/comingsoon.png">
                        <div class="picname">
                        <h4>Coming Soon</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
    
    

@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
