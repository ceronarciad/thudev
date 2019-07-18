<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Addresses
 * @package App\Models
 * @version July 16, 2019, 3:38 am UTC
 *
 * @property string street
 * @property string street_number
 * @property string suite_number
 * @property integer city
 * @property integer country
 * @property integer state
 * @property integer zip_code
 */
class Addresses extends Model
{
    use SoftDeletes;

    public $table = 'addresses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'street',
        'street_number',
        'suite_number',
        'city',
        'country',
        'state',
        'zip_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'street' => 'string',
        'street_number' => 'string',
        'suite_number' => 'string',
        'city' => 'integer',
        'country' => 'integer',
        'state' => 'integer',
        'zip_code'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'street' => 'required',
        'street_number' => 'required',
        'suite_number' => 'required',
        'city' => 'required',
        'country' => 'required',
        'state' => 'required',
        'zip_code' => 'required'
    ];

    
}
