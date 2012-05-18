<?php

if(!file_exists($f = '../ajaxfw.php')) {
	die(
	"Cjax Framework for CI was not detected in the parent directory. Make sure the framework is placed in the upper directory.
	<br />
	You may download the framework in the official  repository:<b>Download</b>
	<a href='http://code.google.com/p/ajax-framework-for-codeigniter/downloads/list'>http://code.google.com/p/ajax-framework-for-codeigniter/downloads/list</a>
	");
}

require_once $f;