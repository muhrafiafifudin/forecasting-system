<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Http::get('http://127.0.0.1:8000/api/positions');
        $positions = $positions->object();

        return view('pages.main.position', compact('positions'));
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
