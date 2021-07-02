@extends('layouts.app', ['page' => __('Agent Details'), 'pageSlug' => 'agentinfo'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Agent Details Information</h4>
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
                <th>Active</th>
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

                  <td>
                    <a href="/pages/officer/agent/edit/{{$user->id}}">
                        <!-- <i class="tim-icons icon-pencil" data-bs-toggle="modal" data-bs-target="#agentModal"></i> -->
                        <i class="tim-icons icon-pencil"></i>
                          Edit
                    </a> |  
                    <a href="/pages/officer/agent/delete/{{$user->id}}">
                      <i class="tim-icons icon-trash-simple"></i>
                        delete
                    </a>
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