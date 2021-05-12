<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovie;
use App\Http\Resources\Movie as MovieResource;
use App\Repositories\Movies\MoviesRepo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    protected $movieRepo;

    public function __construct(MoviesRepo $movieRepo)
    {
        $this->movieRepo = $movieRepo;
    }

    public function index()
    {

        $data = $this->movieRepo->getQuery();

        return MovieResource::collection($data);
    }

    /**
     * @param $id
     * @return MovieResource
     */
    public function show($id)
    {
        $movie = $this->movieRepo->find($id);

        if (!$movie) {
            return $this->notFound();
        }

        return new MovieResource($movie);

    }

    /**
     * Store and send emails
     * @param CreateMovie $request
     * @return MovieResource
     */
    public function store(CreateMovie $request)
    {
        $data = $request->all();
        $newMovie = $this->movieRepo->create($data);
        return new MovieResource($newMovie);
    }
}
