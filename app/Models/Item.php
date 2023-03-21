<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function features()
    {
        return $this->belongsToMany(Feature::class)->withPivot('value');
    }
    public function user()
    {
        return $this->belongsTo(User::class)->withPivot('borrow_date', 'max_return_date');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
