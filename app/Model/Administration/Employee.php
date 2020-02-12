<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'adm_employee';

    public function scopeId($query, $type)
    {
        return $query->where('id', $type)->get();
    }

    public function scopeEmail($query, $type)
    {
        return $query->where('email', $type)->get();
    }

    public function scopeTypeId($query, $type)
    {
        return $query->where('employee_type_id', $type)->get();
    }

    public function scopeNameConvert($query, $type)
    {
        return $query->where('id', $type)->pluck('fullname');
    }

}
