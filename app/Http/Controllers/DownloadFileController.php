<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return BinaryFileResponse
     */
    function getFile($filename){
        $path = storage_path('app/public/'.$filename);
        return response()->download($path);
    }
}
