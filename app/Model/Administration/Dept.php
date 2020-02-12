<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    protected $table = 'adm_dept';

    public function scopeGetDeptDiv($query, $type)
    {
        return $query->where('dept_id', $type)
                     ->where('dept_active',1)
                     ->get();
    }
}
