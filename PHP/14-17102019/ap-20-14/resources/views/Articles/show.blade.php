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
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-primary">
                <th>{{$article->id}}</th>
                <th>{{$article->title}}</th>
                <th>{{$article->description}}</th>
                <th>{{$article->content}}</th>
                <th class="d-flex">
                    <form action="{{route('articles.edit',$article->id)}}" method="GET">
                        <button class="btn-success" type="submit">Edit</button>
                    </form>
                    <form action="/articles/{{$article->id}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button class="btn-danger" type="submit">Delete</button>
                    </form>
                </th>
            </tr>
        </tbody>
    </table>
