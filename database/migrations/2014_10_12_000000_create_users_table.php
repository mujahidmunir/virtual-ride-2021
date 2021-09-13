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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('google_id')->nullable();
            $table->string('password');
            $table->bigInteger('whatsapp')->nullable();
            $table->bigInteger('phone_digicash')->nullable()->unique();
            $table->string('avatar')->nullable();
            $table->string('nik')->nullable()->unique();
            $table->integer('gender')->nullable();
            $table->date('dob')->nullable();
            $table->integer('prov_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('dist_id')->nullable();
            $table->bigInteger('vill_id')->nullable();
            $table->longText('address')->nullable();
            $table->string('ig_account')->nullable()->unique();
            $table->rememberToken();
            $table->timestamps();
        });
        $user = [
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123'),
        ];
        \Illuminate\Support\Facades\DB::table('users')->insert($user);
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
