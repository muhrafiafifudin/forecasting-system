<?php

namespace App\Interfaces;

interface DepartmentInterface
{
    public function findAll();
    public function findById($id);
    public function store($request);
    public function update($request, $id);
    public function destroy($id);
}
