<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class InsumosModel extends Model
{

    protected $table = 'insumos_models';
    use SoftDeletes;

    //
}
