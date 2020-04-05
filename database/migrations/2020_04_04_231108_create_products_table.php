<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->string('title');
            $table->string('product_image');
            $table->text('description');
            $table->integer('stock');
            $table->double('price');

            $table->index('user_id');
        });

        DB::table('products')->insert([
            'user_id' => 1,
            'title' => 'Espresso Machine',
            'product_image' => 'https://images.unsplash.com/photo-1518730338340-21e4933f6201?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80',
            'description' => 'High Level Espresso Machine',
            'stock' => 999,
            'price' => 1499.49
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'title' => 'Chair',
            'product_image' => 'https://images.unsplash.com/photo-1561224608-4033a2c44c4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80',
            'description' => 'Black chair with red legs',
            'stock' => 999,
            'price' => 899.21
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'title' => 'Minimalistic Lamp',
            'product_image' => 'https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80',
            'description' => 'Very minimalistic lamp',
            'stock' => 24,
            'price' => 349.44
        ]);

        DB::table('products')->insert([
            'user_id' => 2,
            'title' => 'Blue Chair',
            'product_image' => 'https://images.unsplash.com/photo-1541558949596-1d9103f64840?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60',
            'description' => 'Comfortable blue chair',
            'stock' => 2,
            'price' => 932.32
        ]);

        DB::table('products')->insert([
            'user_id' => 2,
            'title' => 'Table',
            'product_image' => 'https://images.unsplash.com/photo-1530018607912-eff2daa1bac4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80',
            'description' => 'Small table that can be used as desk',
            'stock' => 20,
            'price' => 350.99
        ]);

        DB::table('products')->insert([
            'user_id' => 2,
            'title' => 'Bed',
            'product_image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80',
            'description' => 'Comfortable queen size bed',
            'stock' => 24,
            'price' => 3677.11
        ]);
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
