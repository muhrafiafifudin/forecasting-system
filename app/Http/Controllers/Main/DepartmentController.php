<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Interfaces\DepartmentInterface;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Http::get('http://127.0.0.1:8000/api/departments');
        $departments = $departments->object();

        return view('pages.main.department', compact('departments'));
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
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
