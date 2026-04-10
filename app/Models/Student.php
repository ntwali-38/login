<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// #[Fillable(['Firstname', 'Lastname', 'dob'])]
class student extends Model
{
    //
    protected $fillable = ['first_name', 'last_name', 'dob'];
}