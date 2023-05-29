<?php
namespace CardBrick;

use Exception;

class HttpClient
{

    public $LinkAPI;

    public function Post($url, $param)
    {
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        $postdata = json_encode($param);
        $opts = array(
            'http' =>
            array(
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => $postdata,
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                )
            )
        );
        $context = stream_context_create($opts);
        $res = file_get_contents($url, false, $context, 0);
        if ($res == FALSE) {
            throw new Exception("Error");
        }
        $data = json_decode($res, JSON_OBJECT_AS_ARRAY);
        return $data;
    }


}


?>