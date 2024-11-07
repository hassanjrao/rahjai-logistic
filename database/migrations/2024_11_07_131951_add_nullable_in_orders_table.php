<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {

            $table->string('sender_name')->nullable()->change();
            $table->string('sender_phone')->nullable()->change();
            $table->string('sender_email')->nullable()->change();

            $table->string('receiver_name')->nullable()->change();
            $table->string('receiver_phone')->nullable()->change();
            $table->string('receiver_email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('sender_name')->change();
            $table->string('sender_phone')->change();
            $table->string('sender_email')->change();

            $table->string('receiver_name')->change();
            $table->string('receiver_phone')->change();
            $table->string('receiver_email')->change();

            $table->string('image_path')->change();
        });
    }
}
