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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->text('contract_no');
            $table->text('name');
            $table->text('position');
            $table->text('company');
            $table->text('address');
            $table->bigInteger('service_details')->default(0);
            $table->text('subject');
            $table->text('schedule_of_broadcast');
            $table->date('start_of_broadcast');
            $table->date('end_of_broadcast');
            $table->text('billing_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
