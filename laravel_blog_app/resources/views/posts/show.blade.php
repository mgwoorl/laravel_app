@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <div class="comments">
        <h2>Комментарии ({{ $post->comments->count() }})</h2>
        
        @foreach($post->comments as $comment)
            <div class="comment">
                <strong>{{ $comment->author }}</strong>
                <p>{{ $comment->content }}</p>
                <form action="{{ route('comments.destroy', $comment) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Вы уверены, что хотите удалить этот комментарий?');">Удалить</button>
                </form>
            </div>
        @endforeach

        <div class="comment-form">
            <h3>Добавить комментарий</h3>
            <form action="{{ route('comments.store', $post) }}" method="POST">
                @csrf
                <input type="text" name="author" placeholder="Ваше имя" required>
                <textarea name="content" rows="4" placeholder="Ваш комментарий" required></textarea>
                <button type="submit">Отправить</button>
            </form>
        </div>

        <a href="{{ route('posts.index') }}">Вернуться к постам</a>
    </div>
@endsection