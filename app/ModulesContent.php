<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModulesContent extends Model
{
    protected $table = 'modules_content';

    /**
     * Get the user that owns the phone.
     */
	public function modules() {

	return $this->belongsTo('App\Modules'); 
	
	}
}
