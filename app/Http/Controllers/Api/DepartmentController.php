<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\DepartmentInterface;

class DepartmentController extends Controller
{
    private $departmentInterface;

    public function __construct(DepartmentInterface $departmentInterface)
    {
        $this->departmentInterface = $departmentInterface;
    }

    public function index()
    {
        return response()->json([
            'message' => 'Departments',
            'code' => 200,
            'error' => false,
            'results' => $this->departmentInterface->findAll()
        ], 200);
    }
}
