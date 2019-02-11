<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquence\Behaviours\CamelCasing;

class UserType extends Model
{
	use CamelCasing;
	
    protected $primaryKey = 'id_user_type';
	protected $table = 'user_type';
	public $timestamps = false;

	/*public function questions()
    {
        return $this->hasMany('App\Questions', 'category_id');
    }*/
}
