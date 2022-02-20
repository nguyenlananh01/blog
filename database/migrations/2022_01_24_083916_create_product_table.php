<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            /*
             * id: khoa chinh, tang dan
             * name: varchar(200)
             * slug: varchar, unique
             * price: float
             * description: text
             * creat_at
             */
            $table->bigIncrements('id');
            $table->string('name',200);
            $table->string('slug');
            $table->float('price',10,2);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
