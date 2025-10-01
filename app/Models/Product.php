<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable, HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'category_id',
        'price',
        'quantity',
        'status',
        'content',
        'type',
        'region'
    ];

    // Relation avec les catégories
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Relation avec les packs
    public function packs()
    {
        return $this->belongsToMany(Pack::class, 'pack_product')->withPivot('quantity');
    }

    // Relation avec les promotions
    public function promotions()
    {
        return $this->belongsToMany(Promotion::class, 'product_promotion');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function section()
    {
        return $this->hasOneThrough(Section::class, Category::class, 'id', 'id', 'category_id', 'section_id');
    }
}
