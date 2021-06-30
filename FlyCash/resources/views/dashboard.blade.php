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
        
    
    

@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
