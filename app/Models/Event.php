<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Event extends Eloquent
{
    use HasFactory;
    
    protected $table = 'events';

    protected $primaryKey = '_id';

    protected $guarded = [];


}
