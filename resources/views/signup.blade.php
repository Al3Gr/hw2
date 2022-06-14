<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" href="{{asset('css/signup_style.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
        <script src="{{asset('js/signup_script.js')}}" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <article>
            <main>
                <section id="logo_section">
                    <img src="./images/kiwi.jpg">
                    <h2>New Kiwi?</h2>
                </section>
                <form method="post" name="signup_form" autocomplete="off" action="{{ route('signup')}}">
                    @csrf
                    <h1>Inserisci i tuoi dati</h1>
                    <div class="row">
                        <input type="text" name="name" placeholder="Nome">
                        <input type="text" name="lastname" placeholder="Cognome">
                    </div>
                    <div class="row">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="row">
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="row">
                        <a id="back_button" href="login.php">Annulla</a>
                        <input id="login_button" type="submit" value="Registrati">
                    </div>
                </form>
            </main>
        </article>
    </body>
</html>