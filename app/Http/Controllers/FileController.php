<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function index()
    {
        $files = File::with('student', 'teacher')->get();
        return view('files.index', compact('files'));
    }
}
