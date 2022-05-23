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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('genId');
            $table->integer('typeIds');
            $table->integer('familyId');
            $table->integer('max_cp')->nullable()->default(0);
            $table->integer('base_attack')->nullable()->default(0);
            $table->integer('base_defence')->nullable()->default(0);
            $table->integer('base_stamina')->nullable()->default(0);
            $table->string('weight')->nullable()->default(0);
            $table->string('height')->nullable()->default(0);
            $table->text('description')->nullable()->default(0);
            $table->text('category')->nullable()->default(0);
            $table->integer('buddy_distance')->nullable()->default(0);
            $table->enum('isTransferEnable', ['yes', 'no']);
            $table->enum('isTradeEnable', ['yes', 'no']);
            $table->enum('isPutGym', ['yes', 'no']);
            $table->enum('isShinyReleased', ['yes', 'no']);
            $table->json('other')->nullable();

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
        Schema::dropIfExists('pokemon');
    }
};
