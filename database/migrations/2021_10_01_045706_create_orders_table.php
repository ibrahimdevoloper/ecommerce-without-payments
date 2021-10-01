<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('total_price');
            $table->timestamp('date');
            $table->string('customer_notes')->nullable();
            $table->string('admin_notes')->nullable();
            $table->string('code',12);
            $table->string('delivery_name')->nullable();
            $table->string('delivery_contact')->nullable();
            $table->boolean('is_delivered')->default(false);
            $table->boolean('is_varified')->default(false);
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('orders');
    }
}
