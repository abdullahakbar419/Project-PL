<?php

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
        Schema::create('newsletters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('first_party_id')
                ->constrained()
                ->on('first_parties');
            $table->foreignId('second_party_id')
                ->constrained()
                ->on('second_parties');
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->string('kld');
            $table->string('number_letter_of_assignment')->unique();
            $table->string('location_city');
            $table->timestamp('event_date');
            $table->softDeletes();
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
        Schema::dropIfExists('newsletters', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};