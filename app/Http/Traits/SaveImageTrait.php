<?php

namespace App\Http\Traits;

trait SaveImageTrait
{
    public function saveImage($request, $destinationPath)
    {
        $avatarFile = $request->file('image');
        $avatarName = date('YmdHis') . "." . $avatarFile->getClientOriginalExtension();
        $avatarFile->move($destinationPath, $avatarName);
        return $avatarName;
    }
}
