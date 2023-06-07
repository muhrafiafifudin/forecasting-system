<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Interfaces\DepartmentInterface;

class DepartmentController extends Controller
{
    public function index()
    {
        // $departments = Http::get('http://127.0.0.1:8005/api/departments');
        // $departments = $departments->object();

        return view('pages.main.department');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
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
