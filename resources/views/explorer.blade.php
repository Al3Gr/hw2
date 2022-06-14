<!DOCTYPE html>
<html>
    <head>
        <title>Explorer</title>
        <link rel="stylesheet" href="{{asset('css/explorer_style.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script src="{{asset('js/explorer_script.js')}}" defer></script>
    </head>
    <body>
        <header>
            <div id="brand">
                <img src="./images/kiwi.jpg">
                <p>KIWI</p>
            </div>
            <nav>
                <a href="{{route('home')}}">Homepage</a>
                <a id="selected" href="{{route('explorer')}}">Explorer</a>
            </nav>
            <div id="profile" data-username={{$user["username"]}}>
                <div>
                    {{$user["name"][0]}}{{$user["lastname"][0]}}
                </div>
                <p> 
                    {{$user["name"]}} {{$user["lastname"]}}
                </p>
            </div>
            <div id="profile_info" class="hidden">
            <div>
                <h1>
                    {{$user["name"][0]}}{{$user["lastname"][0]}}
                </h1>
                <h2>
                    {{$user["username"]}}
                </h2>
                <h3>{{$user["email"]}}</h3>
                <a href="{{route('logout')}}">Disconnettiti</a>
            </div>
        </header>
        <div id="activity_container">
            <div id="info_section">
                <h1 id="momentOfDay"></h1>
                <div id="weather_info">
                    <img></img>
                    <div>
                        <h2></h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <hr>
            <div id="activity_section">
                <h4>Alessandro Giuseppe Gravagno <br>1000002130</h4>
            </div>
        </div>
        <article>
            
        </article>
    </body>
</html>