<?php

use App\Models\Destination;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Destination::class)->constrained();
            $table->string("customerName");
            $table->string("customerPhone");
            $table->longText("customerAddress");
            $table->string("metode_pembayaran");
            $table->integer("status_payment")->default(0);
            $table->integer("status")->default(0);
            $table->integer("grandTotal");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
