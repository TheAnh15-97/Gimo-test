<?php

namespace App\Actions\Song;

use App\Models\Song;
use App\Services\Database\DB;
use App\Services\Request\RequestInterface;
use PDOException;

class DeleteSongAction
{
    /**
     * @param \App\Services\Request\RequestInterface $request
     * @throws \App\Exceptions\ModelNotFoundException
     */
    public function handle(RequestInterface $request)
    {
        $songId = $request->getSegment(2);

        $song = (new Song())->find($songId);

        DB::getInstance()->beginTransaction();

        try {
            $song->delete();
            DB::getInstance()->commit();
        } catch (PDOException $e) {
            DB::getInstance()->rollback();
        }
    }
}