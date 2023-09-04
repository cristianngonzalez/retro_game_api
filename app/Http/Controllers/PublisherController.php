<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Models
use App\Models\PublisherModel;
class PublisherController extends Controller
{
    //
    public function list(Request $request)
    {
        $publishers = PublisherModel::all();
        return response()->json($publishers);
    }
}
