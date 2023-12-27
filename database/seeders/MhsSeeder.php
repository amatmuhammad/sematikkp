<?php

namespace Database\Seeders;

use App\Models\mhs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\Double;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        mhs::create([
            // 'password' => Hash::make('12345'),
            // 'username' => 'amat',
            // 'id' => '',
            'nim' => 'E1E120084',
            'nama' => 'AMAT',
            'tahun_masuk' => '2020',
            'tahun_ajaran' => '2020-1',
            'semester' => '5',
            'ipk' => ('3.21'),
            'status' => ('belum di evaluasi'),
            
          ]);  
    }
}
