<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Anggota;

class JumlahUserChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $user = Anggota::get();
        $jumlahProvinsi = Anggota::where('province_id','32')->count();
        $jumlahKota     =     Anggota::where('regency_id','3273')->count();
        $jumlahKecamatan =     Anggota::where('district_id','3273240')->count();
        $jumlahKelurahan =     Anggota::where('village_id','3273240004')->count();

        dd($jumlahProvinsi);

        $label = ['Laki-Laki'];
        $labels = ['Perempuan'];
        return $this->chart->pieChart()
            ->setTitle('Data User')
            ->setSubtitle('Total User')
            ->addData([$jumlahLakiLaki])
            ->addData([$jumlahPerempuan])
            ->setLabels([$label,$labels]);
    }
}
