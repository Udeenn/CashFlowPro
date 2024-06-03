<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\CashflowFactory;

class M_Cashflow extends Model
{
    use HasFactory;

    protected $table = 'cashflow';
    protected $fillable = ['tanggal', 'tipe', 'nominal', 'keterangan'];
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected static function newFactory()
    {
        return CashflowFactory::new();
    }
}


