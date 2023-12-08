<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    public $table = "pemesanan";

    protected $fillable = [
        'nm_pelanggan','nm_produk','jumlah','kursi','ket','id_menu','total'
    ];
}
