<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create article</title>
</head>
<body>

<form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="title">
    <input type="text" name="content" placeholder="content"> <br> <br>
    <input type="file" name="file" multiple> <br> <br> <br>
    <button type="submit">gönder</button>
</form>

</body>
</html>
