<?php

function get_by($tag)
{
    if($tag == "others"){
        $files_array = scandir('pictures');
        $files_array = array_diff($files_array, array("..", ".", '.DS_Store'));
        $files = array();
        foreach($files_array as $file){
            if(is_file('pictures/' . $file) && !is_dir('pictures/' . $file)){
                array_push($files, $file);
            } else if(is_dir('pictures/' . $file) && !is_file('pictures/' . $file)) {}
        }  
        return $files;
    } else {
        $files = scandir('pictures/' . $tag);
        $files = array_diff($files, array("..", ".", '.DS_Store'));
        return $files;
    }
}

function remover($folder){
    $folder = array_diff($folder, array("..", ".", '.DS_Store'));
    return $folder;
}

function get_all(){

    $files = scandir('pictures');
    $files = array_diff($files, array("..", ".", '.DS_Store'));
    $files_array = array();
    foreach($files as $file){
        if(!is_file('pictures/' . $file)){
            $files_divided = scandir('pictures/' . $file);
            $files_divided = array_diff($files_divided, array("..", ".", '.DS_Store'));
            foreach($files_divided as $folder){
                array_push($files_array, $file . '/' . $folder);
            }
        } else if(is_file('pictures/' . $file)) {
           $files_divided = scandir('pictures/' . $file);
            $files_divided = array_diff($files_divided, array("..", ".", '.DS_Store'));
            array_push($files_array, $file);
        }

           
    }
     return $files_array;

}

function loop_pictures($datas, $tag = ""){
   if($tag == "others"){
    foreach($datas as $data){
        echo "<img src='pictures/". $data ."'>";
    }
   } else {
    foreach($datas as $data){
        echo "<div class='post'>"; 
        echo "<img src='pictures/" . $tag ."/". $data ."'>";
        echo "</div>"; 
    }
   }
}

function get_tags(){
    $folders = scandir('pictures');
    $folders = array_diff($folders, array("..", ".", '.DS_Store'));
    foreach($folders as $folder){
        if(!is_file('pictures/' . $folder)){
            echo '<li><a class="nav_link" id="' . $folder .'" href="index.php?p=home&type=' . $folder .'">' . $folder .'</a></li>';
        } else {
          echo '<li><a class="nav_link" id="others" href="index.php?p=home&type=others">Autres</a></li>';
        }
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

    


