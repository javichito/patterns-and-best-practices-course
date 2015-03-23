<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

	const MAX_LENGTH = 144;

	protected $fillable = ['user_id', 'content'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function scopeLatest()
	{
		return self::limit(20)->get();
	}

}
