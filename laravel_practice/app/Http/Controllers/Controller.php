<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function UploadFile($file, $path)
    {
        $fileName = time() . "_" . uniqid() . "." . $file->getClientOriginalExtension();
        Storage::putFileAs("public/{$path}", $file, $fileName);
        return "storage/{$path}/{$fileName}";
    }

    public function deleteFile($file){
        if(file_exists($file)){
            unlink($file);
        }
    }
}
