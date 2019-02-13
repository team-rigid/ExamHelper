<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquence\Behaviours\CamelCasing;

class Event extends Model
{
	use CamelCasing;
	
    protected $primaryKey = 'id_events';
	protected $table = 'events';
	public $timestamps = false;

	public function questionSet()
    {
        return $this->hasMany('App\QuestionSet', 'id_events');
    }
}
