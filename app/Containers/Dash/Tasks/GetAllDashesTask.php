<?php

namespace App\Containers\Dash\Tasks;

use App\Containers\Dash\Data\Repositories\DashRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllDashesTask extends Task
{

    private $repository;

    public function __construct(DashRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
