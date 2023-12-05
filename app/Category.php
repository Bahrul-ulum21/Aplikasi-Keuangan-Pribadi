<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tbl_categories';

    protected $fillable = [
        'name', 'description', 'color', 'creator_id',
    ];

    // Relasi dengan model User (asumsikan tabel user untuk creator_id)
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
