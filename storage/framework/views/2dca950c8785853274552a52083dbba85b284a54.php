<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/homepage_style.css')); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <script src="<?php echo e(asset('js/homepage_script.js')); ?>" defer></script>
    </head>
    <body>
        <header>
            <div id="brand">
                <img src="./images/kiwi.jpg">
                <p>KIWI</p>
            </div>
            <nav>
                <a id="selected" href="<?php echo e(route('home')); ?>">Homepage</a>
                <a href="<?php echo e(route('explorer')); ?>">Explorer</a>
            </nav>
            <div id="profile" data-username=<?php echo e($user["username"]); ?>>
                <div>
                    <?php echo e($user["name"][0]); ?><?php echo e($user["lastname"][0]); ?>

                </div>
                <p> 
                    <?php echo e($user["name"]); ?> <?php echo e($user["lastname"]); ?>

                </p>
            </div>
        </header>
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
        </div>
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
        <div id="create_post_button">
            <span class="material-icons">edit</span>
            <p>POST</p>
        </div>
        <div class="overlay hidden" id="add_post">
            <form class="post_form" method="post" name="post_form" action="<?php echo e(route('createPost')); ?>">
                <?php echo csrf_field(); ?>
                <input class="title_post" type="text" name="title" placeholder="Titolo">
                <input type="hidden" name="username" value=<?php echo e($user["username"]); ?>>
                <textarea name="comment" class="comment_post" maxlength="500" placeholder="Comment"></textarea>
                <div>
                    <span class="delete_post">Annulla</span>
                    <button class="publish_post">Pubblica</button>
                </div>
            </form>
        </div>
        <div class="overlay hidden" id="modify_post">
            <form class="post_form" method="post" name="modify_form" action="<?php echo e(route('modifyPost')); ?>">
                <?php echo csrf_field(); ?>
                <input class="title_post" type="text" name="title" placeholder="Titolo">
                <input type="hidden" name="id" id="post_id">
                <textarea name="comment" class="comment_post" maxlength="500" placeholder="Comment"></textarea>
                <div>
                    <span class="delete_post">Annulla</span>
                    <button class="publish_post">Modifica</button>
                </div>
            </form>
        </div>
    </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/homepage.blade.php ENDPATH**/ ?>