<!DOCTYPE html>
<html>
    <head>
        <title>Explorer</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/explorer_style.css')); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <script src="<?php echo e(asset('js/explorer_script.js')); ?>" defer></script>
    </head>
    <body>
        <header>
            <div id="brand">
                <img src="./images/kiwi.jpg">
                <p>KIWI</p>
            </div>
            <nav>
                <a href="<?php echo e(route('home')); ?>">Homepage</a>
                <a id="selected" href="<?php echo e(route('explorer')); ?>">Explorer</a>
            </nav>
            <div id="profile" data-username=<?php echo e($user["username"]); ?>>
                <div>
                    <?php echo e($user["name"][0]); ?><?php echo e($user["lastname"][0]); ?>

                </div>
                <p> 
                    <?php echo e($user["name"]); ?> <?php echo e($user["lastname"]); ?>

                </p>
            </div>
            <div id="profile_info" class="hidden">
            <div>
                <h1>
                    <?php echo e($user["name"][0]); ?><?php echo e($user["lastname"][0]); ?>

                </h1>
                <h2>
                    <?php echo e($user["username"]); ?>

                </h2>
                <h3><?php echo e($user["email"]); ?></h3>
                <a href="<?php echo e(route('logout')); ?>">Disconnettiti</a>
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
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/explorer.blade.php ENDPATH**/ ?>