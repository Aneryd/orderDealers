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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string("dealer_name");
            $table->string("employee_name");
            $table->integer("amount");
            $table->integer("time");
            $table->foreignId('bank_id')
                ->constrained('banks')
                ->cascadeOnDelete();
            $table->text("reason");
            $table->enum("status", ["NEW", "PROGRESS", "APPROVED", "REJECTED"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
