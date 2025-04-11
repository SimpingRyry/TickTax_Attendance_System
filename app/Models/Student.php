<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student_list';
    public $timestamps = false;



    protected $fillable = [
        'no', 
        'id_number', 
        'name',
        'gender', 
        'course', 
        'year', 
        'units', 
        'section', 
        'contact_no', 
        'birth_date', 
        'address',
    ];


}
