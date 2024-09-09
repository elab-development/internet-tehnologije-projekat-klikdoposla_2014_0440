<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmenaTabeleProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('profiles',function (Blueprint $table){
        //     $table->renameColumn('company','COMPANY');
        // });
        // Schema::table('profiles', function (Blueprint $table) {
        //     $table->string('skills', 50)->change();
        // });
        // Schema::table('profiles',function (Blueprint $table){
        //     $table->string('test');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    // {}
    {
        Schema::table('profiles',function (Blueprint $table){
            $table->dropColumn('test');
          $table->renameColumn('COMPANY','company');
          });
    }
}

