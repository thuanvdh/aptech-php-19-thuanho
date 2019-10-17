<!DOCTYPE html>
<html>

<head></head>

<body>
  <h1>CREATE ARTICLE</h1>
  <form action="{{route('articles.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
      <label for="">Title</label>
      <input type='text' name="tit">
    </div>
    <div>
      <label for="">Description</label>
      <textarea name="des" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
      <label for="">Content</label>
      <textarea name="cont" id="editor1" rows="10" cols="80">
          This is my textarea to be replaced with CKEditor.
      </textarea>
    </div>
    <div>
      <label for="">Category_id</label>
      <input type="number" name="catid">
    </div>
    <button type="submit">Gui Len May Chu</button>
  </form>
  <script src="http://localhost:8000/ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor1');
  </script>
</body>

</html>