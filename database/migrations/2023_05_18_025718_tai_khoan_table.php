<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaiKhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tai_khoan', function (Blueprint $table) {
            $table->id();
            $table->string('ten_dang_nhap'); 
            $table->string('mat_khau');
            $table->string('email');
            $table->string('ho_ten');
            $table->string('so_dien_thoai');
            $table->string('anh_dai_dien')->nullable();
            $table->Tinyinteger('loai_tai_khoan')->default('0');
            $table->string('lop');
            $table->SoftDeletes();
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
        //
    }
}
