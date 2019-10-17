<!DOCTYPE html>
<html>

<head></head>

<body>
  <h1>CREATE CATEGORY</h1>
  <form action="{{route('categories.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
      <label for="">Name</label>
      <input type='text' name="name">
    </div>
    <div>
      <label for="">Description</label>
      <textarea name="des" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">Gui Len May Chu</button>
</body>

</html>