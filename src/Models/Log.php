<?php

namespace Clent\Log\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * 
     * @var string
     */
    protected $table = 'log';
    
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha','usuario','modulo', 'accion', 'ip','detalles',
    ];


}
