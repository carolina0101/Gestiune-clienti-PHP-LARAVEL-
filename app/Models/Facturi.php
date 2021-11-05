<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturi extends Model
{

    use HasFactory;
    public $timestamps=false;
    protected $table ='facturi';
    protected $fillable = ['nrfactura', 'data', 'serviciufacturat', 'idclient'];
    protected $primaryKey = 'nrfactura';

}

