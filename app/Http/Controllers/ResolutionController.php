<?php

namespace App\Http\Controllers;

use App\Models\Resolution;
use Illuminate\Http\Request;

class ResolutionController extends Controller
{
    public function show($id)
    {
        $resolution = Resolution::find($id);

        if (!$resolution) {
            return response()->json(['message' => 'Resolution not found'], 404);
        }

        return response()->json($resolution);
    }
}
