<?php
/**
 * Writes log messages to log files.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

class Log
{
    public static $logLevel = "Notice";
    public static $fileNumber = 0;

    public static function error($message, $class, $file, $function, $line)
    {
        self::write("Error", $message, $class, $file, $function, $line);
    }

    public static function warn($message, $class, $file, $function, $line)
    {
        self::write("Warning", $message, $class, $file, $function, $line);
    }

    public static function notice($message, $class, $file, $function, $line)
    {
        self::write("Notice", $message, $class, $file, $function, $line);
    }

    private static function write($type, $message, $class, $file, $function, $line)
    {
        if (self::$logLevel == "None" || self::$logLevel == null) {
            return;
        }
        if (self::$logLevel == "Warning") {
            if ($type == "Notice") {
                return;
            }
        }
        if (self::$logLevel == "Error") {
            if ($type == "Warning" || $type == "Notice") {
                return;
            }
        }

        $time = date("H:i:s");
        $type = strtoupper($type);
        $loop = true;

        while ($loop) {
            if (file_exists(self::getFileName())) {
                if (filesize(self::getFileName()) > 5*1024*1024) {
                    self::$fileNumber++;
                } else {
                    $loop = false;
                }
            } else {
                $loop = false;
            }
        }
        error_log("$type: $message in $class->$function (Line: $line, Time: $time, $file)\n", 3, self::getFileName());
    }

    private static function getFileName()
    {
        return "../logs/" . date("Y_m_d") . "_" . self::$fileNumber . ".log";
    }
}
