<?php

namespace App\Helpers;

use Validator, Hash, Exception, Auth, Mail, File, Log, Storage, Setting, DB;

class Helper {


    public static function web_url() 
    {
        return url('/');
    }


    public static function file_name() {

        $file_name = sha1(time().rand());

        return $file_name;    
    }

    public static function upload_file($picture , $folder_path = COMMON_FILE_PATH) {

        $file_path_url = "";

        $file_name = Helper::file_name();

        $extension = $picture->getClientOriginalExtension();

        $local_url = $file_name . "." . $extension;

        $inputFile = base_path('public'.$folder_path.$local_url);

        $picture->move(public_path().$folder_path, $local_url);

        $file_path_url = Helper::web_url().$folder_path.$local_url;

        return $file_path_url;
    
    }

    public static function delete_file($picture, $path = COMMON_FILE_PATH) {
        
        if ( file_exists( public_path() . $path . basename($picture))) {

            File::delete( public_path() . $path . basename($picture));
      
        } else {

            return false;
        }  

        return true;    
    }
   
}