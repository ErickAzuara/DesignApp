<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //Variables Globales
    protected $table = "career";
    protected $fillable=[
        'id',
        'name',
        'description',
        'level'
    ];
    protected $rules = [
        'name' => 'required[string]max:100',
        'description' => 'required[string]max:3000',
        'level'=> 'required[string]max:3'
    ];
    public function groups() {
        return $this->hasMany(Group::class);
    }

    public function students() {
        return $this->hasMany(Student::class);
    }
}
