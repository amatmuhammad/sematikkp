<?php

namespace App\Models;

use App\Models\mhs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tahun extends Model
{
    use HasFactory;

    protected $table = 'tahun';
    protected $guarded = ['id'];
    protected $fillable = ['id','tahun'];


    
   
}
