<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $primaryKey = 'branch_id';
    protected $fillable = ['branch_code', 'branch_name'];

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'reservasi_branch', 'branch_id');
    }
}
