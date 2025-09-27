<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = "positions";

    protected $guarded = false;

    public function workers()
    {
        // return $this->hasMany(Worker::class, 'position_id', 'id');
        return $this->hasMany(Worker::class);
    }

	public function department()
	{
		// return $this->belongsTo(Department::class, 'department_id', 'id');
		return $this->belongsTo(Department::class);
	}

	public function maxAgeWorker()
	{
		return $this->hasOne(Worker::class)->ofMany('age', 'max');
	}

	public function minAgeWorker()
	{
		return $this->hasOne(Worker::class)->ofMany('age', 'min');
	}

	public function queryWorkerByName()
	{
		return $this->hasOne(Worker::class)->where('surname', 'Dell');
	}
}
