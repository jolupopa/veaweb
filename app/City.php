<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {
	protected $fillable = [
		'name', 'slug',
	];

	public function properties() {
		return $this->hasMany(Property::class);
	}
}
