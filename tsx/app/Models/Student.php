<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $guarded=['id'];//Nó sẽ lấy về tất cả các trường trừ id(có tác dụng trong thêm sửa xóa)
}
