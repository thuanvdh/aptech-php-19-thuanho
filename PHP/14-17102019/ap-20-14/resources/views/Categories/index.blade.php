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
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr class="table-primary">
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td class="d-flex">
                    <form action="{{route('categories.show',$category->id)}}" method="GET">
                        <button class="btn-warning" type="submit">Show</button>
                    </form>
                    <form action="{{route('categories.edit',$category->id)}}" method="GET">
                        <button class="btn-success" type="submit">Edit</button>
                    </form>
                    <form action="/categories/{{$category->id}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button class="btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr> 
        @endforeach
        </tbody>
    </table> 

<form action="/categories/create" method="get">
    <button type="submit" class="btn-success">Tao Category Moi</button>
</form>

<form action="/articles" method="get">
    <button type="submit" class="btn-success">Quay Ve Trang Article</button>
</form>
</body>
</html>