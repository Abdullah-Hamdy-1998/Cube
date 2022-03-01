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
        Schema::create('supplier_shipment', function (Blueprint $table) {
            $table->foreignId('shipment_id')->unique()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('supplier_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['shipment_id', 'supplier_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_shipment');
    }
};
