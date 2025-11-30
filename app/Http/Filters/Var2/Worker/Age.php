<?php

namespace App\Http\Filters\Var2\Worker;

use Closure;
use Illuminate\Database\Eloquent\Builder;

class Age
{
	public function handle(Builder $builder, Closure $next)
	{
		if(request()->has('to')) {
			$builder->where('to', request('to'));
		}
		return $next($builder);
	}
}