<?php

public function up()
{
    Schema::create('attendances', function (Blueprint $table) {
        $table->id();
        $table->foreignId('student_id')->constrained()->onDelete('cascade');
        $table->date('attendance_date');
        $table->enum('status', ['Hadir', 'Sakit', 'Izin', 'Alpha']);
        $table->timestamps();
    });
}
