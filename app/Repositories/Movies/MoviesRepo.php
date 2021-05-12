<?php


namespace App\Repositories\Movies;


use App\Models\Movie;
use App\Support\Enums\UserRole;

class MoviesRepo implements MoviesInterface
{

    public function getQuery()
    {
        return Movie::all();
    }
    /**
     * Find movie by id
     */
    public function find($id)
    {
        return Movie::where('id', $id)->first();
    }

    /**
     * Add new movie
     * @param array $data
     * @return mixed
     */
    public function create($data) {
        return Movie::create($data);
    }

    /**
     * Update movie
     * @param array $data
     * @param $user
     * @return mixed
     */
    public function update(array $data, $movie){
        return $movie->update($data);
    }

    /**
     * Delete movie
     * @param $movie
     * @return mixed
     */
    public function delete($movie){
        return $movie->delete();
    }

    public function show($id){

    }

}
