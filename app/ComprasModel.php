<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComprasModel extends Model
{

    protected $table = 'compras_models';
    use SoftDeletes;

    //
}
