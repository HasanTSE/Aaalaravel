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
        Schema::create('bank__accounts', function (Blueprint $table) {
           $table->id();
           
            $table->string('account_name');
            $table->bigInteger('account_no');
            $table->integer('bank_id');
            $table->string('branch_name');
            $table->date('opening_date');
            $table->double('opening_balance');
            $table->integer('is_active')->nullable();
                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank__accounts');
    }
};
