<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //Variables Globales
    protected $table = "student";
    protected $fillable=[
        'id',
        'name',
        'surname',
        'birthdate',
        'gender',
        'group_id',
        'career_id',
        'serial_number'
    ];
    protected $rules = [
        'name' => 'required[string]max:100',
        'surname' => 'required[string]max:150',
        'gender' => 'required[string]max:1'        
    ];
    public function group() {
        return $this->belongsTo(Group::class);
    }

    public function career() {
        return $this->belongsTo(Career::class);
    }


}
