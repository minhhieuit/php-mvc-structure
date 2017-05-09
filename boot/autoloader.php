<?php
namespace app\boot;

/**
 * Simple autoloader which loads classes.
 *
 * @author     Serhan Polat
 * @version    2.0
 */

spl_autoload_register(function ($class) {
    // namespace prefix
    $namespacePrefix = "app/";

    // base directory for the namespace prefix
    $baseDir = ROOT;

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';
    $file = str_replace($namespacePrefix, "", $file);

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    } else {
        echo "Couldn't find requested page.";
        return false;
    }
});