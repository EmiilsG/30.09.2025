<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ierakstu saraksts</title>
</head>
<body>

    <h1>Visi ieraksti</h1>

    {{-- Saiti uz jauna ieraksta izveidi --}}
    <a href="{{ route('posts.create') }}">Izveidot jaunu ierakstu</a>

    <hr>

    {{-- Saraksts ar visiem ierakstiem --}}
    @if ($posts->count() > 0)
        <ul>
            @foreach ($posts as $post)
                <li>
                    {{-- Katrs ieraksts ir klikšķināma saite uz savu lapu --}}
                    <a href="{{ route('posts.show', $post->id) }}" target="_blank">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nav neviena ieraksta.</p>
    @endif

</body>
</html>
