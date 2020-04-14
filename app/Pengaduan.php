<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = [
    	'tgl_pengaduan','nik','isi_laporan','foto','status'
    ];

    public function masyarakat()
    {
    	return $this->hasOne('App\Masyarakat','nik','nik');
    }

}