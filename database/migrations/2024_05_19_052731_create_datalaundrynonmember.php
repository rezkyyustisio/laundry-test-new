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
        Schema::create('datalaundrynonmember', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawai_id')->constrained('pegawai');
            $table->date('tgl_transaksi');
            $table->string('nama_customer');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('keterangan');
            $table->enum('status_laundry', ['menunggu', 'diproses', 'selesai']);
            $table->enum('status_pembayaran', ['bayar', 'belum']);
            $table->text('lokasi_kirim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datalaundrynonmember');
    }
};
