<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Models
use App\Models\PlatformModel;
class PlatformController extends Controller
{
    //
    public function list(Request $request)
    {
        $platforms = PlatformModel::all();
        return response()->json($platforms);
    }
}
