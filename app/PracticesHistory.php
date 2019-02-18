<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquence\Behaviours\CamelCasing;

class PracticesHistory extends Model
{
	use CamelCasing;
	
    protected $primaryKey = 'id_practices_history';
	protected $table = 'practices_history';
	public $timestamps = false;

	/*public function questions()
    {
        return $this->hasMany('App\Questions', 'category_id');
    }*/
}
