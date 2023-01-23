<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait FileUploadTRait
{
    public function uploadFile($file, $folder = null, $disk = 'public', $filename = null,$old_file)
    {
        if($old_file){

            unlink($old_file);
        }
        
        $file->storeAs($folder, $filename, $disk);


    }





}
