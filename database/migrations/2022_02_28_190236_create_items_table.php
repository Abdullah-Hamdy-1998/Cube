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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('log_id')->unique()->constrained()->cascadeOnUpdate();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->string('avatar')->default();
            $table->decimal('amount', $precision = 8, $scale = 3)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('items');
    }
};
