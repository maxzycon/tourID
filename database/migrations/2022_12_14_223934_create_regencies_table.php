<?php

use App\Models\Province;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('regencies', function (Blueprint $table) {
            $table->char("id",4)->primary();
            $table->char("province_id",12);
            $table->string("name");
            $table->foreign("province_id","regencies_province_id_foreign")->on("provinces")->references("id")->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('regencies');
    }
};
