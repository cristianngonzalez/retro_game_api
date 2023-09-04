<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\GenerationModel;

class GenerationController extends Controller
{
    //
    public function list(Request $request)
    {
        $generations = GenerationModel::all();
        return response()->json($generations);
    }
}
