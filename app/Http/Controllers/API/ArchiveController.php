<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Archive;
use App\Traits\ApiResponser;

class ArchiveController extends Controller
{
    use ApiResponser;

    /**
     * Display the all archived employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function allArchivedEmployee()
    {
        $employee = Archive::all();
        return $this->success($employee);
    }
}
