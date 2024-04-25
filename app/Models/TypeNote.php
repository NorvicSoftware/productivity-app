<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeNote extends Model
{
    use HasFactory;
    protected $table = 'type_notes';


    protected $fillable = ['type'];

    //falta la relacion que tiene con las demas tablas
    

}
