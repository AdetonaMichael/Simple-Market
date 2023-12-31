<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const AVAILABLE_PRODUCT = 'available';
    const UNAVAILABLE_PRODUCT = 'unavailable';
    protected $fillable =[
        'name',
        'description',
        'price',
        'quantity',
        'status',
        'image',
        'seller_id',
    ];

    public function isAvailable(){
        return $this->status == Product::AVAILABLE_PRODUCT;
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
