<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mhs', function (Blueprint $table) {
            $table->id();
            $table->String('nim');
            $table->string('nama');
            $table->integer('tahun')->nullable(); 
            $table->integer('semester');
            $table->integer('jumlahsks');
            $table->float('ipk');
            // $table->string('status')->nullable();
            $table->timestamps();
            // $table->index('tahun_id');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mhs');
        $table->unsignedBigInteger('tahun_id')->change();
        // $table->dropForeign('tahun_id');
    }
};
