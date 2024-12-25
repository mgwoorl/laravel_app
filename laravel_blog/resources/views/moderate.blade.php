@extends("layouts.app")

@section("content")
<h1>Пользователи</h1>
<table>
<tr>
	<th>Имя</th>
	<th>Комментарий</th>
	<th>Опубликовать</th>
	<th>Удалить</th>
</tr>
@foreach ($rows as $row)
	<tr>
		<td>{{$row->name}}</a></td>
		<td>{{$row->text}}</td>
     		<td><b><a href="/moderate/{{$row->id}}/approve">+</a></b></td>
     		<td><b><a href="/moderate/{{$row->id}}/delete">x</a></b></td>
	</tr>
@endforeach
</table>

@endsection