<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public static function save(Request $request)
    {
        $imageName = Str::random(8) . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        return 'images/' . $imageName;
    }
}
