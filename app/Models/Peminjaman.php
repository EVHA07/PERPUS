<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'id';  

    protected $fillable = [
        'UserID',
        'BukuID',
        'TanggalPeminjaman',
        'TanggalPengembalian',
        'StatusPeminjaman'
    ];
    public function buku() {
         return $this->belongsTo(Buku::class, 'BukuID'); 
        } // Relasi dengan model User (opsional jika diperlukan) public function user() { return $this->belongsTo(User::class, 'UserID'); }

        public function user() {
         return $this->belongsTo(User::class, 'UserID'); 
        }
    public $timestamps = false;  

    
}
