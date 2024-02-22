<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
        use HasFactory;
    protected $guarded = [];

    public function setJenisAttribute($value)
    {
        $this->attributes['jenis'] = json_encode($value);
    }

    public function getJenisAttribute($value)
    {
        return $this->attributes['Jenis'] = json_decode($value);
    }
    protected $fillable = ['foto', 'nama', 'keterangan', 'jenis', 'status','nissekolah','lokasi'];
}
