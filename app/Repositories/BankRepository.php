<?php

namespace App\Repositories;

use App\Models\Bank;
use App\Repositories\BaseRepository;

/**
 * Class BankRepository
 * @package App\Repositories
 * @version July 16, 2019, 3:59 am UTC
*/

class BankRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'code',
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
        return Bank::class;
    }
}
