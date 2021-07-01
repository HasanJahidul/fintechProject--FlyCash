@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Remove Campaign</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Campaign Name
                </th>
                <th>
                  Released Date
                </th>
                <th>
                  End Date
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Independence Day Campaign
                </td>
                <td>
                  5/5/2021
                </td>
                <td>
                15/5/2021

                </td>
                <td class="text-center">
                <button type="button">Remove</button>
                </td>
              </tr>
              <tr>
                <td>
                  New Year Campaign
                </td>
                <td>
                5/5/2021
                </td>
                <td>
                5/5/2021
                </td>
                <td class="text-center">
                <button type="button">Remove</button>
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
