<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtificerTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('data');
            $table->boolean('confirmed');
            $table->char('code', 4);
            $table->decimal('amount', 5, 2);
            $table->double('column', 15, 8);
            $table->enum('choices', ['foo', 'bar']);
//            $table->float('amount_bos');
//            $table->integer('votes');
//            $table->ipAddress('visitor_ip');
//            $table->json('options');
//            $table->macAddress('device');
//            $table->mediumInteger('numbers');
//            $table->morphs('taggable');
//            $table->rememberToken();
//            $table->string('email');
//            $table->string('name', 100);
//            $table->text('description');
//            $table->time('sunrise_time');
//            $table->timestamp('added_on');
//            $table->timestamps();
//            $table->uuid('uid');

//            $table->integer('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tests');
    }
}
