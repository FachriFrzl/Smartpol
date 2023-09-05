<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Anggota;

class JumlahKecamatanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\barChart
    {
        $user = Anggota::get();
        $jumlahKecamatan1 = Anggota::where('district_id','3273010')->count();
        $jumlahKecamatan2 = Anggota::where('district_id','3273020')->count();
        $jumlahKecamatan3 = Anggota::where('district_id','3273030')->count();
        $jumlahKecamatan4 = Anggota::where('district_id','3273040')->count();
        $jumlahKecamatan5 = Anggota::where('district_id','3273050')->count();
        $jumlahKecamatan6 = Anggota::where('district_id','3273060')->count();
        $jumlahKecamatan7 = Anggota::where('district_id','3273070')->count();
        $jumlahKecamatan8 = Anggota::where('district_id','3273080')->count();
        $jumlahKecamatan9 = Anggota::where('district_id','3273090')->count();
        $jumlahKecamatan10 = Anggota::where('district_id','3273100')->count();
        $jumlahKecamatan11 = Anggota::where('district_id','3273101')->count();
        $jumlahKecamatan12 = Anggota::where('district_id','3273110')->count();
        $jumlahKecamatan13 = Anggota::where('district_id','3273111')->count();
        $jumlahKecamatan14 = Anggota::where('district_id','3273120')->count();
        $jumlahKecamatan15 = Anggota::where('district_id','3273121')->count();
        $jumlahKecamatan16 = Anggota::where('district_id','3273130')->count();
        $jumlahKecamatan17 = Anggota::where('district_id','3273141')->count();
        $jumlahKecamatan18 = Anggota::where('district_id','3273142')->count();
        $jumlahKecamatan19 = Anggota::where('district_id','3273150')->count();
        $jumlahKecamatan20 = Anggota::where('district_id','3273160')->count();
        $jumlahKecamatan21 = Anggota::where('district_id','3273170')->count();
        $jumlahKecamatan22 = Anggota::where('district_id','3273180')->count();
        $jumlahKecamatan23 = Anggota::where('district_id','3273190')->count();
        $jumlahKecamatan24 = Anggota::where('district_id','3273200')->count();
        $jumlahKecamatan25 = Anggota::where('district_id','3273210')->count();
        $jumlahKecamatan26 = Anggota::where('district_id','3273220')->count();
        $jumlahKecamatan27 = Anggota::where('district_id','3273230')->count();
        $jumlahKecamatan28 = Anggota::where('district_id','3273240')->count();
        $jumlahKecamatan29 = Anggota::where('district_id','3273250')->count();
        $jumlahKecamatan30 = Anggota::where('district_id','3273260')->count();


        return $this->chart->barChart()
            ->setTitle('')
            ->setSubtitle('')
            ->addData('Bandung Kulon', [$jumlahKecamatan1])
            ->addData('Babakan Ciparay', [$jumlahKecamatan2])
            ->addData('Bojongloa Kaler', [$jumlahKecamatan3])
            ->addData('Bojongloa Kidul', [$jumlahKecamatan4])
            ->addData('Astanaanyar', [$jumlahKecamatan5])
            ->addData('Regol', [$jumlahKecamatan6])
            ->addData('Lengkong', [$jumlahKecamatan7])
            ->addData('Bandung Kidul', [$jumlahKecamatan8])
            ->addData('BuahBatu', [$jumlahKecamatan9])
            ->addData('Rancasari', [$jumlahKecamatan10])
            ->addData('Gedebage', [$jumlahKecamatan11])
            ->addData('Cibiru', [$jumlahKecamatan12])
            ->addData('Panyileukan', [$jumlahKecamatan13])
            ->addData('Ujung Berung', [$jumlahKecamatan14])
            ->addData('Cinambo', [$jumlahKecamatan15])
            ->addData('Arcamanik', [$jumlahKecamatan16])
            ->addData('Antapani', [$jumlahKecamatan17])
            ->addData('Mandalajati', [$jumlahKecamatan18])
            ->addData('Kiaracondong', [$jumlahKecamatan19])
            ->addData('Batununggal', [$jumlahKecamatan20])
            ->addData('Sumur Bandung', [$jumlahKecamatan21])
            ->addData('Andir', [$jumlahKecamatan22])
            ->addData('Cicendo', [$jumlahKecamatan23])
            ->addData('Bandung Wetan', [$jumlahKecamatan24])
            ->addData('Cibeunying Kidul', [$jumlahKecamatan25])
            ->addData('Cibeunying Kaler', [$jumlahKecamatan26])
            ->addData('Coblong', [$jumlahKecamatan27])
            ->addData('Sukajadi', [$jumlahKecamatan28])
            ->addData('Sukasari', [$jumlahKecamatan29])
            ->addData('Cidadap', [$jumlahKecamatan30])
            ->setXAxis(['']);
    }
}
