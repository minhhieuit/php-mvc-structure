<?php
/**
 * Set timestamp
 */
define("TIME", $time);

/**
 * Date time format.
 */
$dateTime = date("Y-m-d H:i:s", TIME);
define("DATE_TIME", $dateTime);

/**
 * Path to root folder.
 */
$root = str_replace("\\", "/", str_replace("boot", "", __DIR__));
define("ROOT", $root);

/**
 * Directory paths.
 */
const PATH_VIEWS = "views";