<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
     //Variables Globales
     protected $table = "group";
     protected $fillable=[
         'id',
         'name',
         'grade'
     ];
     protected $rules = [
        'name' => 'required[string]max:1',
        'grade' => 'required[integer]'
    ];
    public function students() {
        return $this->hasMany(Student::class);
    }
}
