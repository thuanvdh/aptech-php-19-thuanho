<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
    <table class="table table-bordered">
        <thead class="table-danger">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr class="table-primary">
                <th>{{$user->id}}</th>
                <th><input name="_post" value="{{$user->name}}"></th>
                <th><input name="_post" value="{{$user->email}}"></th>
                <th><input name="_post" value="{{$user->password}}"></th>
                <th class="d-flex">
                    <button type="submit" class="btn-success">Save</button>
                </th>
            </tr> -->
            <tr>

            <form action="{{route('users.update',$user->id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value={{csrf_token()}}>  
            
            <th>{{$user->id}}</th>
            
            <th><input type='text' name="ten" value="{{$user->name}}"></th>
            
            <th><input type='email' name="email" value="{{$user->email}}"></th>
            
            <th><input type='text' name="matkhau" value="{{$user->password}}"></th>
            
            <th><button>Save</button>
            </tr>
</form>
        </tbody>
    </table>
