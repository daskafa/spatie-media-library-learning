<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article show</title>
</head>
<body>

<h1>Articles Show Page</h1>
<a href="{{ route('article.create') }}">create</a> <br> <br>
<p>{{ $show->title }}</p>
<p>{{ $show->content }}</p>
<img style="width: 50px; height: 50px;" src="{{ $get[0]->getFullUrl() }}" alt="">


</body>
</html>
