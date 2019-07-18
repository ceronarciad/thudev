<?php

namespace App\Repositories;

use App\Models\Booklet;
use App\Repositories\BaseRepository;

/**
 * Class BookletRepository
 * @package App\Repositories
 * @version July 16, 2019, 5:51 am UTC
*/

class BookletRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'url',
        'code_html',
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
        return Booklet::class;
    }
}
