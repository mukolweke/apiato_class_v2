<?php

namespace App\Containers\Members\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class MembersRepository
 */
class MembersRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
