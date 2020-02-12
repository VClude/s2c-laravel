<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Adm_Employee_Pos extends Model
{
    protected $table = 'adm_employee_pos';
    protected $primaryKey = 'employee_pos_id';
    protected $fillable = ['employee_id', 'pos_id', 'pos_name', 'dept_id', 'dept_name', 'is_active', 'is_main_job'];
}
