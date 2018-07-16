<?php

namespace App\Containers\Dash\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class DashRepository
 */
class DashRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
