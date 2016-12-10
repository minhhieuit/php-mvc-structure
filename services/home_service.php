<?php
class HomeService extends Service {
    function __construct() {
        self::$table = "users";
        self::$columnsArray = [
            "id",
            "username"
        ];
    }
}