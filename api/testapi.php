<?php
/**
 * Testing API
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

class GetReservierungenAPI extends API
{
    public function api() {
        $result["testing"] = "Just a test.";
        echo json_encode($result);
    }
}