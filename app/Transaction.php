<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'tbl_transactions';

    protected $fillable = [
        'date', 'amount', 'in_out', 'description', 'category_id', 'creator_id',
    ];

    // Relasi dengan model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi dengan model User (asumsikan tabel user untuk creator_id)
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function getCategoryColorAttribute()
    {
        return $this->category ? $this->category->color : null;
    }
}
