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
        Schema::table('members', function (Blueprint $table) {
            $table->string('membership_id')->nullable()->default(null)->change(); // Change '1' to your desired default value
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('membership_id');
        });
    }
};
