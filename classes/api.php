<?php
/**
 * API base class
 * 
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

class API
{
    public function getWebPost() {
        return json_decode(file_get_contents('php://input'));
    }
}