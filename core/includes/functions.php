<?php

function get_by($tag)
{
    $files = scandir('pictures/' . $tag);
    $files = array_diff($files, array("..", ".", '.DS_Store'));
    return $files;
}

function get_all(){
    $folders = scandir('pictures');
    $folders = array_diff($folders, array("..", ".", '.DS_Store'));
    $files = array();
    foreach($folders as $folder){
        $files_divided = scandir('pictures/' . $folder);
        $files_divided = array_diff($files_divided, array("..", ".", '.DS_Store'));
        foreach($files_divided as $file){
            array_push($files, $folder . '/' . $file);
        }

    }
    return $files; 
}

function loop_pictures($datas, $tag = ""){
    foreach($datas as $data){
        echo "<img src='pictures/" . $tag ."/". $data ."'>";
    }
}

