<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/login_style.css')); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
        <script src="<?php echo e(asset('js/login_script.js')); ?>" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <article>
            <main>
                <div id="title">
                    <img src="<?php echo e(asset('images/kiwi.jpg')); ?>" id="logo">
                    <h1>Login</h1>
                </div>
                <form name="login_form" method="post" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="username" placeholder="Username" >
                    <input type="password" name="password" placeholder="Password">
                    
                    
                    <?php if($errore): ?>
                        <p class='errore'>Credenziali non valide</p>
                    <?php endif; ?>

                    <input id="login_button" type="submit" value="Accedi" >
                </form>
                <p>Non sei registrato? <a href="<?php echo e(route('signup')); ?>">Registrati</a></p>
            </main>
        </article>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/login.blade.php ENDPATH**/ ?>