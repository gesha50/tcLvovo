<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 100)->comment('phone')->default('+8 916 191 99 15');
            $table->string('email', 100)->comment('email')->default('mail@mail.ru');
            $table->string('address', 255)->comment('address')
                ->default('город Москва, поселение Вороновское, деревня Львово, Крутовская улица, дом 29 строение 7');
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
        Schema::dropIfExists('contacts');
    }
}
