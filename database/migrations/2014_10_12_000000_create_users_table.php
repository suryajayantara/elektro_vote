<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email',100)->unique()->nullable();
            $table->string('nim',15)->unique()->nullable();
            $table->string('kelas',10)->nullable();
            $table->enum('prodi',['MI','TO','TL','TRPL']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->boolean('status_pilih')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
