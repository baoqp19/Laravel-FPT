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
        Schema::table('products', function(Blueprint $table){
            $table->string('name', 250)->change();
            $table->string('votes', 20);
        });
    }


    // php artisan migrate:rollback

   
    public function down(): void
    {
        Schema::table('products', function(Blueprint $table){
            $table->string('name', 200)->change();
            $table->dropColumn(['votes']);
        });
    }
};
