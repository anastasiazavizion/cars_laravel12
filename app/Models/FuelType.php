<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FuelType extends Model
{
    protected $fillable = ['name'];

    public function cars() : HasMany
    {
        return $this->hasMany(Car::class);
    }


}
