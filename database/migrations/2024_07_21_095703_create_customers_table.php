<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {


            
            
            
            $table->id();
            $table->string('name');
            $table->bigInteger('tel_number');
            $table->bigInteger('order_counter');
            $table->bigInteger("discount");
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
            
            // Связь один ко многим

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
