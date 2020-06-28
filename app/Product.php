<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Media;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Product extends Model implements HasMedia {

    use HasMediaTrait;

    protected $fillable = [
        'name', 'slug', 'description', "price", "status"
    ];

    public function registerMediaCollections(): void {
        $this->addMediaCollection('files')->singleFile();
    }

    public function getImageAttribute() {
        return $this->getMedia("files")->last();
    }

   

}
