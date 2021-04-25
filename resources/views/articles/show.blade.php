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
<a href="{{ route('article.index') }}">anasayfa</a> <br>
<a href="{{ route('article.create') }}">create</a> <br> <br>
<hr>



<p>{{ $show->title }}</p>
<hr>
<p>{{ $show->content }}</p>
<p>İlk Resim: <br>
<img style="width: 250px; height: 250px;" src="{{ $get[0]->getUrl() }}" alt=""> </p>
<hr>
<p>Diğer Resimler: </p>



@foreach($get as $g)
 @if($loop->first) @continue @endif {{-- array_slice da kullanılabilir sankim --}}
 @if($g->mime_type == 'image/jpeg' || 'image/jpg' || 'image/png')
     @if($g->mime_type == 'application/pdf') @continue @endif
    <img style="width: 250px; height: 250px;" src="{{ $g->getUrl() }}" alt="">
@endif



@endforeach
<hr>
@foreach($get as $g)
@if($g->mime_type == 'application/pdf')
    <a href="{{ $g->getUrl() }}">PDF için tıkla</a> <br> <br>
@endif
@endforeach

</body>
</html>
