<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pipe;
use App\Http\Resources\PipeResource;
use Storage;

class PipeController extends Controller
{
    public function index() {
        $data = Storage::disk('local')->get('PipesData.json');
        $data = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $data), true);
        return response()->json($data);
    }
}
