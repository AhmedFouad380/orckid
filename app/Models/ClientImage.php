<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ClientImage extends Model
{
    use HasFactory;

    protected $appends = ['title'];
    public function getTitleAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_title;
        } else {
            return $this->en_title;
        }
    }
    public function getImageAttribute($image)
{
    if (!empty($image)) {
        return asset('uploads/about') . '/' . $image;
    }
    return "";
}


    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'about');
            $this->attributes['image'] = $imageFields;
        }
    }
}
