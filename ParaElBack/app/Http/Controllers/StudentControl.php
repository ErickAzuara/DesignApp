<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student; //Importacion de modelo
use App\Models\Career; //Importacion de modelo

class StudentControl extends Controller
{
    public function index(){
        $students = Student::with('group')->get(); //Jala todo los datos que este realizado con la tabla group
        return Collect(
        [
            "status" => 1,
            "title" => "All Students",
            "data" => $students
        ]

        );

    }
    public function show(Request $request){
        $Student = Student::where('id','=',$request['id'])->get();
        return Collect(
            [
                "status" => 1,
                "title" => "All Students",
                "data" => $Student
            ]
            );
    }
    public function store(Request $request){
        $Studen = Student::create( [
            "name" => $request['name'],
            "surname" => $request['surname'],
            "gender" => $request['gender'],
            "birthdate" => $request['birthdate'],
            "group_id" => $request['group_id'],
            "career_id" => $request['career_id'],
            "serial_number" => $request['serial_number']
        ]);
        return Collect(
            [
                "status" =>1,
                "title" =>"create student",
                "data" => $Studen
            ]);
    }
    public function destroy(Request $request)
    {
        $data = Student::where('serial_number','=',$request['serial_number'])->delete();
        return Collect(
            [
                "status" =>1,
                "title" =>"delete student",
                "data" => $data
            ]);

    }
}
