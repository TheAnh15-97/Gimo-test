<?php

namespace App\Actions\Song;

use App\Models\Song;
use App\Services\Database\DB;
use App\Services\Request\RequestInterface;
use App\Services\Validation\Rules\DateFormatRule;
use App\Services\Validation\Rules\MaxLengthRule;
use App\Services\Validation\Rules\RequireRule;
use App\Services\Validation\Rules\StringRule;

class CreateSongAction
{
    /**
     * @param \App\Services\Request\RequestInterface $request
     * @return \App\Models\Song
     */
    public function handle(RequestInterface $request): Song
    {
        $request->validate($this->rules());

        $song = new Song();

        DB::getInstance()->beginTransaction();

        try {
            $song->create($request->all());
            DB::getInstance()->commit();
        } catch (\PDOException $e) {
            DB::getInstance()->rollback();
            throw $e;
        }

        return $song;
    }


}