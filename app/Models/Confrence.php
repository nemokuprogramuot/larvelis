<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confrence extends Model
{
    use HasFactory;
    protected $fillable = ['title','text', 'date','adress','participant_number'];


}

