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
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>

            <form action="{{route('categories.update',$category->id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value={{csrf_token()}}>  
            
            <th>{{$category->id}}</th>
            
            <th><input type='text' name="name" value="{{$category->name}}"></th>
            
            <th><input type='text' name="des" value="{{$category->des}}"></th>
            
            <th><button>Save</button>
            </tr>
</form>
        </tbody>
    </table>
