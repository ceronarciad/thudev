<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Seller
 * @package App\Models
 * @version July 16, 2019, 4:36 am UTC
 *
 * @property string name
 * @property string short_description
 * @property string description
 * @property string rfc
 * @property string brand
 * @property integer bank
 * @property integer address
 * @property string bank_account
 * @property string bank_number_clabe
 * @property boolean isActive
 */
class Seller extends Model
{
    use SoftDeletes;

    public $table = 'sellers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'short_description',
        'description',
        'rfc',
        'brand',
        'bank',
        'address',
        'bank_account',
        'bank_number_clabe',
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
        'short_description' => 'string',
        'description' => 'string',
        'rfc' => 'string',
        'brand' => 'string',
        'bank' => 'integer',
        'address' => 'integer',
        'bank_account' => 'string',
        'bank_number_clabe' => 'string',
        'isActive' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'short_description' => 'required',
        'description' => 'required',
        'rfc' => 'required',
        'brand' => 'required',
        'bank' => 'required',
        'address' => 'required',
        'bank_account' => 'required',
        'bank_number_clabe' => 'required'
    ];

    
}
