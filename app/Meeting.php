<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [

        'Meeting No', 'title', 'date', 'start_time', 'end_time', 'description', 'invitees', 'status', 'Appointment'

    ];
}
