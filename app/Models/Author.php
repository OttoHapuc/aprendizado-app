<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'author';

    protected $fillable = [
        'name',
    ];

    public function works()
    {
        return $this->hasMany(Work::class, 'author_id');
    }
}
