<?php

function component($name, $args = [], $echo = true)
{
    $loc = str_replace('', '', __DIR__) . "/components/{$name}.php";

    if (!file_exists($loc)) {
        echo "component {$loc} not found";
        return false;
    }

    if (!$echo) ob_start();

    if (!empty($args) && is_array($args)) {
        if (!isset($args['class'])) $args['class'] = '';
        extract($args);
    }

    include($loc);
    if (!$echo) return ob_get_clean();
}

?>