<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Check if the 'amount' column doesn't exist before adding it
        if (!Schema::hasColumn('bids', 'amount')) {
            Schema::table('bids', function (Blueprint $table) {
                $table->decimal('amount', 10, 2)->default(0); // Adjust the precision and default value as needed
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Since this is a rollback, dropping the 'amount' column is not necessary
    }
};
