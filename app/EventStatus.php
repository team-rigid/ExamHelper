<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquence\Behaviours\CamelCasing;

class EventStatus extends Model
{
	use CamelCasing;
	
    protected $primaryKey = 'id_event_status';
	protected $table = 'event_status';
	public $timestamps = false;
}
