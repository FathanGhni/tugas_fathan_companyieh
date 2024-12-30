<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $data = [
            [
                'bill_receiver' => 'Adi Muwardi',
                'reservations' => [
                    ['guest_name' => 'Fasal', 'arrival' => '01/09/2024', 'departure' => '02/09/2024', 'checkin_date' => '02/09/2024', 'checkout' => ''],
                    ['guest_name' => 'Dhina', 'arrival' => '01/09/2024', 'departure' => '02/09/2024', 'checkin_date' => '02/09/2024', 'checkout' => ''],
                ]
            ],
            [
                'bill_receiver' => 'Budi Hartanto',
                'reservations' => [
                    ['guest_name' => 'Gilang', 'arrival' => '01/09/2024', 'departure' => '02/09/2024', 'checkin_date' => '02/09/2024', 'checkout' => ''],
                    ['guest_name' => 'Sugianto', 'arrival' => '01/09/2024', 'departure' => '02/09/2024', 'checkin_date' => '02/09/2024', 'checkout' => ''],
                ]
            ],
        ];

        return view('reservations.index', compact('data'));
    }
}
