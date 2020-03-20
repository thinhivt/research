<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpacePark extends Model
{
	protected $table = 'space_parks';
	
    protected $fillable = [
        'number', 'status', 'group_id', 'trouble'
    ];
}
