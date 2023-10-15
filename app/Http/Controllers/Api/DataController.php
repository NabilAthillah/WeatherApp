<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Data;
use App\Http\Resources\DataResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::get();

        return view('history', ['data' => $data]);
    }

    public function dashboard()
    {
        $data = Data::latest()->paginate(1);

        return view('dashboard', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'suhu'     => 'required',
            'kelembapan'     => 'required',
            'lux'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = Data::create([
            'suhu'     => $request->suhu,
            'kelembapan'     => $request->kelembapan,
            'lux'   => $request->lux,
        ]);

        //return response
        return new DataResource(true, 'Data Berhasil Ditambahkan!', $data);
    }

    public function show(Data $data)
    {
        //return single post as a resource
        return new DataResource(true, 'Data Ditemukan!', $data);
    }
}
