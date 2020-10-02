<?php

function get_by($tag)
{
    if($tag == "others"){
        $files_array = scandir('pictures');
        $files_array = remover($files_array);
        $files = array();
        foreach($files_array as $file){
            if(is_file('pictures/' . $file) && !is_dir('pictures/' . $file)){
                array_push($files, $file);
            } else if(is_dir('pictures/' . $file) && !is_file('pictures/' . $file)) {}
        }  
        return $files;
    } else {
        $files = scandir('pictures/' . $tag);
        $files = remover($files);
        return $files;
    }
}



function remover($folder)
{
    $folder = array_diff($folder, array("..", ".", '.DS_Store'));
    return $folder;
}



function get_all()
{

    $files = scandir('pictures');
    $files = remover($files);
    $files_array = array();
    foreach($files as $file){
        if(!is_file('pictures/' . $file)){
            $files_divided = scandir('pictures/' . $file);
            $files_divided = remover($files_divided);
            foreach($files_divided as $folder){
                array_push($files_array, $file . '/' . $folder);
            }
        } else if(is_file('pictures/' . $file)) {
            array_push($files_array, $file);
        }

           
    }
    return $files_array;
}




function loop_pictures($datas, $tag = "")
{
   if($tag == "others"){
    foreach($datas as $data){

        echo "<div class='post'>"; 
        echo "<img src='pictures/". $data ."'>";
        echo "</div>"; 
    }
   } else {
    foreach($datas as $data){
        echo "<div class='post'>"; 
        echo "<img src='pictures/" . $tag ."/". $data ."'>";
        echo "</div>"; 
    }
   }
}


function get_tags()
{
    if(!is_empty()){
        $folders = scandir('pictures');
        $folders = remover($folders);
        foreach($folders as $folder){
            if(!is_file('pictures/' . $folder)){
                echo '<li><a class="nav_link" id="' . $folder .'" href="index.php?p=home&type=' . $folder .'">' . $folder .'</a></li>';
            } else {

            }
        }
    }
}



function is_empty()
{
    $files = get_all();

    if(empty($files)){
        return true;
    } else {
        return false;
    }

}
    

function hide_tab($fnc, $link)
{
    if(!$fnc){
        echo $link;
    }
}