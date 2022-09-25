<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('category_id')->unsigned();
            $table->string('tags');
            $table->bigInteger('vendor_id')->unsigned();
            $table->decimal('price');
            $table->decimal('sale_price')->default(0);
            $table->string('duration');
            $table->integer('no_of_class');
            $table->string('class_timing');
            $table->string('branch')->nullable();
            $table->string('vendor_exam');
            $table->text('overview');
            $table->text('curriculam');
            $table->bigInteger('mentor_id')->unsigned();
            $table->boolean('on_sale')->default(false);
            $table->dateTime('sale_end')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
