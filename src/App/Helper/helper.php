<?php


use App\Facade\Sender\Sender;

if (!function_exists('response')) {
    function response($content = '', $status = 200, array $headers = [])
    {
        http_response_code($status);
        foreach ($headers as $key => $val) {
            header($key . ':' . $val);
        }

        $sender = new Sender();
        $sender->send($content);
    }
}

if (!function_exists('response_json')) {
    function response_json($content = '', $status = 200, array $headers = [])
    {
        http_response_code($status);
        foreach ($headers as $key => $val) {
            header($key . ':' . $val);
        }

        $sender = new Sender();
        $sender->sendJson($content);
    }
}
