<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

/**
 * @method static findOrFail(bool $_id)
 */
class Post extends Model
{
    //connection ke mongodb nya
    protected $connection= 'mongodb';

    //fillable sesuai isi folder database yg inin di input
    protected $guarded =[];
    /* protected $fillable = [
        'title', 'content', 'created_by'
    ];*/
}
