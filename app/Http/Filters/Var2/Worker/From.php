<?php

namespace App\Http\Filters\Var2\Worker;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class From
{
	public function handle(Builder $builder, Closure $next)
	{
		if(request()->has('from')) {
			$builder->where('age', '>', request('from'));
		}
		return $next($builder);
	}
}