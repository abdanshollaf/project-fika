<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengujianModels extends Model
{
    protected $table = 'tbl_proses';
    protected $fillable = ['status', 'abstrak', 'tipo', 'hasil'];
}
