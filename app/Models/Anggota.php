<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Province;
use App\Models\District;
use App\Models\Village;
use Carbon\Carbon;

class Anggota extends Model
{
    use HasFactory;


    protected $fillable = [
        'image','name','nik','birth_place','birth_date','gender','alamat','province_id','regency_id','district_id','village_id','rt','rw'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/formdaftars/' . $value),
        );
    }

    /**
     * birth_date
     *
     * @return Attribute
     */
    protected function birth_date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y'),
        );
    }

    public function calculateAge($birth_date)
    {
    // Konversi birth_date menjadi objek Carbon
    $birthDate = Carbon::parse($birth_date);

    // Hitung selisih tahun antara tanggal lahir dan tanggal sekarang
    $age = $birthDate->diffInYears(Carbon::now());

    return $age;
    }


    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    
    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
