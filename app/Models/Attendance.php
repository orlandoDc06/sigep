<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /** @use HasFactory<\Database\Factories\AttendanceFactory> */
    use HasFactory;

    protected $fillable = ['employee_id', 'date', 'entry_time', 'exit_time'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
