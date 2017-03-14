<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $webTitle; ?></title>
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Welcome to PHP MVC!</h1>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <?php $controller->view(); ?>
        <!-- Scripts -->
        <?php $controller->getJavaScript(); ?>
    </body>
</html>