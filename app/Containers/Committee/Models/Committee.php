<?php

namespace App\Containers\Committee\Models;

use App\Containers\Boards\Models\Boards;
use App\Ship\Parents\Models\Model;

class Committee extends Model
{
    protected $fillable = [
        'name',
        'description',
        'board'
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
    protected $resourceKey = 'committees';


    public function board(){
        return $this->belongsTo( Boards::class);
    }
}
