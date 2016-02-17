<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    public function content() {

	return $this->hasMany('App\ModulesContent'); }

}
