<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artists';
    protected $fillable = ['name', 'age','nationality','biography','photo',];

    public function songs()
{
    return $this->belongsToMany(Song::class);
}
}
