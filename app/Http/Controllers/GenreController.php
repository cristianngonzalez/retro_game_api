<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\GenreModel;

class GenreController extends Controller
{
    //
    public function list(Request $request)
    {
        $genres = GenreModel::all();
        return response()->json($genres);
    }
}
