<?php
$view = include('../../views/home_base/home.php');

class home_base{
	
	function __construct(){

	}

	function redirecionar_pagina(){
		echo $view;
	}
}
