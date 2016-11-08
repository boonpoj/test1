<html>
    <head>
    </head>
    <body>
        <h1>"hello" {{$name or "ไม่มีชื่อ"}} </h1>
        <ul>
            @foreach ($cars as $car)
                <li>
                    {{$car}}
                </li>
            @endforeach
        </ul>
        <div class = "panel-body">
            <img src={{ asset('images/yoyocici.jpg')}} width="50" height="50">
        </div>
    </body>
<html>