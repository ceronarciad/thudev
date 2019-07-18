<?php

namespace App\Repositories;

use App\Models\Seller;
use App\Repositories\BaseRepository;

/**
 * Class SellerRepository
 * @package App\Repositories
 * @version July 16, 2019, 4:36 am UTC
*/

class SellerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Seller::class;
    }
}
