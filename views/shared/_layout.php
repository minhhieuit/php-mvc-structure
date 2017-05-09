<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo APP_TITLE . " - " . $title; ?></title>
    </head>
    <body>
        <h1>Welcome to PHP MVC!</h1>
        <ul>
            <li><a href="/home">Home</a>
                <ul><li><a href="/home/test">Test</a></li></ul></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <?php require_once($file); ?>
    </body>
</html>