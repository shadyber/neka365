<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'title',
        'detail',
        'cover_img',
        'author',
    ];


    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>['source'=>'title']
        ];
    }
    public function getlink(){
        return url('/book/'.$this->slug);
    }

    public static function lastN($n){
        return Book::orderBy('id', 'desc')->take($n)->get();
    }


}
