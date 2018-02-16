<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //jika nama kelas model maka cukup assign -> protected $table = 'ngasal'
    //jika nama kelas plural maka tidak perlu lagi di assign nama kelasnya

    //secara otomatis laravel ekspetasi kalau kita memilki kolom created_at dan updated_at
    //tetapi jika tidak ada maka kita harus define -> public $timestamps = false

    public $timestamps = false;

    //protected $fillable = ['title','description'];
    protected $guarded = ['created_at'];
}
