<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class ClintDoctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctor::get();
        return view("clint.pages.doctors",compact("doctors"));
    }
}
