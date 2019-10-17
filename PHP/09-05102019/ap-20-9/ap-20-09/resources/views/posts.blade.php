@foreach ($posts as $post)
<p>Tieu de bai viet so {{$post->id}} la {{$post->title}}
@endforeach
<!-- 
@for ($i = 0; $i < count($posts); $i++)
 Tieu de bai viet so {{$i}} 
@endfor -->