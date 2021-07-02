
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="title">{{ __('Agent Information') }}</h3>
            </div>
            
            <h2>Welcome to our service center</h2>
            <h3>02/location,Dhaka,Bangladesh</h3>
            <h3>email: flycash@info.com</h3>
            
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
    </div>
</div>
