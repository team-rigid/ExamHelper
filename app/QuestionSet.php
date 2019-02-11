<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquence\Behaviours\CamelCasing;

class QuestionSet extends Model
{
	use CamelCasing;
	
    protected $primaryKey = 'id_question_set';
	protected $table = 'question_set';
	public $timestamps = false;

	/*public function questions()
    {
        return $this->hasMany('App\Questions', 'category_id');
    }*/
}
