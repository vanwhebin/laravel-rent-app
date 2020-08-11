<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('username', 30)->comment('帐号');
            $table->string('real_name', 20)->default('未知')->comment('真实姓名');
            $table->string('password', 255)->comment('密码');
            $table->string('email', 50)->nullable()->comment('邮箱');
            $table->string('phone', 20)->default('')->comment('手机号码');
            $table->enum('gender', ['先生', '女士'])->default('先生')->comment('性别');
            $table->char('last_ip', 15)->default('')->comment('登录IP');
            $table->timestamps();
            $table->softDeletes();
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
