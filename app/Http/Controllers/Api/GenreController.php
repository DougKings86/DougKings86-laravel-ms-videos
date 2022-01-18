<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Genre::all();
    }

    public function store(Request $request)
    {
        return Genre::create($request->all());
    }

    public function show(Genre $genre)
    {
        return $genre;
    }

    public function update(Request $request, Genre $genre)
    {
        $genre->update($request->all());
        return $genre;
    }

    public function destroy(Genre $genre)
    {
        $category->delete();
        return response()->noContent();
    }
}
