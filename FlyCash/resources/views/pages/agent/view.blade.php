@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">

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
                                <img class="avatar" src="{{ asset('black') }}/img/emilyz.jpg" alt="">
                                <h4 class="title">{{ __('FlyCash') }}</h4>
                                <h5 class="title">{{ __('MD,SABBIR HOSSAIN BORNO') }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Agent') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ __('Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...') }}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Details') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                
                                <label>{{ __('Name : ') }}</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>{{ old('name', auth()->user()->name) }}</label>
                                
                                <!-- <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}"> -->
                                <!-- @include('alerts.feedback', ['field' => 'name']) -->
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Email : ') }}</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>{{ old('email', auth()->user()->email) }}</label>
                                <!-- <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}"> -->
                                <!-- @include('alerts.feedback', ['field' => 'email']) -->
                            </div>



                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Mobile Number : ') }}</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>{{ __('+08801716653557') }}</label>
                                <!-- <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}"> -->
                                <!-- @include('alerts.feedback', ['field' => 'email']) -->
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('NID Number : ') }}</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>{{ __('8547963215') }}</label>
                                <!-- <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}"> -->
                                <!-- @include('alerts.feedback', ['field' => 'email']) -->
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Gender : ') }}</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>{{ __('Male') }}</label>
                                <!-- <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}"> -->
                                <!-- @include('alerts.feedback', ['field' => 'email']) -->
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Date Of Birth : ') }}</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>{{ __('02-04-1998') }}</label>
                                <!-- <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}"> -->
                                <!-- @include('alerts.feedback', ['field' => 'email']) -->
                            </div>
                    </div>
                </form>
            </div>

        
    </div>
@endsection
