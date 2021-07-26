<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {
        $st = Students::all();
        return view("trang-chu",compact("st"));
    }
    public function show1()
    {
        return view("index");
    }
    public function index()
    {
        return view("ajax-add");
    }
    public function add(Request $request)
    {
//        dd($request->all());
        $request->validate([
            "student_name"=>"required",
            "student_email"=>"required",
            "student_telephone"=>"required",
            "Feedback"=>"required",
        ]);
        Students::create([
            "student_name"=>$request->student_name,
            "student_email"=>$request->student_email,
            "student_telephone"=>$request->student_telephone,
            "Feedback"=>$request->Feedback,
        ]);
        return redirect()->back();
    }
}
