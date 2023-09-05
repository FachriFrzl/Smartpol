<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\Anggota;
use Illuminate\Support\Facades\Storage;

class AdminAnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::with('Province','Regency','District','Village')->get();
        return view('admin.anggota.index',compact('anggotas'));
    }

    public function create()
    {
        $provinces = Province::all();

        return view('admin.anggota.create',compact('provinces'));
    }

    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request -> id_provinsi;

        $kabupatens = Regency::where('province_id',$id_provinsi)->get();

        foreach($kabupatens as $kabupaten)
        {
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
    }

    public function getkecamatan(Request $request)
    {
        $id_kabupaten = $request -> id_kabupaten;

        $kecamatans = District::where('regency_id',$id_kabupaten)->get();

        foreach($kecamatans as $kecamatan)
        {
            echo "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
    }

    public function getkelurahan(Request $request)
    {
        $id_kecamatan = $request -> id_kecamatan;

        $kelurahans = Village::where('district_id',$id_kecamatan)->get();

        foreach($kelurahans as $kelurahan)
        {
            echo "<option value='$kelurahan->id'>$kelurahan->name</option>";
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'                     => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'name'                      => 'required',
            'nik'                       => 'required',
            'birth_place'               => 'required',
            'birth_date'                => 'required',
            'alamat'                    => 'required',
            'province_id'               => 'required',
            'regency_id'              => 'required',
            'district_id'              => 'required',
            'village_id'               => 'required',
            'rw'                        => 'required',
            'rt'                        => 'required',
        ]); 
      //upload image
    $image = $request->file('image');
    $image->storeAs('public/anggotas', $image->hashName());

    //save to db
    $anggotas = Anggota::create([
            'image'                     => $image->hashName(),
            'name'                      => $request->name,
            'nik'                       => $request->nik,
            'birth_place'               => $request->birth_place,
            'birth_date'                => $request->birth_date,
            'alamat'                    => $request->alamat,
            'gender'                    => $request->gender,
            'province_id'               => $request->province_id,
            'regency_id'                => $request->regency_id,
            'district_id'               => $request->district_id,
            'village_id'                => $request->village_id,
            'rw'                        => $request->rw,
            'rt'                        => $request->rt,
    ]);

    if($anggotas)
    {
        return redirect()->route('admin.anggota.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    else
    {
        return redirect()->route('admin.anggota.index')->with(['error' => 'Data Gagal Disimpan!']);
    }

    }


}
