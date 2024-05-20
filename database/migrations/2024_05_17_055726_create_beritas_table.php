<?php

use App\Models\KategoriBerita;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->dateTime('waktu_publish');
            $table->integer('views')->default(0);
            $table->text('deskripsi');
            $table->longText('content');
            $table->foreignIdFor(KategoriBerita::class)->constrained('kategori_beritas', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('cover')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
