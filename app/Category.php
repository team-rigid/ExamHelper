<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquence\Behaviours\CamelCasing;

class Category extends Model
{
	use CamelCasing;
	
    protected $primaryKey = 'id_category';
	protected $table = 'category';
	public $timestamps = false;

	/*public function questions()
    {
        return $this->hasMany('App\Questions', 'category_id');
    }*/
}
