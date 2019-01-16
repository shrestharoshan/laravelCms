<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table ='tbl_jobs';
    public $timestamps = false; //disable elquent from mainiting update_at and created_at by default
}
