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
            $table->char('name', 50); // char(50)
            $table->char('email', 250)->unique(); // char(250)
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    
        // ユーザーを追加
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'xxxxx@gmail.com',
            'password' => Hash::make('test'),
        ]);
        DB::table('users')->insert([
            'name' => 'test02',
            'email' => 'xxxxx@gmail.com',
            'password' => Hash::make('test02'),
        ]);
    }
}
