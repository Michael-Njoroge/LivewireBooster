<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Continent extends Model {
	use HasFactory, HasUuids;
	protected $guarded = [];

	public function countries(): HasMany {
		return $this->hasMany(Countries::class);
	}
}
