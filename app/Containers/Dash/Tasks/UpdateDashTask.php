<?php

namespace App\Containers\Dash\Tasks;

use App\Containers\Dash\Data\Repositories\DashRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateDashTask extends Task
{

    private $repository;

    public function __construct(DashRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
