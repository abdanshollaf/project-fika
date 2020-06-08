<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataModels extends Model
{
    protected $table =   'tbl_jurnal';
    protected $fillable = ['id', 'penulis', 'no', 'tahun', 'volume', 'judul', 'abstrak', 'namafile', 'path'];
}
