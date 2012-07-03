<?php

class Test extends CI_Controller {
		
		

	function __construct()
	{
		parent::__construct();
	}
	
		
	/**
	 * 
	 * ajax.php?test/test/a/b/c
	 * 
	 * @param unknown_type $a
	 * @param unknown_type $b
	 * @param unknown_type $c
	 */
	function test($a = null,$b = null, $c = null)
	{
		
		$this->load->view('test', array('data' => $a .' '.$b.' '.$c));
	}
	
	/**
	 * return HTML
	 */
	function test2()
	{
		echo "some html here";
	}
	
	/**
	* will return a json string to the ajax request.
	 */
	function test3()
	{
		$data = array('test1','test2','test3');
		
		return $data;
	}

}