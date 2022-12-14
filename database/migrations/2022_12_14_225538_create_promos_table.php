<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->string("promoName");
            $table->string("promoPath")->nullable();
            $table->date("promoDateStart");
            $table->date("promoDateEnd");
            $table->integer("promoKouta");
            $table->string("promoCode");
            $table->integer("promoDiscount");
            $table->boolean("status")->default(false)->comment("1 = active, 0 = non active");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promos');
    }
};
