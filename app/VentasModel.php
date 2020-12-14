<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VentasModel extends Model
{
    protected $table = 'venta_models'; 
    use SoftDeletes;

}
