@extends('layouts.app', ['page' => __('Profile Delete'), 'pageSlug' => 'information'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">{{ __('Profile Delete') }}</h3>
                    <a href="{{route('information_index')}}">Back</a>
                </div>
                
                <form method="post"  autocomplete="off">
                    <div class="card-body">
                        @csrf

                        @if (session()->has('delete'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('delete') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label><h3>{{ __('Name : ') }}</h3></label>
                            <label><h2>{{$user->name}}</h2></label>
                        </div>

                        <div class="form-group">
                            <label><h3>{{ __('Email address : ') }}</h3></label>
                            <label><h2>{{$user->email}}</h2></label>
                        </div>

                        <div class="form-group">
                            <label><h3>{{ __('Phone No : ') }}</h3></label>
                            <label><h2>{{$user->phone}}</h2></label>
                        </div>

                        <div class="form-group">
                            <label><h3>{{ __('NID No : ') }}</h3></label>
                            <label><h2>{{$user->nid}}</h2></label>
                        </div>

                        <div class="form-group">
                            <label><h3>{{ __('DOB : ') }}</h3></label>
                            <label><h2>{{$user->dob}}</h2></label>
                        </div>

                        <div class="form-group">
                            <label><h3>{{ __('Type : ') }}</h3></label>
                            <label><h2>{{$user->type}}</h2></label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Delete') }}</button>
                        <a href="{{route('information_index')}}" class="btn btn-success">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
