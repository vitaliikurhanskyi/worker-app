<?php

namespace App\Models\Traits;

use App\Http\Filters\Var1\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

trait hasFilter
{
	public function scopeFilter(Builder $builder, AbstractFilter $filter)
	{
		$filter->applyFilter($builder);
		return $builder;
	}
}