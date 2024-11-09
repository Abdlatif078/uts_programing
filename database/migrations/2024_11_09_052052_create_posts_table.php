<?php

public function up()
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('class');
        $table->timestamps();
    });
}
