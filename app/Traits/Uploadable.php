<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Traits\Imageable;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

trait Uploadable
{
    use Imageable;

    /**
     * Upload file to storage
     *
     * @param UploadedFile $file
     * @param string $path
     * @param string $filename
     * @return string
     */

    public function uploadFile2($image, $path, $file_old)
    {
        $tgl = date('Ymd');
        $file = array('file' => $image);
        $rules = array('file' => 'mimes:png,jpg,jpeg,pdf|max:2048');
        $validator = Validator::make($file, $rules);

        if ($validator->fails() or $image == null) {
            $fileName = $file_old == '' ? null : $file_old;
        } else {
            $extension = strstr($image->getClientOriginalName(), '.');
            $uniq = uniqid();
            $fileName = $tgl . "_" . $uniq . $extension;
            $image->move($path, $fileName);
            $this->deleteFile2($file_old, $path);
        }
        return $fileName;
    }

    public function deleteFile2($image, $path)
    {
        File::delete('public/' . $path . '/' . $image);
    }
}
