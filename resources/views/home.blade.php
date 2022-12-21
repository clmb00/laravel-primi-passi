<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Homepage</title>
</head>
<body>
    <div class="container">

        <h1>{{ ucfirst($msg) }} <span class="accent_title">{{ ucfirst($data['name'])}}</span> !</h1>

        <ul class="info">
            @foreach ($data as $key => $element)
                @if( is_array($element))
                    <li><span class="accent_title">{{ strtoupper($key) }}</span>:
                        @foreach ($element as $elem)
                            @if($loop->last)
                                {{ $elem }}
                            @else
                                {{ $elem }},
                            @endif
                        @endforeach
                    </li>
                @else
                    <li><span class="accent_title">{{ strtoupper($key) }}</span>: {{ $element }}</li>
                @endif
            @endforeach
        </ul>

        <a class="button" href="./about-me">About Me!</a>

    </div>
</body>
</html>
