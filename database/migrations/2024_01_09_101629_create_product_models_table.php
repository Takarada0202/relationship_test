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
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(\App\Models\Product::class, 'product_id')->nullable();
            $table->foreignIdFor(\App\Models\Diagnosis::class, 'diagnosis_id')->nullable();
            $table->foreignIdFor(\App\Models\LogicBuilder::class, 'logic_builder_id')->nullable();
            $table->foreignIdFor(\App\Models\ProductModelSuffix::class, 'product_model_suffix_id')->nullable();
            $table->foreignIdFor(\App\Models\Jig::class, 'jig_id')->nullable();
            $table->foreignIdFor(\App\Models\LogData::class, 'log_data_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produt_model');
    }
};
