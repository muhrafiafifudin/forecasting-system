<?php

namespace App\Repositories;

use App\Models\Department;
use App\Interfaces\DepartmentInterface;

class DepartmentRepository implements DepartmentInterface
{
    public function findAll()
    {
        return Department::all();
    }

    public function findById($id)
    {
        return Department::find($id);
    }

    public function store($request)
    {
        return Department::create([
            'department' => $request->department,
            'created_at' => $request->created_at,
        ]);
    }

    public function update($request, $id)
    {
        $department = Department::find($id);

        if ($department) {
            $department['department'] = $request->department;
            $department['created_at'] = $request->created_at;
            $department->save();

            return $department;
        }
    }

    public function destroy($id)
    {
        $department = Department::find($id);

        if ($department) {
            return $department->delete();
        }
    }
}
