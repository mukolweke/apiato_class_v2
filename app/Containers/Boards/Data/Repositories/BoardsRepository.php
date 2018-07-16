<?php

namespace App\Containers\Boards\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class BoardsRepository
 */
class BoardsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
