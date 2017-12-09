<?php

class mathematica{

	function __construct(){
		echo "i am contstructor";
	}


	function calresult($a,$b,$operation = "add"){
		switch ($operation) {
			case 'add':
				return $this->add($a,$b);
				break;
			
			default:
				return 'operation not supported';
				break;
		}
	}

	function add($a,$b){
		return $a+$b;
	}

	private function sub($a,$b){
		return $a-$b;
	}

	private function mul($a,$b){
		return $a*$b;
	}

	private function div($a,$b){
		return $a/$b;
	}

}


?>