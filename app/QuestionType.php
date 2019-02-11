<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquence\Behaviours\CamelCasing;

class QuestionType extends Model
{
    use CamelCasing;
	
    protected $primaryKey = 'id_question_type';
	protected $table = 'question_type';
	public $timestamps = false;
}
