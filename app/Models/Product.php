<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version July 16, 2019, 5:21 am UTC
 *
 * @property string sku
 * @property string code
 * @property string short_description
 * @property string description
 * @property float price
 * @property float discount_price
 * @property integer stock
 * @property integer category
 * @property boolean hasDiscount
 * @property boolean isActive
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'sku',
        'code',
        'short_description',
        'description',
        'price',
        'discount_price',
        'discount_percent',
        'stock',
        'category',
        'hasDiscount',
        'isActive'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sku' => 'string',
        'code' => 'string',
        'short_description' => 'string',
        'description' => 'string',
        'price' => 'float',
        'discount_price' => 'float',
        'discount_percent' => 'integer',
        'stock' => 'integer',
        'category' => 'integer',
        'hasDiscount' => 'boolean',
        'isActive' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sku' => 'required',
        'code' => 'required',
        'short_description' => 'required',
        'description' => 'required',
        'price' => 'required',
        'discount_price' => 'required',
        'discount_percent' => 'required',
        'stock' => 'required',
        'category' => 'required',
        'hasDiscount' => 'required',
        'isActive' => 'required'
    ];

    
}
