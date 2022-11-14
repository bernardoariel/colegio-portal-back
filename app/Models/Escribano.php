<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escribano extends Model
{
    public $timestamps = false;
    protected $fillable = ["id","nombre","apellido","matricula","email","habilitado"];
}
