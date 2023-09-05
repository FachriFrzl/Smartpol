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
        $jumlahLakiLaki = Anggota::where('gender','laki-laki')->count();
        $jumlahPerempuan = Anggota::where('gender','perempuan')->count();
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
