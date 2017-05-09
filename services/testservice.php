<?php
namespace app\services;

/**
 * Sample service class
 * 
 * @author     Serhan Polat
 * @version    2.0
 */

class TestService
{
    public function division($a, $b)
    {
        if ($b > 0) {
            $result = $a / $b;
        } else {
            $result = null;
        }
        return $result;
    }
}