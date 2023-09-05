<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Charts\JumlahGenderChart;


class DashboardController extends Controller
{
    public function index(JumlahGenderChart $jumlahGenderChart)
    {
        $anggotas = Anggota::with('Province','Regency','District','Village')->get();
        $chart = $jumlahGenderChart->build();
        return view('admin.dashboard.dashboard',compact('anggotas','chart'));
    }
}
