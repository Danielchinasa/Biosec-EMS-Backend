<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Employee::create([
            'name' => 'Admin',
            'email' => 'danie@gmail.com',
            'department' => 'admin@afiaprime.com',
        ]);
    }
}
