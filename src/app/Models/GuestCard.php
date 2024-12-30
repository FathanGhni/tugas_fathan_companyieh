<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestCard extends Model
{
    use HasFactory;

    protected $table = 'guest_cards';
    protected $primaryKey = 'guest_id';
    protected $fillable = ['guest_name'];

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'reservasi_guestId', 'guest_id');
    }
}
