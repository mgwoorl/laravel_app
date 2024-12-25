<!-- resources/views/posts/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать пост</title>
</head>
<body>
    <h1>Создать пост</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Название</label>
        <input type="text" name="title" required>
        <br>
        <label for="content">Содержимое</label>
        <textarea name="content" required></textarea>
        <br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>