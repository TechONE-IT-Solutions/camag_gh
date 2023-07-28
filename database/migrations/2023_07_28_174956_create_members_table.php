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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('hometown');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('electoral_area');
            $table->string('district');
            $table->string('region');
            $table->string('nationality');
            $table->string('residential address');
            $table->string('digital_address');
            $table->string('marital_status');
            $table->string('telehone_number');
            $table->string('email_address');
            $table->string('educational_level');
            $table->string('type_of_membership');
            $table->string('emergency_name');
            $table->string('emergency_relation');
            $table->string('emergency_contact');
            $table->string('signature');
            $table->string('photo');
            $table->string('membership_id')->default(null);
            $table->string('paid')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
