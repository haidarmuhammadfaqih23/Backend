<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    #membuat method index
    public function index(){
        #menggunakan model Student untuk select data
        $students = Student::all();

        $data = [
            'massage' => 'Get all students',
            'data' => $students
        ];

        #mengirim data (json) dan kode 200
        return response()->json($data, 200);

    }
    //
}
