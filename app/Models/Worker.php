<?php

namespace App\Models;

use App\Events\Worker\CreateEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Worker extends Model
{
	use HasFactory;

	protected $table = "workers";

	protected $guarded = false;

	protected static function booted()
	{
		parent::created(function($model) {

			event(new CreateEvent($model));

			// Profile::create([
			// 	'worker_id' => $model->id
			// ]);
		});
	}

	public function profile()
	{
		// return $this->hasOne(Profile::class, 'worker_id', 'id');
		return $this->hasOne(Profile::class);
	}

	public function position()
	{
		// return $this->belongsTo(Position::class, 'position_id', 'id');
		return $this->belongsTo(Position::class);
	}

	public function projects()
	{
		//return $this->belongsToMany(Project::class, 'project_workers', 'worker_id', 'project_id');
		return $this->belongsToMany(Project::class);
	}

	public function avatar()
	{
		return $this->morphOne(Avatar::class, 'avatarable');
	}

	public function reviews()
	{
		return $this->morphMany(Review::class, 'reviewable');
	}

	public function tags()
	{
		return $this->morphToMany(Tag::class, 'taggable');
	}
}
