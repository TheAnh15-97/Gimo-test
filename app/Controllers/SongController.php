<?php

namespace App\Controllers;

use App\Exceptions\ModelNotFoundException;
use App\Models\Song;
use App\Services\Database\DB;
use App\Services\Validation\Rules\DateFormatRule;
use App\Services\Validation\Rules\MaxLengthRule;
use App\Services\Validation\Rules\RequireRule;
use App\Services\Validation\Rules\StringRule;
use PDOException;

class SongController extends BaseController
{
    public function show()
    {
        try {
            $songId = $this->request->getSegment(2);

            $song = (new Song())->find($songId);

            return $this->response->success("OK", $song->toArray());
        }
        catch (ModelNotFoundException $e) {
            return $this->response->notFound("Song not found!");
        }
    }

    public function index()
    {
        $song = (new Song())
            ->paginate(
                $this->request->getInput('page', 1),
                $this->request->getInput('per_page', 10)
            )
            ->toArray('songs');

        return $this->response->success("OK", $song);
    }

    /**
     * @throws \App\Exceptions\ModelNotFoundException
     */
    public function create()
    {
        $this->request->validate($this->rules());

        $song = new Song();

        DB::getInstance()->beginTransaction();

        try {
            $song->create($this->request->all());
            DB::getInstance()->commit();
        } catch (PDOException $e) {
            DB::getInstance()->rollback();
            throw $e;
        }

        return $this->response->created(
            "Song {$song->getAttribute('title')} created",
            $song->toArray()
        );
    }

    public function update()
    {
        $this->request->validate($this->rules());

        try {
            $song = (new Song())->find($this->request->getSegment(2));

            DB::getInstance()->beginTransaction();

            try {
                $song->update($this->request->all());
                DB::getInstance()->commit();
            } catch (PDOException $e) {
                DB::getInstance()->rollback();
                throw $e;
            }
        } catch (ModelNotFoundException $e) {
            return $this->response->notFound("Song not found");
        }

        return $this->response->success(
            "Song {$song->getAttribute('title')} updated",
            $song->toArray()
        );
    }

    public function delete()
    {
        try {
            $songId = $this->request->getSegment(2);

            $song = (new Song())->find($songId);

            DB::getInstance()->beginTransaction();

            try {
                $song->delete();
                DB::getInstance()->commit();
            } catch (PDOException $e) {
                DB::getInstance()->rollback();
            }
        } catch (ModelNotFoundException $e) {
            return $this->response->notFound("Movie not found");
        }

        return $this->response->success("Deleted");
    }

    protected function rules(): array
    {
        return [
            'title' => [
                new RequireRule(),
                new StringRule(),
                new MaxLengthRule(150)
            ],
            'album' => [
                new RequireRule(),
                new StringRule(),
                new MaxLengthRule(150)
            ],
            'year' => [
                new RequireRule(),
                new DateFormatRule('Y')
            ],
            'artist' => [
                new RequireRule(),
                new StringRule(),
                new MaxLengthRule(100)
            ],
            'release_date' => [
                new RequireRule(),
                new DateFormatRule('Y-m-d')
            ]
        ];
    }
}
