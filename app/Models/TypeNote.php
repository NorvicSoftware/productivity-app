<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeNote extends Model
{
    use HasFactory;
    protected $table = 'type_notes';

<<<<<<< HEAD

    protected $fillable = ['type'];

    //falta la relacion que tiene con las demas tablas
    
=======
    protected $fillable = ['type'];
    
    //Falta la relacion que tiene con las demas tablas

>>>>>>> 84f6c7646d823cf394cc3ce5e65f2ad88bd66fde

} 
