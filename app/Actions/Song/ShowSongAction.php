<?php

namespace App\Actions\Song;

use App\Models\Song;
use App\Services\Request\RequestInterface;

class ShowSongAction
{
    /**
     * @param \App\Services\Request\RequestInterface $request
     * @return \App\Models\Song
     * @throws \App\Exceptions\ModelNotFoundException
     */
    public function handle(RequestInterface $request): Song
    {
        $songId = $request->getSegment(2);

        $song = new Song();

        return $song->find($songId);
    }
}