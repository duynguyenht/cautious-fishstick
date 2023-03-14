<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    use HasFactory;

    protected $table = 'nha_cung_cap';

    protected $guarded = ['id'];

    public function getTrangThai()
    {
        return $this->hasOne(TrangThai::class, 'id', 'trang_thai');
    }
}
