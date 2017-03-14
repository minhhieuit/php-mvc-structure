<?php
/**
 * Sample service class
 * 
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

class TestService
{
    public function division($a, $b) {
        if ($b > 0) {
            $result = $a / $b;
        } else {
            $result = null;
        }
        return $result;
    }
}