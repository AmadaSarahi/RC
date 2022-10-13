<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //protected $table = "cursos";

    //protected $fillable = ['name','descripcion','categoria'];

    //protected $guarded = ['status'];
    protected $guarded = [];

    public function getRouteKeyName(){
        return 'slug';
    }

}
