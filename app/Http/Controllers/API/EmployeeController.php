<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Employee;
use App\Archive;

class EmployeeController extends Controller
{
    use ApiResponser;

    /**
     * Display the all employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function allEmployee()
    {
        $employee = Employee::all();
        return $this->success($employee);
    }

    public function create(Request $request)
    {
        $employee_id = (rand(100,100000));
        Employee::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'department' => $request->input('department'),
            'employee_id' => $employee_id,
        ]);

         // Add activity logs
         activity('Create')
         ->performedOn($todoStatus)
         ->causedBy($user)
         //->withProperties(['customProperty' => 'customValue'])
         ->log('Employee created by ' . $user->name);

        return $this->success('Employee added Successfully', 201);
    }
    public function getEmployee($employee_id)
    {
        if (Employee::where('id', $employee_id)->exists()) 
        {
            $employee = Employee::where('id', $employee_id)->get();
            return $this->success($employee);
        } else {
            return response()->json([
              "message" => "Employee not found"
            ], 404);
          }
    }

    public function updateEmployee(Request $request, $employee_id)
    {
        if (Employee::where('id', $employee_id)->exists()) 
        {
            $employee = Employee::where('id', $employee_id)->first()->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'department' => $request->input('department'),
             ]);;
            return $this->success('Employee Updated Successfully', 200);
        } else {
            return response()->json([
              "message" => "Employee not found"
            ], 404);
          }
    }

    public function archiveEmployee($employee_id)
    {
        $employee = Employee::find($employee_id);
        Archive::create([
            'name' => $employee->name,
            'email' => $employee->email,
            'department' => $employee->department,
            'employee_id' => $employee->employee_id
            
        ]);
        
        $employee->delete();
        return $this->success('Employee archive Successfully', 200);
    }
}
