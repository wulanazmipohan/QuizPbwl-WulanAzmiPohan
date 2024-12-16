<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('user_id'); // Primary Key
            $table->string('user_email', 50)->unique();
            $table->string('user_password', 100);
            $table->string('user_nama', 100);
            $table->text('user_alamat')->nullable();
            $table->string('user_hp', 25)->nullable();
            $table->string('user_pos', 5)->nullable();
            $table->tinyInteger('user_role')->unsigned()->default(2);
            $table->tinyInteger('user_aktif')->unsigned()->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_users');
    }
};