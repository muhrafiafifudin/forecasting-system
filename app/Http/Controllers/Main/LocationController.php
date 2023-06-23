<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    public function index()
    {
        $departments = Http::get('http://127.0.0.1:8000/api/departments');
        $departments = $departments->object();

        $units = Http::get('http://127.0.0.1:8000/api/units');
        $units = $units->object();

        $locations = Http::get('http://127.0.0.1:8000/api/locations');
        $locations = $locations->object();

        return view('pages.main.location', compact('departments', 'units', 'locations'));
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
