<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class DataBase extends Model
{
    protected $table = 'test';

    public $timestamps = false;

}
