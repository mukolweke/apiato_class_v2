<?php

namespace App\Containers\Boards\UI\API\Transformers;

use App\Containers\Boards\Models\Boards;
use App\Ship\Parents\Transformers\Transformer;

class BoardsTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Boards $entity
     *
     * @return array
     */
    public function transform(Boards $entity)
    {
        $response = [
            'object' => 'Boards',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
