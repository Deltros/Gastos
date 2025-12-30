<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('movement_type_id')->constrained();
            $table->foreignId('payment_method_id')->constrained();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->decimal('amount', 12, 2);
            $table->string('currency', 3);
            $table->string('description')->nullable();
            $table->date('date');
            $table->boolean('is_installments')->default(false);
            $table->integer('installments_count')->nullable();
            $table->decimal('installment_amount', 12, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
