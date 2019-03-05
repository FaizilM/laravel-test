<table>
    <thead>
        <tr>
        <th>id</th>
        <th>Reseller Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Confirm Password</th>
        <th>Website</th>
        <th>Created_at</th>
        <th>No Of Domains </th>
        </tr>
    </thead>
    <tbody>
        @foreach($resellersList as $key => $reseller)
        <tr>
        <td>{{$key+1}}</td>
        <td>{{$reseller['reseller_name']}}</td>
        <td>{{$reseller['email']}}</td>
        <td>{{$reseller['phone_no']}}</td>
        <td>{{$reseller['username']}}</td>
        <td>{{$reseller['password']}}</td>
        <td>{{$reseller['confirm_password']}}</td>
        <td>{{$reseller['website']}}</td>
        <td>{{$reseller['created_at']}}</td>
        <td>{{$reseller['no_of_domains']}}</td>
        </tr>   
        @endforeach
    </tbody>
</table>
