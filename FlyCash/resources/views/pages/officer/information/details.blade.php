@extends('layouts.app', ['page' => __('Profile Details'), 'pageSlug' => 'information'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="title">{{ __('Information Data') }}</h4>
                </div>
                <form method="#" autocomplete="off">
                    <div class="card-body">
                            @csrf
                           <!-- detete method -->
                    
                        <table border="1">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>NID</th>
                                <th>DOB</th>
                            </tr>
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->nid}}</td>
                                <td>{{$user->dob}}</td>
                            </tr>
                        </table>
                    </div>
                    <a href="{{route('pdf.invoice', $user->id)}}" class="btn btn-success">Download Pdf</a>
                    <a href="{{route('information_index')}}" class="btn btn-success">Back</a>
                </form>
            </div>

        </div>
        <!-- <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('black') }}/img/anime3.png" alt="">
                                <h5 class="title">{{ $user->name }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Profile') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ __('Hello Everyone, Always "Never Give Up"...') }}
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
        </div> -->
    </div>
@endsection
