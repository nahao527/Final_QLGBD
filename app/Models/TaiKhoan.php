<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    use HasFactory;

    protected $table = 'tai_khoan';
    protected $fillable = [
        'ten_dang_nhap',
        'mat_khau',
        'email',
        'ho_ten',
        'so_dien_thoai',
        'anh_dai_dien',
        'loai_tai_khoan',
        'lop'
    ];

    public function getPasswordAttribute(){
        return $this->mat_khau;
    }
}
