<!DOCTYPE html>
<html>
<head>
    <title>Visi ieraksti</title>
</head>
<body>

    <h1>Visi ieraksti</h1>
    
    <ul>
    @foreach ($posts as $post)
        <li>
            <strong>{{ $post->title }}</strong><br>
            {{ $post->content }}
        </li>
    @endforeach
    </ul>

    @if ($posts->isEmpty())
        <p>Nav neviena ieraksta.</p>
    @endif

    <a href="{{ url('/posts/create') }}">Izveidot jaunu ierakstu</a>

</body>
</html>

