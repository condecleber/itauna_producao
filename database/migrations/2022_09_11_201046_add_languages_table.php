<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('languages', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->string('code')->nullable();
            $table->string('direction')->nullable();
            $table->string('left')->nullable();
            $table->string('right')->nullable();
            $table->string('icon')->nullable();
            $table->tinyInteger('box_status')->default('1')->nullable();
            $table->tinyInteger('status')->default('1')->nullable();
            
  
        
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
