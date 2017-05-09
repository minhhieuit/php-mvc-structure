<?php
/**
 * Application configuration
 *
 * @author     Serhan Polat
 * @version    2.0
 */

/**
 * Name of your application.
 */
const APP_TITLE = "PHP MVC";

/**
 * Set your timezone here.
 */
date_default_timezone_set("Europe/Berlin");

/**
 * Set a custom timestamp here which can later be used in your functions.
 * Note: This will only be used when debug mode is enabled.
 */
$time = time();

/**
 * Set to true to enable debug mode.
 * Debug mode allows you to set a custom timestamp and other variables.
 */
const DEBUG_MODE = true;

/**
 * Marks the cookie as accessible only through the HTTP protocol (helps to reduce XSS attacks).
 */
ini_set("session.cookie_httponly", true);

/**
 * Only use cookies to store the session id on the client side (prevents attacks involved passing session ids in URL).
 */
ini_set("session.use_only_cookies", true);

/**
 * Apply settings.
 * !IGNORE THIS!
 */
if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ini_set("session.cookie_secure", false);
} else {
    $time = time();
    error_reporting(E_NONE);
    ini_set("display_errors", 0);
    ini_set("session.cookie_secure", true);
}