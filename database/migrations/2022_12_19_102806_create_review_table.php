<?php

use App\Models\Product;
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
        Schema::create('review', function (Blueprint $table) {
            $table->id();

            // Foreign key user
            // $table->unsignedBigInteger('id');
            // $table->foreign('id')->references('id')->on('users');

            $table->foreignIdFor(User::class);

             // Foreign key user
            // $table->unsignedBigInteger('product_id');
            // $table->foreign('product_id')->references('product_id')->on('products');

            $table->foreignIdFor(Product::class);

            $table->string("review");

            $table->enum('status',['no','yes'])->default('no');

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
        Schema::dropIfExists('review');
    }
};
