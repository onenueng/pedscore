<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrqmastertbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crqmastertbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('crq_desc');
            $table->integer('ayear');
            $table->timestamps();
        });
        
        $crq_desces = array(
            ['crq_desc' => 'CRQ1', 'ayear' => 1],
            ['crq_desc' => 'CRQ2', 'ayear' => 1],
            ['crq_desc' => 'CRQ3', 'ayear' => 1],
            ['crq_desc' => 'CRQ4', 'ayear' => 1],
            ['crq_desc' => 'CRQ5', 'ayear' => 1],
            ['crq_desc' => 'CRQ6', 'ayear' => 1],
            ['crq_desc' => 'CRQ7', 'ayear' => 1],
            ['crq_desc' => 'CRQ8', 'ayear' => 1],
            ['crq_desc' => 'CRQ9', 'ayear' => 1],
            ['crq_desc' => 'CRQ10', 'ayear' => 1],
            ['crq_desc' => 'CRQ11', 'ayear' => 1],
            ['crq_desc' => 'CRQ12', 'ayear' => 1],
            ['crq_desc' => 'CRQ13', 'ayear' => 1],
            ['crq_desc' => 'CRQ14', 'ayear' => 1],
            ['crq_desc' => 'CRQ15', 'ayear' => 1],
            ['crq_desc' => 'CRQ16', 'ayear' => 1],
            ['crq_desc' => 'CRQ1', 'ayear' => 2],
            ['crq_desc' => 'CRQ2', 'ayear' => 2],
            ['crq_desc' => 'CRQ3', 'ayear' => 2],
            ['crq_desc' => 'CRQ4', 'ayear' => 2],
            ['crq_desc' => 'CRQ5', 'ayear' => 2],
            ['crq_desc' => 'CRQ6', 'ayear' => 2],
            ['crq_desc' => 'CRQ7', 'ayear' => 2],
            ['crq_desc' => 'CRQ8', 'ayear' => 2],
            ['crq_desc' => 'CRQ9', 'ayear' => 2],
            ['crq_desc' => 'CRQ10', 'ayear' => 2],
            ['crq_desc' => 'CRQ11', 'ayear' => 2],
            ['crq_desc' => 'CRQ12', 'ayear' => 2],
            ['crq_desc' => 'CRQ13', 'ayear' => 2],
            ['crq_desc' => 'CRQ14', 'ayear' => 2],
            ['crq_desc' => 'CRQ15', 'ayear' => 2],
            ['crq_desc' => 'CRQ16', 'ayear' => 2],
            ['crq_desc' => 'CRQ1', 'ayear' => 3],
            ['crq_desc' => 'CRQ2', 'ayear' => 3],
            ['crq_desc' => 'CRQ3', 'ayear' => 3],
            ['crq_desc' => 'CRQ4', 'ayear' => 3],
            ['crq_desc' => 'CRQ5', 'ayear' => 3],
            ['crq_desc' => 'CRQ6', 'ayear' => 3],
            ['crq_desc' => 'CRQ7', 'ayear' => 3],
            ['crq_desc' => 'CRQ8', 'ayear' => 3],
            ['crq_desc' => 'CRQ9', 'ayear' => 3],
            ['crq_desc' => 'CRQ10', 'ayear' =>3],
            ['crq_desc' => 'CRQ11', 'ayear' => 3],
            ['crq_desc' => 'CRQ12', 'ayear' => 3],
            ['crq_desc' => 'CRQ13', 'ayear' => 3],
            ['crq_desc' => 'CRQ14', 'ayear' => 3],
            ['crq_desc' => 'CRQ15', 'ayear' => 3],
            ['crq_desc' => 'CRQ16', 'ayear' => 3],

        );

        foreach ( $crq_desces as $crq_desc) {
            \App\Crqmaster::create($crq_desc);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crqmastertbs');
    }
}
