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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ma_san_pham',20)->unique(); // không cho phép giá trị trùng nhauphp artisan migrate
            $table->string('ten_san_pham', 255);
            $table->decimal('gia', 10, 2);
            $table->decimal('gia_khuyen_mai', 10,2)->nullable(); // Cho phép trường có giá trị null
            $table->string('hinh_anh',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
