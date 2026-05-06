<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $data = Booking::all();
        return view('booking.index', compact('data'));
    }

    public function store(Request $request)
    {
        Booking::create([
            'id_booking' => $request->id_booking,
            'id_user' => $request->id_user,
            'id_fields' => $request->id_fields,
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_berakhir' => $request->waktu_berakhir,
            'total_harga' => $request->total_harga,
            'status' => $request->status,
        ]);

        return back();
    }

    public function update(Request $request, $id)
    {
        Booking::where('id_booking', $id)->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        Booking::where('id_booking', $id)->delete();
        return back();
    }
}
