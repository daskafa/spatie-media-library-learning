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
{{--{{ dd(\App\Models\Article::all()[10]->getFirstMedia('images')->getUrl()) }}--}}
@foreach($art as $w)
    <ul>
        <li>Title: {{ $w->title }}</li>
        <li>Content: {{ $w->content }}</li>
        <li><a href="{{ route('article.show', $w->id) }}">Link</a></li>
        <li><a href="{{ route('delete.article', $w->id) }}">delete</a></li>
    </ul>
@endforeach




</body>
</html>
