<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formsubmit extends Model
{
    use HasFactory;
    protected $fillable=['name','email','subject','message','datetime','fileupload'];
}
