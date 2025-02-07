<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->longText('qr_code')->nullable();
            $table->bigInteger('number_of_ticket')->nullable(false);
            $table->longText('person_details')->nullable(false);
            $table->longText('price_details')->nullable(false);
            $table->string('total_amount')->nullable(false);
            $table->longText('contact_email')->nullable(false);
            $table->longText('contact_mobile')->nullable(false);
            $table->longText('promo_code')->nullable();
            $table->string('ticket_code')->nullable(false);
            $table->dateTime('expired_at')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
