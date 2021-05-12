<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class Movie extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'movie_name' => $this->movie_name,
            'movie_year' => $this->movie_year,
            'seen' => $this->seen,
            'want_to_see' => $this->want_to_see,
        ];
    }
}
