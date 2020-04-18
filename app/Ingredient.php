<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $guarded = ['id'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}