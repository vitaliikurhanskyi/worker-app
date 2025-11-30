<?php


namespace App\Http\Filters\Var1;

use Illuminate\Database\Eloquent\Builder;

class WorkerFilter extends AbstractFilter
{

	// private array $params = [];

	const NAME = 'name';
	const SURNAME = 'surename';
	const EMAIL = 'email';
	const FROM = 'from';
	const TO = 'to';
	const DESCRIPTION = 'description';
	const IS_MARRIED = 'is_married';

	// public function __construct(array $params)
	// {
	// 	$this->params = $params;
	// }

	public function getCallbacks(): array
	{
		return [
			self::NAME => 'name',
			self::SURNAME => 'surename',
			self::EMAIL => 'email',
			self::FROM => 'from',
			self::TO => 'to',
			self::DESCRIPTION => 'description',
			self::IS_MARRIED => 'is_married',
		];
	}

	// public function applyFilter(Builder $builder)
	// {
	// 	foreach($this->getCallbacks() as $key => $callback) {
	// 		if(isset($this->params[$key])) {
	// 			$this->$callback($builder, $this->params[$key]);
	// 		}
	// 	}
	// }

	public function name(Builder $builder, $value)
	{
		$builder->where('name', 'like', "%{$value}%");
	}

	public function surename(Builder $builder, $value)
	{
		$builder->where('surname', 'like', "%{$value}%");
	}

	public function email(Builder $builder, $value)
	{
		$builder->where('email', 'like', "%{$value}%");
	}

	public function from(Builder $builder, $value)
	{
		$builder->where('age', '>', $value);
	}

	public function to(Builder $builder, $value)
	{
		$builder->where('age', '<', $value);
	}

	public function description(Builder $builder, $value)
	{
		$builder->where('description', 'like', "%{$value}%");
	}

	public function isMarried(Builder $builder, $value)
	{
		$builder->where('is_married', '=', true);
	}
}