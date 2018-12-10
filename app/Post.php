<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    //
    	use Sluggable;


    public $fillable = ['title'];


    /**

     * Return the sluggable configuration array for this model.

     *

     * @return array

     */

    public function sluggable()

    {

        return [

            'slug' => [

                'source' => 'title'

            ]

        ];
}
    
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
