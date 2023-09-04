<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Models
use App\Models\ManufacturerModel;
class ManufacturerController extends Controller
{
    //
    public function list(Request $request)
    {
        $manufacturers = ManufacturerModel::all();
        return response()->json($manufacturers);
    }
}
