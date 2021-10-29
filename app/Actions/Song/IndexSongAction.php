<?php

namespace App\Actions\Song;

use App\Models\Song;
use App\Services\Request\RequestInterface;

class IndexSongAction
{
    /**
     * @param \App\Services\Request\RequestInterface $request
     * @return array
     */
    public function handle(RequestInterface $request): array
    {
        $song = new Song();

        return $song->paginate(
            $request->getInput('page', 1),
            $request->getInput('per_page', 10)
        )->toArray('songs');
    }
}