<?php

namespace MVC\Core;
require('./config/conf.inc.php'); 

class Image {

    public static function checkExtension($ext) {
        if($ext != "jpg" && $ext != "png" && $ext != "jpeg"
        && $ext != "gif" ) {
            return false;
        }
        return true;
    }

    public static function checkSize($fileSize) {
        $maxsize = 50 * 1024 * 1024;
        if($fileSize > $maxsize) {
            return false;
        }
        return true;
    }

    public static function upload($filetmp, $image) {
        die();
        if(file_exists(IMG_FOLDER . $image)){
            return false;
        } else{
            return move_uploaded_file($filetmp, "/public/".basename($image));
        } 
    }




}