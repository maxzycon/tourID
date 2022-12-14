<?php

use App\Models\Regency;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->char("id",7)->primary();
            $table->char("regency_id",4);
            $table->string("name");
            $table->foreign("regency_id","districts_regency_id_foreign")->on("regencies")->references("id")->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('districts');
    }
};
