<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Booklet
 * @package App\Models
 * @version July 16, 2019, 5:51 am UTC
 *
 * @property string name
 * @property string code
 * @property string url
 * @property string code_html
 * @property boolean isActive
 */
class Booklet extends Model
{
    use SoftDeletes;

    public $table = 'booklets';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'code',
        'url',
        'code_html',
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
        'code' => 'string',
        'url' => 'string',
        'code_html' => 'string',
        'isActive' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'code' => 'required',
        'url' => 'required',
        'code_html' => 'required',
        'isActive' => 'required'
    ];

    
}
