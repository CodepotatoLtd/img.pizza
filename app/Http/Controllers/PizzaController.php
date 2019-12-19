<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PizzaController extends Controller
{
    public function buildImage( $width, $height ){

        // 1. Grab a list of the files in the source images folder
        // 2. Randomly pick out an image
        // 3. To test, output that image as the response when visiting the URL in the browser
        // 4. Resize the image to the correct dimensions
        // 5. Store the resized image and use that instead of resizing each time 👍 === speed benefits

        // . POINT 1
        $files = Storage::disk('local')->files('/imgs');

        // . POINT 2
        $image = $files[array_rand( $files, 1 )];

        // . POINT 4

        $smaller = Image::make(storage_path('app/' . $image))->fit( $width, $height );

        return $smaller->response('jpg');

    }
}
