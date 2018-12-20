<?php
use App\Models\Image;

function imageUpload($image, $key)
{

    $image = $image;
    if($image==''){
        return null;
    }
    $keys=explode("_",$key);
    $filename = $image->getClientOriginalName();
    $filename = preg_replace("/[^a-z0-9\_\-\.]/i", '', $filename);
    $path="";
    foreach($keys as $key){
        $path.=$key.'/';
        if (!file_exists(public_path($path))) {
            mkdir(public_path($path),0755,true);
        }
    }
    $original=$path.'original/';
    $thumnail_path=$path.'thumbnail/';
    if (!file_exists(public_path($original))) {
        mkdir(public_path($original),0755,true);
    }

    $destinationPath = public_path($original);
    $upload_success = $image->move($destinationPath, $filename);
    $image_path = $original.$filename;
    if($upload_success){

        return [
            'image'=>$image_path,
        ];
    }else{
        return false;

    }

}