@extends("layouts.app")

@section("content")
<div>
	<h1>{{$post->title}}</h1>
	<p>{{$post->text}}</p>
	<a href="/blog/post/{{$post->id}}/edit">Редактировать пост</a>
 	<a href="/blog/post/{{$post->id}}/delete">Удалить пост</a>

</div>
@foreach ($rows as $row)
	<div class='block'>
		<h4>{{$row->name}}</h4>
		<p>{{$row->text}}</p>
	</div>
@endforeach

<p><a href="/blog/post/{{ $post->id }}/comment/add">Новый комментарий</a></p>

@endsection