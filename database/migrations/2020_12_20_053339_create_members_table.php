<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('wa_num')->unique();
            $table->string('line_id')->unique();
            $table->string('github');
            $table->string('birth_place');
            $table->date('birth_day');
            $table->string('cv');
            $table->string('card');
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
        Schema::dropIfExists('members');
    }
}
