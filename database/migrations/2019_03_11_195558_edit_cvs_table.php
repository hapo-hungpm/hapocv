<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('cvs', function (Blueprint $table)
        {
            $table->string('email')->change();
            $table->text('summary')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cvs', function (Blueprint $table)
        {
            //can't rollback!
            $table->string('email')->unique()
                ->change();
            $table->string('summary')->change();
        });
    }
}
