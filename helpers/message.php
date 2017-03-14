<?php
/**
 * Set and get messages.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

class Message
{
    public static function error($content) {
        self::set("error", $content);
    }

    public static function success($content) {
        self::set("success", $content);
    }

    public static function getRaw() {
        if (!isset($_SESSION["message"]["type"], $_SESSION["message"]["content"])) {
            return;
        }

        $message["content"] = $_SESSION["message"]["content"];
        $message["type"] = $_SESSION["message"]["type"];
        unset($_SESSION["message"]);

        return $message;
    }

    public static function clear() {
        unset($_SESSION["message"]["type"]);
        unset($_SESSION["message"]["content"]);
        unset($_SESSION["message"]);
    }

    private static function set($type, $content) {
        $_SESSION["message"]["type"] = $type;
        $_SESSION["message"]["content"] = $content;
    }
}
