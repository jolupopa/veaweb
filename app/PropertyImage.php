<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model {
	// $productImage->product
	public function property() {
		return $this->belongsTo(Property::class);
	}

	//accesor
	public function getUrlAttribute() {
		if (substr($this->image, 0, 4) === 'http') {
			return $this->image;
		}

		return '/images/properties/' . $this->image;

	}
}
