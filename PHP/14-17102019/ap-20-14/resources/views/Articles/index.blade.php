

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
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Content</th>
                <th scope="col">Category_id</th>
                <th scope="col">Category_Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
            <tr class="table-primary">
                <td>{{$article->id}}</td>
                <td><a href="{{route('articles.show', $article->id)}}">{{$article->title}}</a></td>
                <td>{{$article->description}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->category_id}} </td>
                <td>{{$article->category["name"]}}</td>
                <td class="d-flex">
                    <form action="/articles/{{$article->id}}" method="GET">
                        <button class="btn-warning" type="submit">Show</button>
                    </form>
                    <form action="{{route('articles.edit',$article->id)}}" method="GET">
                        <button class="btn-success" type="submit">Edit</button>
                    </form>
                    <form action="/articles/{{$article->id}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button class="btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr> 
        @endforeach
        </tbody>
    </table> 

<form action="/articles/create" method="get">
    <button type="submit" class="btn-success">Tao Bai Viet Moi</button>
</form>

<form action="/categories" method="get">
    <button type="submit" class="btn-success">The Loai</button>
</form>
</body>
</html>