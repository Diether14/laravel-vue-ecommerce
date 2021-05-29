<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'price', 'stocks', 'store_id'];

    public function productPhotos() {
        return $this->hasMany(ProductPhoto::class, 'product_id');
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($model) {
             $model->productPhotos()->each(function($photo) {
                $photo->delete();
             });
        });
    }
}
