<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';
    public $timestamps = false;

    protected $fillable = [
        'name', 
    ];


    public function Cocktail()
    {
        return $this->hasMany('Cocktail', 'categorie_id');
    }
}
