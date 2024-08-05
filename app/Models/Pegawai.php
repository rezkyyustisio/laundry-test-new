<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_pegawai', 'alamat', 'no_hp', 'user_id','jabatan'
    ];
    public $timestamps = true;

    public function users()
    {
        return $this->hasOne('App\Models\User', 'id','user_id');
    }

    public function laundry_non_member()
    {
        return $this->hasOne('App\Models\LaundryNonMember', 'pegawai_id');
    }
}
