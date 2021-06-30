@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Block User</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Account Number
                </th>
                <th>
                  Complain
                </th>
                <th class="text-center">
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Ahmed Ashik
                </td>
                <td>
                  +0183732832883
                </td>
                <td>
                  Yes
                </td>
                <td class="text-center">
                  Blocked
                </td>
              </tr>
              <tr>
                <td>
                  Abid Hasan
                </td>
                <td>
                  +0187544345
                </td>
                <td>
                  No
                </td>
                <td class="text-center">
                  Running
                </td>
              </tr>
              <tr>
                <td>
                  Sage Rodriguez
                </td>
                <td>
                  +9098866689
                </td>
                <td>
                  No
                </td>
                <td class="text-center">
                  Running
                </td>
              </tr>
              <tr>
                <td>
                  Philip Chaney
                </td>
                <td>
                  +07855457878
                </td>
                <td>
                  Yes
                </td>
                <td class="text-center">
                  Blocked
                </td>
              </tr>
              <tr>
                <td>
                  Doris Greene
                </td>
                <td>
                  +0909897876
                </td>
                <td>
                  No
                </td>
                <td class="text-center">
                  Running
                </td>
              </tr>
              <tr>
                <td>
                  Mason Porter
                </td>
                <td>
                  +886677546
                </td>
                <td>
                  No
                </td>
                <td class="text-center">
                  Running
                </td>
              </tr>
              <tr>
                <td>
                  Jon Porter
                </td>
                <td>
                  +987867577
                </td>
                <td>
                  Yes
                </td>
                <td class="text-center">
                  Blocked
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection
