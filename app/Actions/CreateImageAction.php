<?php

namespace App\Actions;

class CreateImageAction
{

    public function __invoke($newImage, $name, $folder)
    {
        $ext = $newImage->extension();
        $fileName = str($name)->replace(' ', '_').'.'.$ext;

        return $newImage->storeAs($folder, $fileName, 'public');
    }

}