<!DOCTYPE html>
<html>
    <head>
        <title>Laravel: Passing Data Controller Ke View Laravel </title>
    </head>
    <body>

        <h1>
            Laravel</h1>

        <br>

        <p>Nama :
            {{ $nama }}</p>
        

        <p>Hobi</p>
        <ul>

            @foreach($hobi as $m)

            <li>{{ $m }}</li>

            @endforeach

        </ul>

    </body>
</html>