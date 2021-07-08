@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Ongoing Campaign</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
            @if (session()->has('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('msg') }}
                        </div>
                    @endif
              <tr>
                <th>
                  Campaign id
                </th>
                <th>
                  Campaign Name
                </th>
                <th>
                  Portfolio
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($campaigns as $campaign)
              <tr>
                <th>{{ $campaign->id }}</th>
                <th>{{ $campaign->title }}</th>

                <th><img src="{{asset('black/img/campaigns/' . $campaign->image) }}" width="100px;" height="100px;" alt="image"></th>
                <th>

                <a href="{{ url ('admin-removecampaign/'.$campaign->id )}}" class="btn btn-primary btn-sm">Remove</a> 

                    </th>
              </tr>
              @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection