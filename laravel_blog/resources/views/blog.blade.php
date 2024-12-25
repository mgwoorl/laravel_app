@extends("layouts.app")

@section("content")
<h1>Посты</h1>
<p><a href="/blog/post/add">Новый пост</a></p>
@foreach ($rows as $row)
<div class='block'>
		<b><a href="/blog/post/{{ $row->id }}">{{$row->title}}</a></b>
		<p>{{$row->text}}</p>
</div>
	@endforeach

@endsection