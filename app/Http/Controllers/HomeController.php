<?php
namespace App\Http\Controllers;

use App\Models\Student; // Assuming you have a Student model
use App\Models\Students;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        // Fetch all students from the database
        $students = Students::all();

        // Pass the students data to the view
        return view('welcome', ['students' => $students]);
    }
}
