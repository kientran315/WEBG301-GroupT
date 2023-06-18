<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table = 'songs';
    protected $fillable = [
        'name', 'artist_id', 'album_id', 'category_id', 'national_id','video', 
    ];

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function album(){
        return $this->belongsTo(Album::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function national(){
        return $this->belongsTo(National::class);
    }
}
