<?php

use MVC\core\View;

function dd($item) {

    echo "<pre>";
    var_dump($item);
    echo "</pre>";

    die();
}

/**
 * Rendering Views
 * @author Zakariae Lajoui
 */
function view($vp = "index") {
    $layout =  View::layout();
    $target = View::targetView($vp);
    $output = str_replace(["{{content}}", "{{ content }}"], $target, $layout);
    echo $output;
}

/**
 * SERVING STATIC FILES AND GETTING PATHS
 * @author Zakariae Lajoui
 */
function get_css($cssp) {
    $targer = APP_DIR . "/views/static/" . $cssp;
    echo $targer;
}
