<?php

namespace MVC\core;

class Response {
    public function statusCode($code) {
        http_response_code($code);
    }

    public function json($data) {
        header("Content-Type: application/json");
        echo json_encode($data);
    }
}
