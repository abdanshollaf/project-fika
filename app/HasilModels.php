<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilModels extends Model
{
    protected $table =   'tbl_uji';
    protected $fillable = ['id', 'abstrak', 'katasalah', 'koreksi', 'created_at', 'update_at'];
}
