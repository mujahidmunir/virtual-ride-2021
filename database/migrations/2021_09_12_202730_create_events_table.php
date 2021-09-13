<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('start_date')->useCurrent();
            $table->timestamp('ended_date')->useCurrent();
            $table->string('image');
            $table->longText('rules');
            $table->timestamps();
        });

        $event = [
            [
                'name' => 'Virtual Ride Series 1',
                'start_date' => '2021-09-27 17:01:57',
                'ended_date' => '2021-10-05 17:01:57',
                'image' => 'event.jpeg',
                'rules' => 'apa aja'
            ],[
                'name' => 'Virtual Ride Series 2',
                'start_date' => '2021-09-27 17:01:57',
                'ended_date' => '2021-10-05 17:01:57',
                'image' => 'event.jpeg',
                'rules' => 'apa aja'
            ],[
                'name' => 'Virtual Ride Series 3',
                'start_date' => '2021-09-27 17:01:57',
                'ended_date' => '2021-10-05 17:01:57',
                'image' => 'event.jpeg',
                'rules' => 'apa aja'
            ],[
                'name' => 'Virtual Ride Series 4',
                'start_date' => '2021-09-27 17:01:57',
                'ended_date' => '2021-10-05 17:01:57',
                'image' => 'event.jpeg',
                'rules' => 'apa aja'
            ],[
                'name' => 'Virtual Ride Series 5',
                'start_date' => '2021-09-27 17:01:57',
                'ended_date' => '2021-10-05 17:01:57',
                'image' => 'event.jpeg',
                'rules' => 'apa aja'
            ],
        ];

        \Illuminate\Support\Facades\DB::table('events')->insert($event);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
