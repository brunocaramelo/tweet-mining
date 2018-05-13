<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function( $collection )
        {
            $collection->index('name');
            $collection->password('password');
            $collection->unique('email');
            $collection->string('password');
            $collection->string('remember_token');
            $collection->string('api_token');
        
        });
      
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
    }
}
