<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $connection = 'mysql';
    protected $table = "departamento";
    protected $primaryKey = "id_departamento";
    public $timestamps = false;

}
