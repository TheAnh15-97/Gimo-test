<?php

namespace App\Models;

use App\Services\Model\ModelAbstract as Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'album',
        'year',
        'artist',
        'release_date'
    ];

    protected function getTable(): string
    {
        return 'songs';
    }
}