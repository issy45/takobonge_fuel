<?php

class Controller_Base extends Controller_Template
{
	public $template = 'layout_templates/base';


	public function before()
	{
		parent::before();

		// controllerとaction毎にcssとjsを自動読み込み
		$controller = mb_strtolower(str_replace('Controller/', '', strtr(Request::main()->controller, '_', '/')));
		$action     = Request::main()->action;
		if (File::exists(DOCROOT.'assets/css/'.$controller.'.css')) {
			Asset::css(array($controller.'.css'), array(), 'controller_style_css', false);
		}
		if (File::exists(DOCROOT.'assets/css/'.$controller.'/'.$action.'.css')) {
			Asset::css(array($controller.'/'.$action.'.css'), array(), 'action_style_css', false);
		}
		if (File::exists(DOCROOT.'assets/js/'.$controller.'.js')) {
			Asset::js(array($controller.'.js'), array(), 'controller_script_js', false);
		}
		if (File::exists(DOCROOT.'assets/js/'.$controller.'/'.$action.'.js')) {
			Asset::js(array($controller.'/'.$action.'.js'), array(), 'action_script_js', false);
		}
	}

}
