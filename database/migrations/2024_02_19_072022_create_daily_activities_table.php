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
        Schema::create('daily_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->nullable()->constrained('units')->cascadeOnDelete();
            $table->foreignId('code_id')->nullable()->constrained('codes')->cascadeOnDelete();
            $table->foreignId('location_id')->nullable()->constrained('locations')->cascadeOnDelete();
            $table->time('time')->nullable();
            $table->foreignId('report_id')->nullable()->constrained('reports')->cascadeOnDelete();
            $table->date('date_action')->nullable();
            $table->foreignId('device_id')->nullable()->constrained('devices')->cascadeOnDelete();
            $table->foreignId('activity_id')->nullable()->constrained('activities')->cascadeOnDelete();
            $table->foreignId('item_id')->nullable()->constrained('items')->cascadeOnDelete();
            $table->foreignId('actual_problem_id')->nullable()->constrained('actual_problems')->cascadeOnDelete();
            $table->foreignId('action_problem_id')->nullable()->constrained('action_problems')->cascadeOnDelete();
            $table->foreignId('activity_by_contract_id')->nullable()->constrained('activity_by_contracts')->cascadeOnDelete();
            $table->time('arrived')->nullable();
            $table->time('delay')->nullable();
            $table->time('response')->nullable();
            $table->time('start')->nullable();
            $table->time('finish')->nullable();
            $table->time('duration')->nullable();
            $table->time('total')->nullable();
            $table->time('batas_waktu_penngerjaan')->nullable();
            $table->double('sla')->nullable();
            $table->foreignId('status_id')->nullable()->constrained('statuses')->cascadeOnDelete();
            $table->string('action_by')->nullable();
            $table->foreignId('noregistrasi_id')->nullable()->constrained('no_registrasis')->cascadeOnDelete();
            $table->time('start_delay1')->nullable();
            $table->time('stop_delay1')->nullable();
            $table->time('duration_delay1')->nullable();
            $table->foreignId('reason_delay1_id')->nullable()->constrained('reasons')->cascadeOnDelete();
            $table->time('start_delay2')->nullable();
            $table->time('stop_delay2')->nullable();
            $table->time('duration_delay2')->nullable();
            $table->foreignId('reason_delay2_id')->nullable()->constrained('reasons')->cascadeOnDelete();
            $table->time('start_delay3')->nullable();
            $table->time('stop_delay3')->nullable();
            $table->time('duration_delay3')->nullable();
            $table->foreignId('reason_delay3_id')->nullable()->constrained('reasons')->cascadeOnDelete();
            $table->time('start_delay4')->nullable();
            $table->time('stop_delay4')->nullable();
            $table->time('duration_delay4')->nullable();
            $table->foreignId('reason_delay4_id')->nullable()->constrained('reasons')->cascadeOnDelete();
            $table->time('start_delay5')->nullable();
            $table->time('stop_delay5')->nullable();
            $table->time('duration_delay5')->nullable();
            $table->foreignId('reason_delay5_id')->nullable()->constrained('reasons')->cascadeOnDelete();
            $table->time('total_delay')->nullable();
            $table->string('used_parts')->nullable();
            $table->string('used_consumable')->nullable();
            $table->string('remarks')->nullable();
            $table->foreignId('create_by')->nullable()->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_activities');
    }
};
