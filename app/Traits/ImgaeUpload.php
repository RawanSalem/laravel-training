<?php

namespace App\Traits;
 
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Image;

trait ImgaeUpload
{
    public function UserImageUpload($query) // Taking input image as parameter
    {
    		$avatar = $query;
    		$fileName = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->save( public_path('/uploads/avatars/' . $filename ) );
            return $fileName;
    }
}