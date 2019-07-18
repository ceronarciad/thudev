<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bank
 * @package App\Models
 * @version July 16, 2019, 3:59 am UTC
 *
 * @property string name
 * @property string description
 * @property string code
 * @property checkbox isActive
 */
class Bank extends Model
{
    use SoftDeletes;

    public $table = 'banks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'code',
        'isActive'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'code' => 'required',
        'isActive' => 'required'
    ];

    
}
