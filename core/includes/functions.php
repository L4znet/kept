<?php

function get_by($tag)
{
    $files = scandir('pictures/' . $tag);
    $files = array_diff($files, array("..", ".", '.DS_Store'));
    return $files;
}

function remover($folder){
    $folder = array_diff($folder, array("..", ".", '.DS_Store'));
    return $folder;
}

function get_all(){
    $folders = scandir('pictures');
    $folders = remover($folders);
    $files = array();
    foreach($folders as $folder){
        $files_divided = scandir('pictures/' . $folder);
        $files_divided = remover($files_divided);
        foreach($files_divided as $file){
            array_push($files, $folder . '/' . $file);
        }

    }
    return $files; 
}

function loop_pictures($datas, $tag = ""){
    foreach($datas as $data){
        echo "<div class='post'>"; 
        echo "<img src='pictures/" . $tag ."/". $data ."'>";
        echo "</div>"; 
    }
}

function get_tags(){
    $folders = scandir('pictures');
    $folders = array_diff($folders, array("..", ".", '.DS_Store'));
    foreach($folders as $folder){
        echo '<li><a class="nav_link" id="' . $folder .'" href="index.php?p=home&type=' . $folder .'">' . $folder .'</a></li>';
    }
}

function is_empty(){
    $folders = scandir('pictures');
    $folders = remover($folders);
    if(empty($folders)){
        return true;
    } else {
        return false;
    }
}