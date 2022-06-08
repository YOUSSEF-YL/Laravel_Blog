<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('author');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('image')->nullable();
            $table->enum('status', ["PUBLISHED","DRAFT"]);
            $table->date('date');
            $table->boolean('featured')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
