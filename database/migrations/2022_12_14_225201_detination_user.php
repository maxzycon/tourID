<?php

use App\Models\Destination;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('detination_user', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Destination::class)->constrained();
            $table->integer("price");
            $table->smallInteger("status");
        });
    }

    public function down()
    {
        Schema::dropIfExists('detination_user');
    }
};
