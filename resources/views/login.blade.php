<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="{{asset('css/login_style.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
        <script src="{{asset('js/login_script.js')}}" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <article>
            <main>
                <div id="title">
                    <img src="{{asset('images/kiwi.jpg')}}" id="logo">
                    <h1>Login</h1>
                </div>
                <form name="login_form" method="post" action="{{ route('login') }}">
                    @csrf
                    <input type="text" name="username" placeholder="Username" >
                    <input type="password" name="password" placeholder="Password">
                    
                    
                    @if($errore)
                        <p class='errore'>Credenziali non valide</p>
                    @endif

                    <input id="login_button" type="submit" value="Accedi" >
                </form>
                <p>Non sei registrato? <a href="{{route('signup')}}">Registrati</a></p>
            </main>
        </article>
    </body>
</html>