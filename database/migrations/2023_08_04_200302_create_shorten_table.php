<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortenTable extends Migration
{
    public function up()
    {
        Schema::create('shorten', function (Blueprint $table) {
            $table->id();
            $table->string('short_code')->unique();
            $table->string('original_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shorten');
    }
}