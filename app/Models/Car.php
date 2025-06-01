<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at',
    ];

    public function features() : HasOne
    {
        return $this->hasOne(CarFeature::class, 'car_id');
    }

    public function primaryImage() : HasOne
    {
        return $this->hasOne(CarImage::class, 'car_id')->oldestOfMany('position');
    }

    public function images() : HasMany
    {
        return $this->hasMany(CarImage::class, 'car_id');
    }

    public function maker() : BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }

    public function model() : BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }

   public function carType() : BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }
     public function fuelType() : BelongsTo
    {
        return $this->belongsTo(FuelType::class);
    }
     public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function favouredUsers()
    {
        return $this->belongsToMany(User::class, 'favourite_cars', 'car_id', 'user_id')
            ->withTimestamps();

    }

    public function owner()
    {
        return $this->belongsToMany(User::class, 'favourite_cars', 'car_id', 'user_id')
            ->withTimestamps();

    }



}
