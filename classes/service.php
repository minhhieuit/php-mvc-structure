<?php
/**
 * Service class
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 * @date       09/12/2016
 */

class Service implements IService {
    /**
    * Name of the database table
    */
    public static $table;
    public static $columnsArray;

    public function getById($id) {
        if (!isset(self::$table) || is_null(self::$table)) return false;
        if (!isset(self::$columnsArray) || is_null(self::$columnsArray)) return false;
        if (!isset($id) || is_null($id)) return false;
        
        // Connect to database
        $db = Database::get();

        $columns = $this->arrayToString(self::$columnsArray);
        if ($columns === false) {
            return false;
        }

        $query = "SELECT " . $columns . " FROM " . self::$table . " LIMIT 1";

        $stmt = $db->prepare($query);
        $stmt->execute();

        if ($fetch = $stmt -> fetch()) {
            foreach (self::$columnsArray as $value) {
                $result[$value] = $fetch[$value];
            }
            return $result;
        }

        // Return false when we have no result
        return false;
    }

    private function arrayToString($array) {
        $result = false;
        foreach ($array as $value) {
            if ($result === false) {
                $result = $value;
            } else {
                $result = $result . ", " . $value;
            }
        }

        return $result;
    }
}