<?php

namespace MVC\core;

class Request {
    public function path() {
        return parse_url($_SERVER["REQUEST_URI"])["path"];
    }

    public function method() {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public function isGet() {
        return $this->method() === "get";
    }

    public function isPost() {
        return $this->method() === "post";
    }

    public function body() {
        $body = [];

        if ($this->isPost()) {
            foreach ($_POST as $key => $value) {
                $body[$key] = $value;
            }
        }

        return $body;
    }

    public function query() {
        $query = [];

        if ($this->isGet()) {
            foreach ($_GET as $key => $value) {
                $query[$key] = $value;
            }
        }

        return $query;
    }
}
