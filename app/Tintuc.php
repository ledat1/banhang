<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    protected $fillable = ['Tieude','Tomtat', 'Noidung','Noibat','Hinh','Tuvan'];
    protected $table = 'tintucs';

}
