<?php

namespace App\Models;

use App\Models\Tahun;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mhs extends Model
{
    use HasFactory;
    protected $table = 'mhs';
    protected $guarded = ['id'];
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['nim','nama','tahun','semester','jumlahsks','ipk'];


    // public function tahun(): BelongsTo
    // {
    //     return $this->belongsTo(Tahun::class, 'tahun_id');
    // }
    

    // public function relasitahun($tahun_id = null){
       
    // }
    // / Lakukan JOIN antara tabel "mahasiswa" dengan tabel "tahun"
    
}


// p/ public static function search($query)
// {
//     return self::where('name', 'LIKE', '%' . $query . '%')
//         ->orWhere('email', 'LIKE', '%' . $query . '%')
//         ->orWhere('address', 'LIKE', '%' . $query . '%')
//         ->get();
// }
