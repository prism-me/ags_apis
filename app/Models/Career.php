<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Career extends Eloquent
{
    use HasFactory;

    protected $table = 'careers';

    protected $primaryKey = '_id';

    protected $guarded = [];

}
