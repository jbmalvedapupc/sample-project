<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Student;
use App\Teacher;

class FileController extends Controller
{
    public function index()
    {
        $files = File::with('student', 'teacher')->get();
        return view('files.index', compact('files'));
    }

    public function create()
    {
        // Kunin ang lahat ng student sa Students Table.
        $students = Student::all('id', 'full_name');
        // Kunin ang lahat ng Teachers sa Teachers Table.
        $teachers = Teacher::all('id', 'full_name');
        // Ipasa ang students at teachers sa view.
        return view('files.create', compact('students', 'teachers'));
    }
}
