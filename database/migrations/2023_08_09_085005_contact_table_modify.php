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
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('mail_name')->nullable()->after('name');
            $table->dropColumn('name');
            $table->string('mail_email')->nullable()->after('email');
            $table->dropColumn('email');
            $table->string('mail_head')->nullable()->after('subject');
            $table->dropColumn('subject');
            $table->string('mail_body')->nullable()->after('message_body');
            $table->dropColumn('message_body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
