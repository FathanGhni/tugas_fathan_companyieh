<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasis';
    protected $primaryKey = 'reservasi_id';
    protected $fillable = [
        'reservasi_branch',
        'reservasi_guestId',
        'reservasi_billreceiver',
        'reservasi_checkin',
        'reservasi_checkout',
        'reservasi_arrival',
        'reservasi_departure'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'reservasi_branch', 'branch_id');
    }

    public function guestCard()
    {
        return $this->belongsTo(GuestCard::class, 'reservasi_guestId', 'guest_id');
    }
}
