<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquence\Behaviours\CamelCasing;

class EventResult extends Model
{
	use CamelCasing;
	
    protected $primaryKey = 'id_event_results';
	protected $table = 'event_results';
	public $timestamps = false;

	/*public function questions()
    {
        return $this->hasMany('App\Questions', 'category_id');
    }*/
}
