<?php
require 'core/includes/functions.php';
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = "home";
}


if (file_exists('pages/' . $p . '.php')) {
    ob_start();
    require('pages/' . $p . '.php');
    $content = ob_get_clean();
    require 'pages/templates/default.php';
} else {
    ob_start();
    require('pages/404.php');
    $content = ob_get_clean();
    require 'pages/templates/404_template.php';
}
