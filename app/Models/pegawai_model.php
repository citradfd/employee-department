<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai_model extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = ['ID', 'Nama'];
    public $timestamps = FALSE;
}
