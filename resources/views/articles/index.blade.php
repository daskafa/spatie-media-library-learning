<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article</title>
</head>
<body>

<h1>Articles Page</h1>
<a href="{{ route('article.create') }}">create</a> <br> <br>

@foreach($art as $w)
    <ul>
        <li>Title: {{ $w->title }}</li>
        <li>Content: {{ $w->content }}</li>
        <li>Image: <img style="width: 30px; height: 30px;" src="" alt=""></li>
    </ul>
@endforeach

</body>
</html>
