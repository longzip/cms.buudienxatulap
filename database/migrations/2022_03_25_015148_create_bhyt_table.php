<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBhytTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bhyts', function (Blueprint $table) {
            $table->id();
            $table->string('maSoBhxh')->unique();
            $table->date('tuNgayDt')->nullable();
            $table->date('denNgayDt')->nullable();
            $table->date('ngaySinhDt')->nullable();
            $table->string('maKCB')->nullable();
            $table->boolean('coTheUuTienCaoHon')->nullable();
            $table->boolean('gioiTinh')->nullable();
            $table->string('soTheBhyt')->nullable();
            $table->string('soCmnd')->nullable();
            $table->string('ngay5Nam')->nullable();
            $table->string('soDienThoai')->nullable();
            $table->string('hoTen')->nullable();
            $table->boolean('completed')->nullable()->default(0);
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
        Schema::dropIfExists('bhyt');
    }
}
