<?php

namespace App\Facade\Sender;

class Sender
{
    public function send($content)
    {
        echo $content;
    }

    public function sendJson($content, $options = 0)
    {
        echo json_encode($content, $options);
    }
}
