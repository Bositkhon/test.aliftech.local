<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('folder_id');

            $table->foreign('folder_id')
                ->references('id')
                ->on('folders');

            $table->string('file_name');
            $table->string('file_path');
            $table->string('extension');
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
        Schema::table('documents', function (Blueprint $table){
            $table->dropForeign(['folder_id']);
        });
        Schema::dropIfExists('documents');
    }
}
