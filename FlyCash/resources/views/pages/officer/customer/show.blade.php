@extends('layouts.app', ['page' => __('Customer Details'), 'pageSlug' => 'customerdetails'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h3 class="card-title"> Customer Details Information</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>NID</th>
                <th>Date Of Birth</th>
                <th>type</th>
                <th>Balance</th>
                <th>Active &nbsp &nbsp Button</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->nid}}</td>
                  <td>{{$user->dob}}</td>
                  <td>{{$user->type}}</td>
                  <td>{{$user->balance}}</td>

                  <td>
                    <!-- <a href="/pages/officer/customer/edit/{{$user->id}}">
                        <i class="tim-icons icon-pencil"></i>
                          Edit
                    </a> |  
                    <a href="#">
                      <i class="tim-icons icon-trash-simple"></i>
                        Block
                    </a> -->

                     
                    <?php
                      if ($user->transaction_status=="unblocked"){
                        ?>
                        <a href="{{ url ('officer-blockeduser/'.$user->email )}}" class="btn btn-primary btn-sm">Block</a> 
                      <?php
                      }if ($user->transaction_status=="blocked"){
                        ?>
                        <a href="{{ url ('officer-unblockuser/'.$user->email )}}" class="btn btn-primary btn-sm">Unblock</a>
                        <?php  
                    }
                    ?>
                  </td>
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