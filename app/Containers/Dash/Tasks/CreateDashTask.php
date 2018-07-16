<?php

namespace App\Containers\Dash\Tasks;

use App\Containers\Dash\Data\Repositories\DashRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateDashTask extends Task
{

    private $repository;

    public function __construct(DashRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
