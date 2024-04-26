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
        // Check if the 'match_id' column doesn't exist before adding it
        if (!Schema::hasColumn('bids', 'match_id')) {
            Schema::table('bids', function (Blueprint $table) {
                $table->unsignedBigInteger('match_id');

                // Add foreign key constraint
                $table->foreign('match_id')->references('id')->on('match_proposals')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bids', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['match_id']);

            // Drop match_id column
            $table->dropColumn('match_id');
        });
    }
};
