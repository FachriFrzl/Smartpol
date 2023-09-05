<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Charts\JumlahGenderChart;
use App\Charts\JumlahKotaChart;
use App\Charts\JumlahKecamatanChart;


class DashboardController extends Controller
{
    public function index(JumlahGenderChart $jumlahGenderChart, JumlahKotaChart $jumlahKotaChart,JumlahKecamatanChart $jumlahKecamatanChart)
    {
        $anggotas = Anggota::with('Province','Regency','District','Village')->get();
        $chart1 = $jumlahGenderChart->build();
        $chart2 = $jumlahKotaChart->build();
        $chart3 = $jumlahKecamatanChart->build();
        return view('admin.dashboard.dashboard',compact('anggotas','chart1','chart2','chart3'));
    }
}
