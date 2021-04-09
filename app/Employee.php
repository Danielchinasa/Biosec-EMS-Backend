<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Employee extends Model
{
    use LogsActivity;

    // Customize log name
    protected static $logName = 'Biosec Archive Logs';

    // Only defined attribute will store in log while any change
    protected static $logAttributes = ['name', 'email', 'department'];

//    // Customize log description
//    public function getDescriptionForEvent(string $eventName): string
//    {
//        return "This model has been {$eventName}";
//    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'department', 'employee_id'
    ];
}
