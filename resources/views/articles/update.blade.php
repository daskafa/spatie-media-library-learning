<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update article</title>
</head>
<body>


@if(session()->has('success'))
    <div class="alert">
        {{ session()->get('success') }}
    </div>
@endif
<a href="{{ route('article.index') }}">anasayfa</a>
<form action="{{ route('article.update', $article->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @if($errors->has('file'))
        @foreach($errors->get('file') as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <input type="text" name="title" placeholder="{{ $article->title }}">
    <input type="text" name="content" placeholder="{{ $article->content }}"> <br> <br>
    <div class="inputs">
        <input type="file" name="file[]"> <br> <br>
        <input type="file" name="file[]"> <br> <br>
        <input type="file" name="file[]"> <br> <br>
    </div>
    <br><br>
    <button type="submit">güncelle</button>
</form>

</body>
</html>
