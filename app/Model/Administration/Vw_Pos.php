<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Vw_Pos extends Model
{
    protected $table = 'vw_pos';

    public function scopeGetPosId($query, $type)
{
        return $query->where('pos_id', $type)->get();
    }
}
