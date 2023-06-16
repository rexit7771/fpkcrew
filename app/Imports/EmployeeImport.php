<?php

namespace App\Imports;
use App\Models\Employee;
use App\Models\User;
// use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class EmployeeImport implements ToModel, WithValidation, WithHeadingRow
{
    public function model(array $row) {
        $employee = Employee::create([
            'nik' => $row['nik'],
            'nama' => $row['nama'],
            'divisi' => $row['divisi'],
            'departemen' => $row['departemen'],
            'grade' => $row['grade'],
        ]);

        $employee->user()->create([
            'email' => $row['email'],
            'password' => bcrypt($row['password'])
        ]);
    }

    public function rules():array{
        return [
            'nik' => 'required',
            'nama' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
            'grade' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function sheets():array {
        // return [
        //     'Input' => $this,
        // ];
    }
}
