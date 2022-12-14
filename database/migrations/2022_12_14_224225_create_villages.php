<?php

use App\Models\District;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('villages', function (Blueprint $table) {
            $table->char("id",10)->primary();
            $table->char("district_id",7);
            $table->string("name");
            $table->foreign("district_id","villages_district_id_foreign")->on("districts")->references("id");
        });
    }

    public function down()
    {
        Schema::dropIfExists('villages');
    }
};
