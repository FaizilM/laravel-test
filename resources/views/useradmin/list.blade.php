<table>
    <thead>
        <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        </tr>
    </thead>
    <tbody>
        @foreach($useradminsList as $key => $useradmin)
        <tr>
        <td>{{$key+1}}</td>
        <td>{{$useradmin['username']}}</td>
        <td>{{$useradmin['password']}}</td>
        </tr>   
        @endforeach
    </tbody>
</table>
