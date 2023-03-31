<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career; //Importacion de modelo

class CareerControl extends Controller
{
    public function index(){

    }
    public function show(){

    }
    public function destroy(){

    }
    public function update(){

    }
    public function store(Request $request){
        $Career = Career::create(
            [
                "name" => $request["name"],
                "description" => $request['description'],
                "level" => $request['level']
            ]
        );
        return Collect(
            [
                "status" => 1,
                "title" => "create career",
                "message" => "Career Created"
            ]
            );
    }
}
