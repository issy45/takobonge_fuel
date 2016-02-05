<?php

class Service_Base
{
	protected static function createQueryParams($properties, $params, $exception = [])
	{
		$exception = Arr::merge($exception, ['id', 'created_at', 'updated_at']);
		foreach ($properties as $column => $val) {
			if (!in_array($column, $exception)) {
				$query_params[$column] = (isset($params[$column]) && $params[$column] != '') ? $params[$column] : $val['default'];
			}
		}
		
		return $query_params;
	}
}