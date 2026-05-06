<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        $data = Field::all();
        return view('fields.index', compact('data'));
    }

    public function store(Request $request)
    {
        Field::create($request->all());
        return back();
    }

    public function update(Request $request, $id)
    {
        Field::where('id_fields', $id)->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        Field::where('id_fields', $id)->delete();
        return back();
    }
}
