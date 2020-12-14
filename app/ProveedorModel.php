<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProveedorModel extends Model
{
    protected $table = 'proveedor_models';
    use SoftDeletes;

    
}
