<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MovieController extends Controller
{
    public function getMovies()
    {
        $movies = Movie::all();
        return view('movies', ['movies' => $movies]);
    }

    public function getMoviesAdmin()
    {
        $movies = Movie::all();
        return view('admin.movies', ['movies' => $movies]);
    }

    public function create()
    {
        return view('admin.movie_create');
    }

    public function store(CreateMovieRequest $request, Movie $movie)
    {
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->image_url = $request->input('image_url');
        $movie->published_year = $request->input('published_year');
        $movie->is_showing = $request->has('is_showing') ? true : false;
        $movie->description = $request->input('description');
        $movie->save();
        return redirect()->route('admin.movies');
    }
}
