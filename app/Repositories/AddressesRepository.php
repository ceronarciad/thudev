<?php

namespace App\Repositories;

use App\Models\Addresses;
use App\Repositories\BaseRepository;

/**
 * Class AddressesRepository
 * @package App\Repositories
 * @version July 16, 2019, 3:38 am UTC
*/

class AddressesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'street',
        'street_number',
        'suite_number',
        'city',
        'country',
        'state',
        'zip_code'
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
        return Addresses::class;
    }
}
