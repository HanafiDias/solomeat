<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['counter'];

    public function getTable()
    {
        return 'table_tokos';
    }
}
