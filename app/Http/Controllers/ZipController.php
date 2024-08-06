<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;

class ZipController extends Controller
{


    public function zipFolder()
    {

        $zip = new ZipArchive;
        $zipFileName = 'sample.zip';

    }

}
