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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('name');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('phone')->nullable()->after('last_name');
            $table->string('address')->nullable()->after('password');
            $table->string('city')->nullable()->after('address');
            $table->string('country')->nullable()->after('city');
            $table->string('postal_code')->nullable()->after('country');
            $table->string('avatar')->nullable()->after('postal_code');
            $table->bigInteger('number_of_orders')->nullable()->after('avatar');
            $table->bigInteger('number_of_bookings')->nullable()->after('number_of_orders');
            $table->double('total_spent')->nullable()->after('number_of_bookings');
            $table->double('points')->nullable()->after('total_spent');
            $table->bigInteger('number_of_reviews')->nullable()->after('points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
