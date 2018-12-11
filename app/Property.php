<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {
	protected $fillable = [
		'title',
		'excerpt',
		'detail',
		'address',
		'city',
		'zone',
		'departamento',
		'provincia',
		'disrito',
		'category',
		'operacion',
		'price_contrato',
		'comision',
		'price',
		'full-area',
		'build-area',
		'num_pisos',
		'owner',
		'captador',
		'agent',
		'cocheras',
		'bathroon',
		'bedroon',
		'city_id',
		'category_id',
	];

	protected $dates = [
		'startpublished_at',
		'startcontrato_at',
		'endcontrato_at',
	];

	// $product->category
	public function city() {
		return $this->belongsTo(City::class);
	}

	// $product->images
	public function images() {
		return $this->hasMany(PropertyImage::class);
	}

	public function getFeaturedImageUrlAttribute() {

		//$users = App\User::where('active', 1)->get();

		$featuredImage = $this->images()->where('featured', true)->first();

		if (!$featuredImage) {

			$featuredImage = $this->images->first();
			//dd($featuredImage);
		}

		if ($featuredImage) {
			//dd('mostramos imagen destacada');
			return $featuredImage->url;
		}

		// default
		return '/images/properties/default.jpg';

	}
}
