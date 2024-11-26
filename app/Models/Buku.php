<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'BukuID'; 
    public $timestamps = false; 

    protected $fillable = ['Judul', 'Penulis', 'Penerbit', 'TahunTerbit'];
}