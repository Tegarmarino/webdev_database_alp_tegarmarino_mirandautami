<?php

use App\Models\Cart;
use App\Models\User;
use App\Models\Payment;
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
        Schema::create('order', function (Blueprint $table) {
            $table->id();

            // Foreign key user
            // $table->unsignedBigInteger('id');
            // $table->foreign('id')->references('id')->on('users');
            $table->foreignIdFor(User::class);

            // $table->unsignedBigInteger('payment_id');
            // $table->foreign('payment_id')->references('payment_id')->on('payments');

            $table->foreignIdFor(Payment::class);

            $table->foreignIdFor(Cart::class);

            $table->enum('status',['no','yes'])->default('no');
            $table->string("bukti_transfer");
            $table->integer("total_price");
            $table->integer("wa_number");
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
        Schema::dropIfExists('order');
    }
};
