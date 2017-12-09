<?php

class User{

	function is_valid($user,$pass){
		if($pass == "admin"){
			return true;
		}else{
			return false;
		}
	}
}