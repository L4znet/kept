<?php
require 'core/includes/functions.php';
    if(isset($_GET['p'])){
        $p = $_GET['p'];
    } else {
        $p = "home";
    }


if(file_exists('pages/' . $p . '.php')){
    require('pages/' . $p . '.php');
    $content = ob_get_clean();
    require 'pages/templates/default.php';
} else {
    require('pages/404.php');
    $content = ob_get_clean();
    require 'pages/templates/404_template.php';
}