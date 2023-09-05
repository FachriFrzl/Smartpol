<?php

namespace App\Charts;

use App\Models\Anggota;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class JumlahGenderChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $user = Anggota::get();
        $jumlahLakiLaki = Anggota::where('gender','laki-laki')->count();
        $jumlahPerempuan = Anggota::where('gender','perempuan')->count();
        $label = ['Laki-Laki'];
        $labels = ['Perempuan'];
        return $this->chart->barChart()
            ->setTitle('Jumlah Data Anggota')
            ->setSubtitle('Jumlah Data Anggota Per Gender')
            ->addData('Laki-Laki',[$jumlahLakiLaki])
            ->addData('Perempuan',[$jumlahPerempuan])
            ->setXAxis(['','']);
    }
}
