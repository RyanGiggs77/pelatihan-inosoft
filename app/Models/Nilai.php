<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Nilai extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'nilai';

}
