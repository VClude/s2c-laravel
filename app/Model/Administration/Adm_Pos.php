<?php

namespace App\Model\Administration;

use Illuminate\Database\Eloquent\Model;

class Adm_Pos extends Model
{
    protected $table = 'adm_pos';

    public function scopeGetJobPos($query, $type)
    {
        return $query->where('pos_id', $type)->get();
    }
}