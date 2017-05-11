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
                <ul><li><a href="/home/test/itworks">Test (with parameter)</a></li></ul></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <?php require_once($file); ?>
        <?php echo $javaScript; ?>
    </body>
</html>