<?php

class Controller_Admin extends Controller_Base
{
	public function before()
	{
		parent::before();
		
		$this->template->title = '管理画面';
	}


	public function action_index()
	{
		$this->template->main = View::forge('admin/index');
	}

}
