@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
<body>
<form action="{{url('admin-addcampaign')}}" class="form" method="post" enctype="multipart/form-data" >
    @csrf

    

    <div class="d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('black') }}/img/admin/campaign.png" alt="addcampaign">
                                </a>
                                <h3>Add Campaign</h3>
                                @if (session()->has('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('msg') }}
                        </div>
                    @endif
                        </div>
                    </p>
                    <label>{{ __('Campaign Title') }}</label>
                    <input type="text" name="title" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter a title') }}">
                    @include('alerts.feedback', ['field' => 'title'])
                    <label>{{ __('Start date') }}</label>
                    <input type="date" name="sdate" class="form-control{{ $errors->has('sdate') ? ' is-invalid' : '' }}" placeholder="{{ __('Starting date') }}">
                            @include('alerts.feedback', ['field' => 'sdate'])
                            <label>{{ __('End Date date') }}</label>
                    <input type="date" name="edate" class="form-control{{ $errors->has('edate') ? ' is-invalid' : '' }}" placeholder="{{ __('Ending date') }}">
                            @include('alerts.feedback', ['field' => 'edate'])
                    <!-- <label>{{ __('Start Date') }}</label>
                    <input type="text" name="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter a name') }}">
                    @include('alerts.feedback', ['field' => 'date'])
                    <label>{{ __('end Date') }}</label>
                    <input type="text" name="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter a name') }}">
                    @include('alerts.feedback', ['field' => 'date']) -->

                    <input type="file" id="image" name="image">
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Add Campaign') }}</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </body>
@endsection