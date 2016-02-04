<?php

class Form_Base
{
	protected $errors    = [];
	protected $form_data = [];

	public function get_errors()
	{
		return $this->errors;
	}

	public function get_form_data()
	{
		return $this->form_data;
	}

	protected function uploaded_files()
	{
		$files = [];
		foreach (\Fuel\Core\Upload::get_files() as $file)
		{
			$files[$file['field']] = $file;
		}
		return $files;
	}

	protected function restructure_uploaded_errors()
	{
		$errors = [];
		foreach (\Fuel\Core\Upload::get_errors() as $error)
		{
			$errors[$error['field']] = $error;
		}
		return $errors;
	}

	protected function uploaded_errors($excepts=[])
	{
		$errors = [];
		foreach ($this->restructure_uploaded_errors() as $error)
		{
			foreach ($error['errors'] as $e)
			{
				if (!in_array($e['error'], $excepts))
				{
					$errors []= $e['message'];
				}
			}
		}
		return $errors;
	}

	protected function uploaded_errors_except_nofile()
	{
		return $this->uploaded_errors([UPLOAD_ERR_NO_FILE]);
	}

	protected function _forge_params($params=[], $columns)
	{
		$ret = [];
		foreach ($columns as $column) {
			if (is_array($column)) {
				$ret[$column[0]] = Arr::get($params, $column[0], $column[1]);
			} else {
				$ret[$column] = Arr::get($params, $column);
			}
		}
		return $ret;
	}
}