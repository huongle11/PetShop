<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public function Price(){
        return $this->hasOne(Price::class);
    }

    public function Review(){
        return $this->hasMany(Review::class);
    }

    public function Stock(){
        return $this->hasOne(Stock::class);
    }

}
