<?php

namespace App\Actions\Image;

use function str;

class CreateImageAction
{

    public function __invoke($newImage, $name, $folder)
    {
        $ext = $newImage->extension();
        $fileName = str($name)->replace(' ', '_').'.'.$ext;

        return $newImage->storeAs($folder, $fileName, 'public');
    }

}