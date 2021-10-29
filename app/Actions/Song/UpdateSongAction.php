<?php

namespace App\Actions\Song;

use App\Models\Song;
use App\Services\Database\DB;
use App\Services\Request\RequestInterface;

class UpdateSongAction extends CreateSongAction
{
    /**
     * @param \App\Services\Request\RequestInterface $request
     * @return \App\Models\Song
     * @throws \App\Exceptions\ModelNotFoundException
     * @throws \PDOException
     */
    public function handle(RequestInterface $request): Song
    {
        $request->validate($this->rules());

        $song = (new Song())->find($request->getSegment(2));

        DB::getInstance()->beginTransaction();

        try {
            $song->update($request->all());
            DB::getInstance()->commit();
        } catch (\PDOException $e) {
            DB::getInstance()->rollback();
            throw $e;
        }

        return $song;
    }
}