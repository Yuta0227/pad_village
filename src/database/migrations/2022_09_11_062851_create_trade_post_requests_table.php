<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_post_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trade_board_post_id')->constrained('trade_board_posts');
            $table->foreignId('monster_id')->constrained('monsters');
            $table->integer('monster_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade_post_requests');
    }
};
