<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id'); // Primary Key
            $table->tinyInteger('pel_id_gol')->unsigned(); // Foreign Key ke tb_golongan
            $table->string('pel_no', 20)->unique();
            $table->string('pel_nama', 50);
            $table->text('pel_alamat')->nullable();
            $table->string('pel_hp', 20)->nullable();
            $table->string('pel_ktp', 50)->nullable();
            $table->string('pel_seri', 50)->nullable();
            $table->integer('pel_meteran')->unsigned();
            $table->enum('pel_aktif', ['Y', 'N'])->default('Y');
            $table->integer('pel_id_user')->unsigned()->nullable(); // Foreign Key ke tb_users
            $table->timestamp('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->nullable();

            // Relasi
            $table->foreign('pel_id_gol')->references('gol_id')->on('tb_golongan')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pel_id_user')->references('user_id')->on('tb_users')
                ->onDelete('set null')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};