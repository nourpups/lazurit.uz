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
      Schema::table('order_product', function (Blueprint $table) {
        $table->integer('amount')->nullable()->after('count');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      Schema::table('order_product', function (Blueprint $table) {
//          if(Schema::hasColumn('order_product', 'amount'))
        $table->dropColumn('amount');
      });
    }
};
