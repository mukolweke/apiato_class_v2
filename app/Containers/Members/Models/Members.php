<?php

namespace App\Containers\Members\Models;

use App\Ship\Parents\Models\Model;

class Members extends Model
{
    protected $fillable = [
        'name',
        'email'
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
    protected $resourceKey = 'members';
}
