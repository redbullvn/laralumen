<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at'];

    # Where fields enable for insert 
    //protected $fillable = [];
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
