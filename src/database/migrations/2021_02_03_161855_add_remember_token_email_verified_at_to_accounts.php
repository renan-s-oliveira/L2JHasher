<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRememberTokenEmailVerifiedAtToAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            if (!Schema::hasColumn('accounts', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('accounts', 'email')) {
                $table->string('email')->unique();
            } 
            if (!Schema::hasColumn('accounts', 'email_verified_at')) {
                $table->timestamp('email_verified_at')->nullable();
            } 
            if (!Schema::hasColumn('accounts', 'remember_token')) {
                $table->rememberToken();
            }     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropColumn('email_verified_at', 'remember_token');
            $table->string('name');
            $table->string('email')->unique();
        });
    }
}
