<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $data = Payment::all();
        return view('payment.index', compact('data'));
    }

    public function store(Request $request)
    {
        $file = $request->file('bukti_pembayaran')->store('bukti');

        Payment::create([
            'id_payment' => $request->id_payment,
            'id_booking' => $request->id_booking,
            'bukti_pembayaran' => $file,
            'status' => $request->status,
        ]);

        return back();
    }

    public function update(Request $request, $id)
    {
        Payment::where('id_payment', $id)->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        Payment::where('id_payment', $id)->delete();
        return back();
    }
}
