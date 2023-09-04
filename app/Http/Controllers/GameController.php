<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\GameModel;

class GameController extends Controller
{
    //
    public function list(Request $request)
    {
        $games = GameModel::all();
        return response()->json($games);
    }
}
