<?php

namespace App\Actions\Image;

use Illuminate\Support\Facades\Storage;

class UpdateImageAction
{

    public function __invoke($newImage, $oldImage, $imageName, $folder)
    {
        if (is_null($newImage)) {
            return $oldImage;
        }

       Storage::delete($oldImage);
       $file_name = str($imageName)->replace(' ', '_').'.'.$newImage->extension();

        return $newImage->storeAs($folder, $file_name, 'public');;
    }

}