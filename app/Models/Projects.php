<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Projects extends Model
{
    use HasFactory;
    protected $appends = ['title','description'];
    public function getTitleAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_title;
        } else {
            return $this->en_title;
        }
    }
    public function getDescriptionAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_description;
        } else {
            return $this->en_description;
        }
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/projects') . '/' . $image;
        }
        return "";
    }


    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'projects');
            $this->attributes['image'] = $imageFields;
        }
    }


}
