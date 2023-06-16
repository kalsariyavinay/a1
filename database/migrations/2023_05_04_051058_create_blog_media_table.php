<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_media', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_id');
            $table->integer('media_type')->default(1);  // image = 1, video = 2 
            $table->string('url');
            $table->boolean('is_active')->default(0);  // show = 0, hide = 1 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_media');
    }
};
