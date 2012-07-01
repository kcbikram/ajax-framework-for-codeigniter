<?php

class AjaxController {
	
	function main()
	{
		if(file_exists($f = FCPATH.'/cjax/'.'includes.php')) {
			if(!defined('AJAX_INCLUDES')) {
				include_once $f;
			}
		}
		require_once(FCPATH.'ajaxfw.php');
	}
	
}