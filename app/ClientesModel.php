<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientesModel extends Model
{
    protected $table = 'clientes_models';
    use SoftDeletes;

   
}
