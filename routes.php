<?php

use App\Controllers\MovieController;
use App\Controllers\SongController;
use App\Middlewares\Authenticated;
use App\Services\Router\Router;

Router::get('movies', [MovieController::class, 'index']);
Router::get('movies/:id', [MovieController::class, 'show']);
Router::post(
    'movies/:id',
    [MovieController::class, 'create'],
    [Authenticated::class]
);
Router::put(
    'movies/:id',
    [MovieController::class, 'update'],
    [Authenticated::class]
);
Router::delete(
    'movies/:id',
    [MovieController::class, 'delete'],
    [Authenticated::class]
);

Router::get('songs', [SongController::class, 'index']);
Router::get('songs/:id', [SongController::class, 'show']);
Router::post(
    'songs/:id',
    [SongController::class, 'create'],
    [Authenticated::class]
);
Router::put(
    'songs/:id',
    [SongController::class, 'update'],
    [Authenticated::class]
);
Router::delete(
    'songs/:id',
    [SongController::class, 'delete'],
    [Authenticated::class]
);
