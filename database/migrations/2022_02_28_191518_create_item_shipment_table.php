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
        Schema::create('item_shipment', function (Blueprint $table) {
            $table->foreignId('shipment_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('item_id')->constrained()->cascadeOnUpdate();
            $table->integer('quantity');
            $table->decimal('amount', $precision = 8, $scale = 3);
            $table->primary(['shipment_id', 'item_id']);
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
        Schema::dropIfExists('item_shipment');
    }
};
