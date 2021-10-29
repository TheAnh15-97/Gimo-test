<?php

namespace App\Models;

use App\Services\Model\ModelAbstract as Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'year',
        'director',
        'release_date'
    ];

    protected function getTable(): string
    {
        return 'movies';
    }
}