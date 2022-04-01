<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama', 255);
            $table->string('jk', 11);
            $table->text('alamat', 100);
            $table->string('agama', 36);
            $table->string('asal', 36);
            $table->text('jurusan', 36);
            $table->timestamp('last_used_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
