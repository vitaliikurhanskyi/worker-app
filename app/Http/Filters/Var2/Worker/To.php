<?php

namespace App\Http\Filters\Var2\Worker;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class To
{
	public function handle(Builder $builder, Closure $next)
	{
		if(request()->has('to')) {
			$builder->where('age', '<', request('to'));
		}
		return $next($builder);
	}
}