<?php

use App\Models\Feature;
use App\Models\Item;
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
        Schema::create('FeatureItem', function (Blueprint $table) {
            $table->primary(['feature_id', 'item_id']);
            $table->foreignIdFor(Feature::class);
            $table->foreignIdFor(Item::class);
            $table->string('value');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_item');
    }
};
