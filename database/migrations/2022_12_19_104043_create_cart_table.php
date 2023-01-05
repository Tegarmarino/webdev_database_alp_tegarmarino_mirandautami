<?php

use App\Models\Product;
use App\Models\Order;
use App\Models\User;
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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();

            // Foreign key user
            // $table->unsignedBigInteger('product_id');
            // $table->foreign('product_id')->references('product_id')->on('products');

            $table->foreignIdFor(Product::class);

            // Foreign key order
            // $table->unsignedBigInteger('order_id');
            // $table->foreign('order_id')->references('order_id')->on('orders');

            // $table->foreignIdFor(Order::class);

            $table->foreignIdFor(User::class);

            // $table->string("status");
            // $table->integer("quantity");
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
        Schema::dropIfExists('cart');
    }
};
