<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', '100')->default('ООО "БОССИКО"');
            $table->string('name', '100')->default('ТК ЛЬВОВО');
            $table->text('description')->default('Наша компания предоставляет торговые площадки в аренду');
            $table->integer('works_room')->default(1);
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
        Schema::dropIfExists('informations');
    }
}
