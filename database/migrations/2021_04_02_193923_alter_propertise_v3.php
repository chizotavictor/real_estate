<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPropertiseV3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('yearly_tax_rate')->default('0.00');
            $table->text('address');
            $table->string('city');
            $table->string('country');

            $table->string('rooms')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('available_from')->nullable();
            $table->string('floors')->nullable();
            $table->string('year_built')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
