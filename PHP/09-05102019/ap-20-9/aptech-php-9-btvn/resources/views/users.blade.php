<!-- @foreach ($users as $user)
<p>Ten cua nguoi thu {{$user->id}} la {{$user->name}} co email la {{$user->email}} va mat khau la {{$user->password}}
@endforeach -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div id="container">
    <table class="table table-bordered">
        <thead class="table-danger">
            <tr>
                <th scope="col">ID </th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr class="table-primary">
                <td >{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tr> 
            @endforeach
        </tbody>
    </table> 
</body>
</html>