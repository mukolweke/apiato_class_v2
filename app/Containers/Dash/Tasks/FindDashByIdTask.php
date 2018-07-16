<?php

namespace App\Containers\Dash\Tasks;

use App\Containers\Dash\Data\Repositories\DashRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindDashByIdTask extends Task
{

    private $repository;

    public function __construct(DashRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
