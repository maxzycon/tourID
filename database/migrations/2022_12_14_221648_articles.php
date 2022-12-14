<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string("articleName");
            $table->string("articleSlug");
            $table->text("articleContent");
            $table->string("articleThumbnailPath");
            $table->foreignIdFor(User::class)->constrained()->restrictOnDelete();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
