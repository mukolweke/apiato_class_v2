<?php

namespace App\Containers\Dash\UI\API\Transformers;

use App\Containers\Dash\Models\Dash;
use App\Ship\Parents\Transformers\Transformer;

class DashTransformer extends Transformer
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
     * @param Dash $entity
     *
     * @return array
     */
    public function transform(Dash $entity)
    {
        $response = [
            'object' => 'Dash',
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
