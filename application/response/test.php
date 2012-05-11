<?php

class controller_test extends CI_Controller {
	
	function test($a = null,$b = null,$c = null)
	{
		
		$this->load->view('test', array('data' => $a .' '.$b.' '.$c));
	}

}