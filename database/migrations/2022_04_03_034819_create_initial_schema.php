<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->nullable()->constrained();
            $table->integer('lp_access_count')->default(0);
            $table->integer('conversion_count')->default(0);
            $table->timestamps();
        });

        Schema::create('referers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campaign_id')->nullable()->constrained();
            $table->string('email')->unique();
            $table->string('promotion_code')->unique();
            $table->integer('lp_access_count')->default(0);
            $table->integer('conversion_count')->default(0);
            $table->timestamps();
        });

        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('referer_id')->constrained();
            $table->string('email')->unique();
            $table->integer('incentive_status')->default(\App\Enums\IncentiveStatus::NOT_CONFIRM);
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
        Schema::dropIfExists('initial_schema');
    }
}
