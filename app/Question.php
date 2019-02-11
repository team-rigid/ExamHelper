<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquence\Behaviours\CamelCasing;

class Question extends Model
{
	use CamelCasing;
	
    protected $primaryKey = 'id_questions';
	protected $table = 'questions';
	public $timestamps = false;

	/*public function questions()
    {
        return $this->hasMany('App\Questions', 'category_id');
    }*/
}
