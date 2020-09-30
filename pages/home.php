<?php
if(is_empty()){
    include 'empty.php';
} else {
    if(!empty($_GET['type'] && isset($_GET['type']))){
        loop_pictures(get_by($_GET['type']), $_GET['type']);
    } else {
        loop_pictures(get_all());
    }
}
?>