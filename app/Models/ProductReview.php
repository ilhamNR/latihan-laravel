<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'score',
        'review',
        'product_id',
        'user_id',
    ];
}
