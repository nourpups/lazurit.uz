<?php

namespace App\Actions\Image;

use function str;

class UpdateImageAction
{

    public function __invoke($newImage, $oldImage, $imageName, $folder)
    {
        if (is_null($newImage)) {
            return $oldImage;
        }
        unlink(storage_path("app/public/$oldImage"));
        $file_name = str($imageName)->replace(' ', '_').'.'.$newImage->extension();

        return $newImage->storeAs($folder, $file_name, 'public');;
    }

}