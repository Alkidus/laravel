<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function getImgAttribute($value)
    {
        return $value ? $value : asset('images/no_image.jpg');
    }
}
