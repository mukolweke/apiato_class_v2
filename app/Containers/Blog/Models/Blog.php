<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 13/07/2018
 * Time: 17:11
 */

namespace App\Containers\Blog\Models;


use App\Ship\Parents\Models\Model;

class Blog extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'blog',
    ];

    /**
     * The dates attributes.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}