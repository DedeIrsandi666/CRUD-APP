<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminmenu extends Model
{
    use HasFactory;

    public $table = "menu";

    protected $fillable = [
        'nama_menu', 'harga', 'ket', 'foto'
    ];

}
