<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('description');


            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('category_id')->constrained();

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
