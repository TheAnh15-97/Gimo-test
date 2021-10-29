<?php

namespace App\Controllers;

use App\Exceptions\ModelNotFoundException;
use App\Models\Movie;
use App\Services\Database\DB;
use App\Services\Validation\Rules\DateFormatRule;
use App\Services\Validation\Rules\MaxLengthRule;
use App\Services\Validation\Rules\RequireRule;
use App\Services\Validation\Rules\StringRule;
use PDOException;

class MovieController extends BaseController
{
    public function show()
    {
        try {
            $movieId = $this->request->getSegment(2);

            $movie = (new Movie())->find($movieId);

            return $this->response->success("OK", $movie->toArray());
        }
        catch (ModelNotFoundException $e) {
            return $this->response->notFound("Not found!");
        }
    }

    public function index()
    {
        $movies = (new Movie())
            ->paginate(
                $this->request->getInput('page', 1),
                $this->request->getInput('per_page', 10)
            )
            ->toArray('movies');

        return $this->response->success("OK", $movies);
    }

    /**
     * @throws \App\Exceptions\ModelNotFoundException
     */
    public function create()
    {
        $this->request->validate($this->rules());

        $movie = new Movie();

        DB::getInstance()->beginTransaction();

        try {
            $movie->create($this->request->all());
            DB::getInstance()->commit();
        } catch (PDOException $e) {
            DB::getInstance()->rollback();
            throw $e;
        }

        return $this->response->created(
            "Movie {$movie->getAttribute('title')} created",
            $movie->toArray()
        );
    }

    public function update()
    {
        $this->request->validate($this->rules());
        try {
            $movie = (new Movie())->find($this->request->getSegment(2));

            DB::getInstance()->beginTransaction();

            try {
                $movie->update($this->request->all());
                DB::getInstance()->commit();
            } catch (PDOException $e) {
                DB::getInstance()->rollback();
                throw $e;
            }
        } catch (ModelNotFoundException $e) {
            return $this->response->notFound("Movie not found");
        }

        return $this->response->success(
            "Movie {$movie->getAttribute('title')} updated",
            $movie->toArray()
        );
    }

    public function delete()
    {
        try {
            $movieId = $this->request->getSegment(2);

            $movie = (new Movie())->find($movieId);

            DB::getInstance()->beginTransaction();

            try {
                $movie->delete();
                DB::getInstance()->commit();
            } catch (PDOException $e) {
                DB::getInstance()->rollback();
            }
        } catch (ModelNotFoundException $e) {
            return $this->response->notFound("Movie not found");
        }

        return $this->response->success("Deleted");
    }

    private function rules(): array
    {
        return [
            'title' => [
                new RequireRule(),
                new StringRule(),
                new MaxLengthRule(150)
            ],
            'description' => [
                new RequireRule(),
                new StringRule(),
                new MaxLengthRule(300)
            ],
            'year' => [
                new RequireRule(),
                new DateFormatRule('Y')
            ],
            'director' => [
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