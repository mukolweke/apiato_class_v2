<?php

namespace App\Containers\Boards\Models;

use App\Containers\Committee\Models\Committee;
use App\Ship\Parents\Models\Model;

class Boards extends Model
{
    protected $fillable = [
            'name',
            'description'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'boards';


    public function committee(){
        return $this->hasMany(Committee::class);
    }
}
