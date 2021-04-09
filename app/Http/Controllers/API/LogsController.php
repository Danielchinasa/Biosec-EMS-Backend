<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SystemLogs;
use App\Traits\ApiResponser;

class LogsController extends Controller
{
    use ApiResponser;

    /**
     * Display the all log.
     *
     * @return \Illuminate\Http\Response
     */
    public function allLogs()
    {
        $logs = SystemLogs::all();
        return $this->success($logs);
    }
}
