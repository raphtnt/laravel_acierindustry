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
        Schema::create('runs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id_send');
            $table->foreign('user_id_send')->references('id')->on('users');

            $table->unsignedBigInteger('user_id_receive')->nullable();
            $table->foreign('user_id_receive')->references('id')->on('users');

            $table->unsignedBigInteger('user_id_interim')->nullable();
            $table->foreign('user_id_interim')->references('id')->on('users');


            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items');


            $table->integer('quantity')->nullable();
            $table->integer('unitprice')->nullable();
            $table->string('status'); // En cours | Terminé | Annulé | Traitement | Vente
            $table->boolean('repair')->nullable(); // En cours | Terminé | Annulé | Traitement | Vente

            $table->integer('weeks');
            $table->integer('month');
            $table->integer('years');

            $table->boolean('paid')->nullable(); // 0 = non payé | 1 = payé

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('runs');
    }
};
