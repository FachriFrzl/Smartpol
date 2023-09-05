<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Anggota;

class JumlahKotaChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $user = Anggota::get();
        $jumlahKota1 = Anggota::where('regency_id','3273')->count();
        $jumlahKota2 = Anggota::where('regency_id','3277')->count();
        $jumlahKota3 = Anggota::where('regency_id','3278')->count();
        $jumlahKota4 = Anggota::where('regency_id','3205')->count();
        $jumlahKota5 = Anggota::where('regency_id','3202')->count();
        $jumlahKota6 = Anggota::where('regency_id','3217')->count();

        return $this->chart->barChart()
            ->setTitle('')
            ->setSubtitle('')
            ->addData('Kota Bandung', [$jumlahKota1])
            ->addData('Kabupaten Bandung', [$jumlahKota5])
            ->addData('Kabupaten Bandung Barat', [$jumlahKota6]) 
            ->addData('Kota Cimahi', [$jumlahKota2])
            ->addData('Kota Tasikmalaya', [$jumlahKota3])
            ->addData('Kabupaten Garut', [$jumlahKota4])
            ->setXAxis(['']);
    }
}
