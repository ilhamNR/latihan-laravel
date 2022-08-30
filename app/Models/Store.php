<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'user_id',
    ];
    public function userid()
    {
        return $this->hasMany(Product::class, 'store_id');
    }
}

