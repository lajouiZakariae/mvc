<?php

namespace MVC\core;

class View {

    static public function layout() {
        ob_start();
        require(APP_DIR . "/views/layout/main.php");
        $main = ob_get_clean();
        return $main;
    }

    static public function targetView($vp) {
        ob_start();
        require(APP_DIR . "/views/{$vp}.php");
        $target = ob_get_clean();
        return  $target;
    }
}
